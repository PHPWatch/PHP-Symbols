<?php

return array (
  'type' => 'class',
  'name' => 'DOMNotation',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMNotation',
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
        'name' => 'DOMNotation interface (php.net)',
        'url' => 'https://www.php.net/manual/class.domnotation.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'DOCUMENT_POSITION_DISCONNECTED' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_DISCONNECTED ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DOCUMENT_POSITION_PRECEDING' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_PRECEDING ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DOCUMENT_POSITION_FOLLOWING' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_FOLLOWING ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DOCUMENT_POSITION_CONTAINS' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_CONTAINS ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DOCUMENT_POSITION_CONTAINED_BY' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_CONTAINED_BY ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC ] { 32 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    'appendChild' => 
    array (
      'name' => 'appendChild',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'C14N' => 
    array (
      'name' => 'C14N',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'exclusive' => 
        array (
          'position' => 0,
          'name' => 'exclusive',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
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
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'C14NFile' => 
    array (
      'name' => 'C14NFile',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cloneNode' => 
    array (
      'name' => 'cloneNode',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'deep' => 
        array (
          'position' => 0,
          'name' => 'deep',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLineNo' => 
    array (
      'name' => 'getLineNo',
      'class' => 'DOMNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNodePath' => 
    array (
      'name' => 'getNodePath',
      'class' => 'DOMNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasAttributes' => 
    array (
      'name' => 'hasAttributes',
      'class' => 'DOMNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasChildNodes' => 
    array (
      'name' => 'hasChildNodes',
      'class' => 'DOMNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'insertBefore' => 
    array (
      'name' => 'insertBefore',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'child' => 
        array (
          'position' => 1,
          'name' => 'child',
          'type' => '?DOMNode',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isDefaultNamespace' => 
    array (
      'name' => 'isDefaultNamespace',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isSameNode' => 
    array (
      'name' => 'isSameNode',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'otherNode' => 
        array (
          'position' => 0,
          'name' => 'otherNode',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isEqualNode' => 
    array (
      'name' => 'isEqualNode',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'otherNode' => 
        array (
          'position' => 0,
          'name' => 'otherNode',
          'type' => '?DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
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
    'isSupported' => 
    array (
      'name' => 'isSupported',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'feature' => 
        array (
          'position' => 0,
          'name' => 'feature',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'version' => 
        array (
          'position' => 1,
          'name' => 'version',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lookupNamespaceURI' => 
    array (
      'name' => 'lookupNamespaceURI',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lookupPrefix' => 
    array (
      'name' => 'lookupPrefix',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'normalize' => 
    array (
      'name' => 'normalize',
      'class' => 'DOMNode',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeChild' => 
    array (
      'name' => 'removeChild',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'child' => 
        array (
          'position' => 0,
          'name' => 'child',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceChild' => 
    array (
      'name' => 'replaceChild',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'node' => 
        array (
          'position' => 0,
          'name' => 'node',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'child' => 
        array (
          'position' => 1,
          'name' => 'child',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'contains' => 
    array (
      'name' => 'contains',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'DOMNode|DOMNameSpaceNode|null',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getRootNode' => 
    array (
      'name' => 'getRootNode',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'DOMNode',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compareDocumentPosition' => 
    array (
      'name' => 'compareDocumentPosition',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
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
    '__sleep' => 
    array (
      'name' => '__sleep',
      'class' => 'DOMNode',
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
      'class' => 'DOMNode',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'nodeName' => 
    array (
      'name' => 'nodeName',
      'class' => 'DOMNode',
      'type' => 'string',
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
      'class' => 'DOMNode',
      'type' => '?string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nodeType' => 
    array (
      'name' => 'nodeType',
      'class' => 'DOMNode',
      'type' => 'int',
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
      'class' => 'DOMNode',
      'type' => '?DOMNode',
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
      'class' => 'DOMNode',
      'type' => '?DOMElement',
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
      'class' => 'DOMNode',
      'type' => 'DOMNodeList',
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
      'class' => 'DOMNode',
      'type' => '?DOMNode',
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
      'class' => 'DOMNode',
      'type' => '?DOMNode',
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
      'class' => 'DOMNode',
      'type' => '?DOMNode',
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
      'class' => 'DOMNode',
      'type' => '?DOMNode',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'attributes' => 
    array (
      'name' => 'attributes',
      'class' => 'DOMNode',
      'type' => '?DOMNamedNodeMap',
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
      'class' => 'DOMNode',
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
      'class' => 'DOMNode',
      'type' => '?DOMDocument',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'namespaceURI' => 
    array (
      'name' => 'namespaceURI',
      'class' => 'DOMNode',
      'type' => '?string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'prefix' => 
    array (
      'name' => 'prefix',
      'class' => 'DOMNode',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'localName' => 
    array (
      'name' => 'localName',
      'class' => 'DOMNode',
      'type' => '?string',
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
      'class' => 'DOMNode',
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
      'class' => 'DOMNode',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'publicId' => 
    array (
      'name' => 'publicId',
      'class' => 'DOMNotation',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'systemId' => 
    array (
      'name' => 'systemId',
      'class' => 'DOMNotation',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class DOMNotation extends DOMNode ] {

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

  - Static methods [0] {
  }

  - Properties [20] {
    Property [ public virtual string $nodeName ]
    Property [ public virtual ?string $nodeValue ]
    Property [ public virtual int $nodeType ]
    Property [ public virtual ?DOMNode $parentNode ]
    Property [ public virtual ?DOMElement $parentElement ]
    Property [ public virtual DOMNodeList $childNodes ]
    Property [ public virtual ?DOMNode $firstChild ]
    Property [ public virtual ?DOMNode $lastChild ]
    Property [ public virtual ?DOMNode $previousSibling ]
    Property [ public virtual ?DOMNode $nextSibling ]
    Property [ public virtual ?DOMNamedNodeMap $attributes ]
    Property [ public virtual bool $isConnected ]
    Property [ public virtual ?DOMDocument $ownerDocument ]
    Property [ public virtual ?string $namespaceURI ]
    Property [ public virtual string $prefix ]
    Property [ public virtual ?string $localName ]
    Property [ public virtual ?string $baseURI ]
    Property [ public virtual string $textContent ]
    Property [ public virtual string $publicId ]
    Property [ public virtual string $systemId ]
  }

  - Methods [23] {
    Method [ <internal:dom, inherits DOMNode> public method appendChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $node ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method C14N ] {

      - Parameters [4] {
        Parameter #0 [ <optional> bool $exclusive = false ]
        Parameter #1 [ <optional> bool $withComments = false ]
        Parameter #2 [ <optional> ?array $xpath = null ]
        Parameter #3 [ <optional> ?array $nsPrefixes = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:dom, inherits DOMNode> public method C14NFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> bool $exclusive = false ]
        Parameter #2 [ <optional> bool $withComments = false ]
        Parameter #3 [ <optional> ?array $xpath = null ]
        Parameter #4 [ <optional> ?array $nsPrefixes = null ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:dom, inherits DOMNode> public method cloneNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $deep = false ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method getLineNo ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:dom, inherits DOMNode> public method getNodePath ] {

      - Parameters [0] {
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:dom, inherits DOMNode> public method hasAttributes ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method hasChildNodes ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method insertBefore ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMNode $node ]
        Parameter #1 [ <optional> ?DOMNode $child = null ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method isDefaultNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $namespace ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method isSameNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $otherNode ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method isEqualNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?DOMNode $otherNode ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method isSupported ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $feature ]
        Parameter #1 [ <required> string $version ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method lookupNamespaceURI ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $prefix ]
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:dom, inherits DOMNode> public method lookupPrefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $namespace ]
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:dom, inherits DOMNode> public method normalize ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:dom, inherits DOMNode> public method removeChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $child ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method replaceChild ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMNode $node ]
        Parameter #1 [ <required> DOMNode $child ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method contains ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode|DOMNameSpaceNode|null $other ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom, inherits DOMNode> public method getRootNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?array $options = null ]
      }
      - Return [ DOMNode ]
    }

    Method [ <internal:dom, inherits DOMNode> public method compareDocumentPosition ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $other ]
      }
      - Return [ int ]
    }

    Method [ <internal:dom, inherits DOMNode> public method __sleep ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom, inherits DOMNode> public method __wakeup ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
