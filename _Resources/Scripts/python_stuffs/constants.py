import re

XML_NS_URI = 'http://www.w3.org/XML/1998/namespace'
TEI_NS_URI = 'http://www.tei-c.org/ns/1.0'
XI_NS_URI = 'http://www.w3.org/2001/XInclude'
XML_NS = lambda x: '{{{}}}{}'.format(XML_NS_URI, x)
TEI_NS = lambda x: '{{{}}}{}'.format(TEI_NS_URI, x)
XI_NS = lambda x: '{{{}}}{}'.format(XI_NS_URI, x)
NS_MAP = {None: TEI_NS_URI, 'xi': XI_NS_URI, 'xml': XML_NS_URI}

STRIP_TITLE_TAG = re.compile('<title[^<]+?>(.*)</title>(.*)')
