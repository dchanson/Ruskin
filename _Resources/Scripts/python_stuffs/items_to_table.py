#!/usr/bin/env python

from __future__ import print_function
from lxml import etree, objectify
import re
from os import path
from constants import *

source_file = './tmp/items.xml'
out_file = './tmp/out.xml'

root = etree.parse(source_file).getroot()

out = etree.Element('table', nsmap=NS_MAP)
outDoc = etree.ElementTree(out)

def stringify_children(node):
    from lxml.etree import tostring
    from itertools import chain
    return ''.join(
        chunk for chunk in chain(
            (node.text,),
            chain(*((tostring(child, with_tail=False), child.tail) for child in node.getchildren())),
            (node.tail,)) if chunk)

for item in root.xpath("/list/item"):
    title = item.find('title')

    item.remove(title)
    # print(etree.tostring(item))
    stringified_childs = stringify_children(item)
    print(stringified_childs)
    number, col3text = stringified_childs.split("|")


    row = etree.SubElement(out, 'row', **{'role': 'data'})

    cell1 = etree.SubElement(row, 'cell')
    cell2 = etree.SubElement(row, 'cell')
    cell3 = etree.SubElement(row, 'cell')

    cell1.text = number.strip()
    cell2.append(title)
    cell3.text = col3text.strip()



    # break
outDoc.write(out_file,
    xml_declaration=True,
    encoding='utf-8',
    pretty_print=True)
