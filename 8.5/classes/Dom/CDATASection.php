<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\CDATASection',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\CDATASection',
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
        'name' => 'Dom\\CDATASection interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-cdatasection.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Dom',
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
    'splitText' => 
    array (
      'name' => 'splitText',
      'class' => 'Dom\\Text',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
    'substringData' => 
    array (
      'name' => 'substringData',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 1,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'appendData' => 
    array (
      'name' => 'appendData',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'insertData' => 
    array (
      'name' => 'insertData',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
    'deleteData' => 
    array (
      'name' => 'deleteData',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 1,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
    'replaceData' => 
    array (
      'name' => 'replaceData',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 1,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 2,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'Dom\\CharacterData',
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
    'before' => 
    array (
      'name' => 'before',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
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
    'after' => 
    array (
      'name' => 'after',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
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
    'replaceWith' => 
    array (
      'name' => 'replaceWith',
      'class' => 'Dom\\CharacterData',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
          'is_optional' => true,
          'has_default_value' => false,
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
  'interfaces' => 
  array (
    0 => 'Dom\\ChildNode',
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
    'previousElementSibling' => 
    array (
      'name' => 'previousElementSibling',
      'class' => 'Dom\\CharacterData',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'nextElementSibling' => 
    array (
      'name' => 'nextElementSibling',
      'class' => 'Dom\\CharacterData',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'data' => 
    array (
      'name' => 'data',
      'class' => 'Dom\\CharacterData',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'length' => 
    array (
      'name' => 'length',
      'class' => 'Dom\\CharacterData',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'wholeText' => 
    array (
      'name' => 'wholeText',
      'class' => 'Dom\\Text',
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
  'toString' => 'Class [ <internal:dom> class Dom\\CDATASection extends Dom\\Text implements Dom\\ChildNode ] {

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

  - Properties [19] {
    Property [ public virtual int $nodeType ]
    Property [ public virtual string $nodeName ]
    Property [ public virtual string $baseURI ]
    Property [ public virtual bool $isConnected ]
    Property [ public virtual ?Dom\\Document $ownerDocument ]
    Property [ public virtual ?Dom\\Node $parentNode ]
    Property [ public virtual ?Dom\\Element $parentElement ]
    Property [ public virtual Dom\\NodeList $childNodes ]
    Property [ public virtual ?Dom\\Node $firstChild ]
    Property [ public virtual ?Dom\\Node $lastChild ]
    Property [ public virtual ?Dom\\Node $previousSibling ]
    Property [ public virtual ?Dom\\Node $nextSibling ]
    Property [ public virtual ?string $nodeValue ]
    Property [ public virtual ?string $textContent ]
    Property [ public virtual ?Dom\\Element $previousElementSibling ]
    Property [ public virtual ?Dom\\Element $nextElementSibling ]
    Property [ public virtual string $data ]
    Property [ public virtual int $length ]
    Property [ public virtual string $wholeText ]
  }

  - Methods [31] {
    Method [ <internal:dom, inherits Dom\\Text> public method splitText ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
      - Return [ Dom\\Text ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData> public method substringData ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <required> int $count ]
      }
      - Return [ string ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData> public method appendData ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData> public method insertData ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <required> string $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData> public method deleteData ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <required> int $count ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData> public method replaceData ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <required> int $count ]
        Parameter #2 [ <required> string $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData, prototype Dom\\ChildNode> public method remove ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData, prototype Dom\\ChildNode> public method before ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData, prototype Dom\\ChildNode> public method after ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, inherits Dom\\CharacterData, prototype Dom\\ChildNode> public method replaceWith ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
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
  'is_instantiable' => false,
  'is_read_only' => false,
);
