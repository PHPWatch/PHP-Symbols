<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\XMLDocument',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\XMLDocument',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Dom\\XMLDocument class (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-xmldocument.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Dom\\ParentNode',
  ),
  'constants' => 
  array (
    'DOCUMENT_POSITION_DISCONNECTED' => 1,
    'DOCUMENT_POSITION_PRECEDING' => 2,
    'DOCUMENT_POSITION_FOLLOWING' => 4,
    'DOCUMENT_POSITION_CONTAINS' => 8,
    'DOCUMENT_POSITION_CONTAINED_BY' => 16,
    'DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC' => 32,
  ),
  'properties' => 
  array (
    'nodeType' => 
    array (
      'name' => 'nodeType',
      'class' => 'Dom\\Node',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nodeName' => 
    array (
      'name' => 'nodeName',
      'class' => 'Dom\\Node',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'baseURI' => 
    array (
      'name' => 'baseURI',
      'class' => 'Dom\\Node',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'isConnected' => 
    array (
      'name' => 'isConnected',
      'class' => 'Dom\\Node',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'ownerDocument' => 
    array (
      'name' => 'ownerDocument',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Document',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'parentNode' => 
    array (
      'name' => 'parentNode',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Node',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'parentElement' => 
    array (
      'name' => 'parentElement',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'childNodes' => 
    array (
      'name' => 'childNodes',
      'class' => 'Dom\\Node',
      'type' => 'Dom\\NodeList',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'firstChild' => 
    array (
      'name' => 'firstChild',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Node',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lastChild' => 
    array (
      'name' => 'lastChild',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Node',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'previousSibling' => 
    array (
      'name' => 'previousSibling',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Node',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nextSibling' => 
    array (
      'name' => 'nextSibling',
      'class' => 'Dom\\Node',
      'type' => '?Dom\\Node',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nodeValue' => 
    array (
      'name' => 'nodeValue',
      'class' => 'Dom\\Node',
      'type' => '?string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'textContent' => 
    array (
      'name' => 'textContent',
      'class' => 'Dom\\Node',
      'type' => '?string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'implementation' => 
    array (
      'name' => 'implementation',
      'class' => 'Dom\\Document',
      'type' => 'Dom\\Implementation',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'URL' => 
    array (
      'name' => 'URL',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'documentURI' => 
    array (
      'name' => 'documentURI',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'characterSet' => 
    array (
      'name' => 'characterSet',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'charset' => 
    array (
      'name' => 'charset',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'inputEncoding' => 
    array (
      'name' => 'inputEncoding',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'doctype' => 
    array (
      'name' => 'doctype',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\DocumentType',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'documentElement' => 
    array (
      'name' => 'documentElement',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'firstElementChild' => 
    array (
      'name' => 'firstElementChild',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lastElementChild' => 
    array (
      'name' => 'lastElementChild',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'childElementCount' => 
    array (
      'name' => 'childElementCount',
      'class' => 'Dom\\Document',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'body' => 
    array (
      'name' => 'body',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\HTMLElement',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'head' => 
    array (
      'name' => 'head',
      'class' => 'Dom\\Document',
      'type' => '?Dom\\HTMLElement',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'title' => 
    array (
      'name' => 'title',
      'class' => 'Dom\\Document',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'xmlEncoding' => 
    array (
      'name' => 'xmlEncoding',
      'class' => 'Dom\\XMLDocument',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'xmlStandalone' => 
    array (
      'name' => 'xmlStandalone',
      'class' => 'Dom\\XMLDocument',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'xmlVersion' => 
    array (
      'name' => 'xmlVersion',
      'class' => 'Dom\\XMLDocument',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'formatOutput' => 
    array (
      'name' => 'formatOutput',
      'class' => 'Dom\\XMLDocument',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    'createEmpty' => 
    array (
      'name' => 'createEmpty',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'version' => 
        array (
          'position' => 0,
          'name' => 'version',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '1.0',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'UTF-8',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\XMLDocument',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createFromFile' => 
    array (
      'name' => 'createFromFile',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'path' => 
        array (
          'position' => 0,
          'name' => 'path',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'overrideEncoding' => 
        array (
          'position' => 2,
          'name' => 'overrideEncoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\XMLDocument',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createFromString' => 
    array (
      'name' => 'createFromString',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'source' => 
        array (
          'position' => 0,
          'name' => 'source',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'overrideEncoding' => 
        array (
          'position' => 2,
          'name' => 'overrideEncoding',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\XMLDocument',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createEntityReference' => 
    array (
      'name' => 'createEntityReference',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\EntityReference',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'validate' => 
    array (
      'name' => 'validate',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xinclude' => 
    array (
      'name' => 'xinclude',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'saveXml' => 
    array (
      'name' => 'saveXml',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => '?Dom\\Node',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'saveXmlFile' => 
    array (
      'name' => 'saveXmlFile',
      'class' => 'Dom\\XMLDocument',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getElementsByTagName' => 
    array (
      'name' => 'getElementsByTagName',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\HTMLCollection',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getElementsByTagNameNS' => 
    array (
      'name' => 'getElementsByTagNameNS',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\HTMLCollection',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createElement' => 
    array (
      'name' => 'createElement',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Element',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createElementNS' => 
    array (
      'name' => 'createElementNS',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Element',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createDocumentFragment' => 
    array (
      'name' => 'createDocumentFragment',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
      ),
      'return_type' => 'Dom\\DocumentFragment',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createTextNode' => 
    array (
      'name' => 'createTextNode',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Text',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createCDATASection' => 
    array (
      'name' => 'createCDATASection',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\CDATASection',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createComment' => 
    array (
      'name' => 'createComment',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Comment',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createProcessingInstruction' => 
    array (
      'name' => 'createProcessingInstruction',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'target' => 
        array (
          'position' => 0,
          'name' => 'target',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 1,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\ProcessingInstruction',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'importNode' => 
    array (
      'name' => 'importNode',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => '?Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'deep' => 
        array (
          'position' => 1,
          'name' => 'deep',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'adoptNode' => 
    array (
      'name' => 'adoptNode',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createAttribute' => 
    array (
      'name' => 'createAttribute',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createAttributeNS' => 
    array (
      'name' => 'createAttributeNS',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getElementById' => 
    array (
      'name' => 'getElementById',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'elementId' => 
        array (
          'position' => 0,
          'name' => 'elementId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Element',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'registerNodeClass' => 
    array (
      'name' => 'registerNodeClass',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'baseClass' => 
        array (
          'position' => 0,
          'name' => 'baseClass',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extendedClass' => 
        array (
          'position' => 1,
          'name' => 'extendedClass',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'schemaValidate' => 
    array (
      'name' => 'schemaValidate',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'schemaValidateSource' => 
    array (
      'name' => 'schemaValidateSource',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'source' => 
        array (
          'position' => 0,
          'name' => 'source',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'relaxNgValidate' => 
    array (
      'name' => 'relaxNgValidate',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'relaxNgValidateSource' => 
    array (
      'name' => 'relaxNgValidateSource',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'source' => 
        array (
          'position' => 0,
          'name' => 'source',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'append' => 
    array (
      'name' => 'append',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceChildren' => 
    array (
      'name' => 'replaceChildren',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'importLegacyNode' => 
    array (
      'name' => 'importLegacyNode',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'deep' => 
        array (
          'position' => 1,
          'name' => 'deep',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'querySelector' => 
    array (
      'name' => 'querySelector',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Element',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'querySelectorAll' => 
    array (
      'name' => 'querySelectorAll',
      'class' => 'Dom\\Document',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\NodeList',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRootNode' => 
    array (
      'name' => 'getRootNode',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasChildNodes' => 
    array (
      'name' => 'hasChildNodes',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'normalize' => 
    array (
      'name' => 'normalize',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cloneNode' => 
    array (
      'name' => 'cloneNode',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'deep' => 
        array (
          'position' => 0,
          'name' => 'deep',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isEqualNode' => 
    array (
      'name' => 'isEqualNode',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'otherNode' => 
        array (
          'position' => 0,
          'name' => 'otherNode',
          'type' => '?Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isSameNode' => 
    array (
      'name' => 'isSameNode',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'otherNode' => 
        array (
          'position' => 0,
          'name' => 'otherNode',
          'type' => '?Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareDocumentPosition' => 
    array (
      'name' => 'compareDocumentPosition',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contains' => 
    array (
      'name' => 'contains',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => '?Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lookupPrefix' => 
    array (
      'name' => 'lookupPrefix',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lookupNamespaceURI' => 
    array (
      'name' => 'lookupNamespaceURI',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isDefaultNamespace' => 
    array (
      'name' => 'isDefaultNamespace',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'insertBefore' => 
    array (
      'name' => 'insertBefore',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'child' => 
        array (
          'position' => 1,
          'name' => 'child',
          'type' => '?Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'appendChild' => 
    array (
      'name' => 'appendChild',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceChild' => 
    array (
      'name' => 'replaceChild',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'child' => 
        array (
          'position' => 1,
          'name' => 'child',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeChild' => 
    array (
      'name' => 'removeChild',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'child' => 
        array (
          'position' => 0,
          'name' => 'child',
          'type' => 'Dom\\Node',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLineNo' => 
    array (
      'name' => 'getLineNo',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNodePath' => 
    array (
      'name' => 'getNodePath',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'C14N' => 
    array (
      'name' => 'C14N',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'exclusive' => 
        array (
          'position' => 0,
          'name' => 'exclusive',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'withComments' => 
        array (
          'position' => 1,
          'name' => 'withComments',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'xpath' => 
        array (
          'position' => 2,
          'name' => 'xpath',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nsPrefixes' => 
        array (
          'position' => 3,
          'name' => 'nsPrefixes',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'C14NFile' => 
    array (
      'name' => 'C14NFile',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'exclusive' => 
        array (
          'position' => 1,
          'name' => 'exclusive',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'withComments' => 
        array (
          'position' => 2,
          'name' => 'withComments',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'xpath' => 
        array (
          'position' => 3,
          'name' => 'xpath',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nsPrefixes' => 
        array (
          'position' => 4,
          'name' => 'nsPrefixes',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__sleep' => 
    array (
      'name' => '__sleep',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:dom> final class Dom\\XMLDocument extends Dom\\Document implements Dom\\ParentNode ] {

  - Constants [6] {
    Constant [ public int DOCUMENT_POSITION_DISCONNECTED ] { 1 }
    Constant [ public int DOCUMENT_POSITION_PRECEDING ] { 2 }
    Constant [ public int DOCUMENT_POSITION_FOLLOWING ] { 4 }
    Constant [ public int DOCUMENT_POSITION_CONTAINS ] { 8 }
    Constant [ public int DOCUMENT_POSITION_CONTAINED_BY ] { 16 }
    Constant [ public int DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC ] { 32 }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:dom> static public method createEmpty ] {

      - Parameters [2] {
        Parameter #0 [ <optional> string $version = "1.0" ]
        Parameter #1 [ <optional> string $encoding = "UTF-8" ]
      }
      - Return [ Dom\\XMLDocument ]
    }

    Method [ <internal:dom> static public method createFromFile ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $path ]
        Parameter #1 [ <optional> int $options = 0 ]
        Parameter #2 [ <optional> ?string $overrideEncoding = null ]
      }
      - Return [ Dom\\XMLDocument ]
    }

    Method [ <internal:dom> static public method createFromString ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $source ]
        Parameter #1 [ <optional> int $options = 0 ]
        Parameter #2 [ <optional> ?string $overrideEncoding = null ]
      }
      - Return [ Dom\\XMLDocument ]
    }
  }

  - Properties [32] {
    Property [ public int $nodeType ]
    Property [ public string $nodeName ]
    Property [ public string $baseURI ]
    Property [ public bool $isConnected ]
    Property [ public ?Dom\\Document $ownerDocument ]
    Property [ public ?Dom\\Node $parentNode ]
    Property [ public ?Dom\\Element $parentElement ]
    Property [ public Dom\\NodeList $childNodes ]
    Property [ public ?Dom\\Node $firstChild ]
    Property [ public ?Dom\\Node $lastChild ]
    Property [ public ?Dom\\Node $previousSibling ]
    Property [ public ?Dom\\Node $nextSibling ]
    Property [ public ?string $nodeValue ]
    Property [ public ?string $textContent ]
    Property [ public Dom\\Implementation $implementation ]
    Property [ public string $URL ]
    Property [ public string $documentURI ]
    Property [ public string $characterSet ]
    Property [ public string $charset ]
    Property [ public string $inputEncoding ]
    Property [ public ?Dom\\DocumentType $doctype ]
    Property [ public ?Dom\\Element $documentElement ]
    Property [ public ?Dom\\Element $firstElementChild ]
    Property [ public ?Dom\\Element $lastElementChild ]
    Property [ public int $childElementCount ]
    Property [ public ?Dom\\HTMLElement $body ]
    Property [ public ?Dom\\HTMLElement $head ]
    Property [ public string $title ]
    Property [ public string $xmlEncoding ]
    Property [ public bool $xmlStandalone ]
    Property [ public string $xmlVersion ]
    Property [ public bool $formatOutput ]
  }

  - Methods [51] {
    Method [ <internal:dom> public method createEntityReference ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Return [ Dom\\EntityReference ]
    }

    Method [ <internal:dom> public method validate ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method xinclude ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $options = 0 ]
      }
      - Return [ int ]
    }

    Method [ <internal:dom> public method saveXml ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?Dom\\Node $node = null ]
        Parameter #1 [ <optional> int $options = 0 ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:dom> public method saveXmlFile ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $options = 0 ]
      }
      - Return [ int|false ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method getElementsByTagName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ Dom\\HTMLCollection ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method getElementsByTagNameNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ Dom\\HTMLCollection ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createElement ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $localName ]
      }
      - Return [ Dom\\Element ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createElementNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $qualifiedName ]
      }
      - Return [ Dom\\Element ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createDocumentFragment ] {

      - Parameters [0] {
      }
      - Return [ Dom\\DocumentFragment ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createTextNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Return [ Dom\\Text ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createCDATASection ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Return [ Dom\\CDATASection ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createComment ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Return [ Dom\\Comment ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createProcessingInstruction ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $target ]
        Parameter #1 [ <required> string $data ]
      }
      - Return [ Dom\\ProcessingInstruction ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method importNode ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?Dom\\Node $node ]
        Parameter #1 [ <optional> bool $deep = false ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method adoptNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $node ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $localName ]
      }
      - Return [ Dom\\Attr ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method createAttributeNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $qualifiedName ]
      }
      - Return [ Dom\\Attr ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method getElementById ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $elementId ]
      }
      - Return [ ?Dom\\Element ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method registerNodeClass ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $baseClass ]
        Parameter #1 [ <required> ?string $extendedClass ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method schemaValidate ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method schemaValidateSource ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $source ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method relaxNgValidate ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $filename ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method relaxNgValidateSource ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $source ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Document, prototype Dom\\ParentNode> public method append ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\Document, prototype Dom\\ParentNode> public method prepend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\Document, prototype Dom\\ParentNode> public method replaceChildren ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\Document> public method importLegacyNode ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMNode $node ]
        Parameter #1 [ <optional> bool $deep = false ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Document, prototype Dom\\ParentNode> public method querySelector ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ ?Dom\\Element ]
    }

    Method [ <internal:dom, inherits Dom\\Document, prototype Dom\\ParentNode> public method querySelectorAll ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ Dom\\NodeList ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method getRootNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array $options = [] ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method hasChildNodes ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method normalize ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method cloneNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $deep = false ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method isEqualNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $otherNode ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method isSameNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $otherNode ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method compareDocumentPosition ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $other ]
      }
      - Return [ int ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method contains ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $other ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method lookupPrefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $namespace ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method lookupNamespaceURI ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $prefix ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method isDefaultNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $namespace ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method insertBefore ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Node $node ]
        Parameter #1 [ <required> ?Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method appendChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $node ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method replaceChild ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Node $node ]
        Parameter #1 [ <required> Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method removeChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method getLineNo ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method getNodePath ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method C14N ] {

      - Parameters [4] {
        Parameter #0 [ <optional> bool $exclusive = false ]
        Parameter #1 [ <optional> bool $withComments = false ]
        Parameter #2 [ <optional> ?array $xpath = null ]
        Parameter #3 [ <optional> ?array $nsPrefixes = null ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method C14NFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> bool $exclusive = false ]
        Parameter #2 [ <optional> bool $withComments = false ]
        Parameter #3 [ <optional> ?array $xpath = null ]
        Parameter #4 [ <optional> ?array $nsPrefixes = null ]
      }
      - Return [ int|false ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method __sleep ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom, inherits Dom\\Node> public method __wakeup ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
);
