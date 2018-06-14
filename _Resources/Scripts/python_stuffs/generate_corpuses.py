#!/usr/bin/env python

from __future__ import print_function
from lxml import etree, objectify
import re
from os import path
from constants import *

xml_file = './account_of_a_tour_on_the_continent_apparatus.xml'
output_dir = './corpuses/'

def add_processing_instructions(node):
    corpus.addprevious(etree.ProcessingInstruction('oxygen', 'RNGSchema="../../common/ruskin.rnc" type="compact"'))
    corpus.addprevious(etree.ProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="../../common/ruskin.xsl"'))

def get_text(node):
    str1 = ""
    if node.text:
        str1 = node.text

        # print(etree.tostring(item))
    return str1 + ''.join(etree.tostring(e) for e in node)

root = etree.parse(xml_file).getroot()

#### Remove namespace from element tags
for elem in root.getiterator():
    if not hasattr(elem.tag, 'find'): continue  # (1)
    i = elem.tag.find('}')
    if i >= 0:
        elem.tag = elem.tag[i+1:]
objectify.deannotate(root, cleanup_namespaces=True)
####

# Find witnesses element root
witness_root = root.xpath("//div[@xml:id='WITNESSES']")[0]
witnesses = witness_root.xpath("list/item")

ms_ix_witness = None
for witness in witnesses:
    title_elem = witness.find('ref[@type="witness"]')
    target_file = title_elem.attrib['target']
    title = get_text(title_elem)
    # if 'IX' not in title:
        # ms_ix_witness = witness
        # continue

    # print(etree.tostring(title_elem))
    # print(title_elem.attrib)
    # print('\n\n\ntitle: ', title)
    witness_data = {
        "title": title,
        'target_file': target_file.replace(".php", ".xml"),
        'id': target_file.replace(".php", ""),
        "subwitnesses": []}

    wits = witness.xpath('list/item')
    # print('length of wits: ', len(wits))
    for wit in wits:
        id=None
        if XML_NS('id') in wit.attrib:
            id = wit.attrib[XML_NS('id')]
        this_subwits_data = []
        # print('wit: ', re.sub('<[^<]+?>', '', etree.tostring(wit)))

        ref = wit.find('ref')
        title = ref.find('title') if ref is not None else wit.find('title')
        assert (title is not None)

        text = get_text(title)

        this_subwits = wit.find('list')
        if this_subwits is not None:
            for this_subwit in this_subwits.findall('item'):
                this_subwit_ref= this_subwit.find('ref')
                this_subwit_title = this_subwit_ref.find('title') if this_subwit_ref is not None else this_subwit.find('title')

                assert (this_subwit_title is not None)

                this_subwit_text = get_text(this_subwit_title)
                this_subwit_target = "" if this_subwit_ref is None else this_subwit_ref.attrib['target']
                this_subwit_type = "" if  this_subwit_ref is None else this_subwit_ref.attrib['type']

                this_subwits_data.append({
                    'text': this_subwit_text,
                    'target': this_subwit_target.replace('.php', '.xml'),
                    'type': this_subwit_type
                })

        target = "" if ref is None else ref.attrib['target']
        _type = "" if ref is None else ref.attrib['type']
        _subtype = title.attrib['type']

        witness_data['subwitnesses'].append({
            "text": text,
            "id": id,
            "target": target.replace('.php', '.xml'),
            "type": _type,
            "subtype": _subtype,
            'subwitnesses': this_subwits_data
        })
        # print('\n')
    # print(witness_data)

    ## Make a Corpus
    corpus = etree.Element(TEI_NS('teiCorpus'), nsmap=NS_MAP)
    corpusDoc = etree.ElementTree(corpus)
    add_processing_instructions(corpus)

    teiHeader = etree.SubElement(corpus, TEI_NS('teiHeader'), type='manuscript')
    fileDesc = etree.SubElement(teiHeader, TEI_NS('fileDesc'), **{XML_NS('id'): witness_data['id']})
    titleStmt = etree.SubElement(fileDesc, TEI_NS('titleStmt'))
    title = etree.SubElement(titleStmt, TEI_NS('title'))
    publicationStmt = etree.SubElement(fileDesc, TEI_NS('publicationStmt'))
    pInPublication = etree.SubElement(publicationStmt, TEI_NS('p'))
    sourceStmt = etree.SubElement(fileDesc, TEI_NS('sourceDesc'))
    pInSource = etree.SubElement(sourceStmt, TEI_NS('p'))

    for subwit in witness_data['subwitnesses']:


        xi_include = etree.SubElement(corpus,
                XI_NS('include'),
                href=path.join('../witnesses', subwit['target'])
                )

        if subwit['subwitnesses']:
            subCorpus = etree.Element(TEI_NS('teiCorpus'), nsmap=NS_MAP)
            subCorpusDoc = etree.ElementTree(subCorpus)

            subTeiHeader = etree.SubElement(subCorpus, TEI_NS('teiHeader'), type='manuscript')
            subFileDesc = etree.SubElement(subTeiHeader, TEI_NS('fileDesc'))

            teiHeaderText = etree.SubElement(subTeiHeader, TEI_NS('title'))
            teiHeaderText.text = subwit['text']
            if len(subwit['subwitnesses']) > 1:
                for this_subwit in subwit['subwitnesses']:
                    sub_xi_include = etree.SubElement(subCorpus,
                                                      XI_NS('include'),
                                                      href=path.join('../witnesses/', this_subwit['target']))
                    # print('t: ', sub_xi_include.text)

                assert(subwit['id'] is not None)
                output_file = path.join(output_dir, '{}.xml'.format(subwit['id']))
                subCorpusDoc.write(output_file, xml_declaration=True, encoding='utf-8', pretty_print=True)
                print('XML written: ', output_file, 'for ', subwit['text'])
    output_file = path.join(output_dir, witness_data['target_file'])


    corpusDoc.write(output_file,
        xml_declaration=True,
        encoding='utf-8',
        pretty_print=True)
    print('XML written: ', output_file)
    # break
    # print(witness_data, '\n')
    # break
# print(witness_data)
