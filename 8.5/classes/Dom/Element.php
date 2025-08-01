<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\Element',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\Element',
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
        'name' => 'Dom\\Element interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-element.php',
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
    'hasAttributes' => 
    array (
      'name' => 'hasAttributes',
      'class' => 'Dom\\Element',
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
    'getAttributeNames' => 
    array (
      'name' => 'getAttributeNames',
      'class' => 'Dom\\Element',
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
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
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
    'getAttributeNS' => 
    array (
      'name' => 'getAttributeNS',
      'class' => 'Dom\\Element',
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
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
          'type' => 'string',
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
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
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
    'setAttributeNS' => 
    array (
      'name' => 'setAttributeNS',
      'class' => 'Dom\\Element',
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
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 2,
          'name' => 'value',
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
    'removeAttribute' => 
    array (
      'name' => 'removeAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
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
    'removeAttributeNS' => 
    array (
      'name' => 'removeAttributeNS',
      'class' => 'Dom\\Element',
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
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
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
    'toggleAttribute' => 
    array (
      'name' => 'toggleAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'force' => 
        array (
          'position' => 1,
          'name' => 'force',
          'type' => '?bool',
          'is_optional' => true,
          'has_default_value' => true,
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
    'hasAttribute' => 
    array (
      'name' => 'hasAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
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
    'hasAttributeNS' => 
    array (
      'name' => 'hasAttributeNS',
      'class' => 'Dom\\Element',
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
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
          'type' => 'string',
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
    'getAttributeNode' => 
    array (
      'name' => 'getAttributeNode',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAttributeNodeNS' => 
    array (
      'name' => 'getAttributeNodeNS',
      'class' => 'Dom\\Element',
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
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setAttributeNode' => 
    array (
      'name' => 'setAttributeNode',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => 'Dom\\Attr',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setAttributeNodeNS' => 
    array (
      'name' => 'setAttributeNodeNS',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => 'Dom\\Attr',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Attr',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeAttributeNode' => 
    array (
      'name' => 'removeAttributeNode',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => 'Dom\\Attr',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getElementsByTagName' => 
    array (
      'name' => 'getElementsByTagName',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'Dom\\Element',
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
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getElementsByClassName' => 
    array (
      'name' => 'getElementsByClassName',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'classNames' => 
        array (
          'position' => 0,
          'name' => 'classNames',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'insertAdjacentElement' => 
    array (
      'name' => 'insertAdjacentElement',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'where' => 
        array (
          'position' => 0,
          'name' => 'where',
          'type' => 'Dom\\AdjacentPosition',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'element' => 
        array (
          'position' => 1,
          'name' => 'element',
          'type' => 'Dom\\Element',
          'is_optional' => false,
          'has_default_value' => false,
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
    'insertAdjacentText' => 
    array (
      'name' => 'insertAdjacentText',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'where' => 
        array (
          'position' => 0,
          'name' => 'where',
          'type' => 'Dom\\AdjacentPosition',
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
    'insertAdjacentHTML' => 
    array (
      'name' => 'insertAdjacentHTML',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'where' => 
        array (
          'position' => 0,
          'name' => 'where',
          'type' => 'Dom\\AdjacentPosition',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'string' => 
        array (
          'position' => 1,
          'name' => 'string',
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
    'setIdAttribute' => 
    array (
      'name' => 'setIdAttribute',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isId' => 
        array (
          'position' => 1,
          'name' => 'isId',
          'type' => 'bool',
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
    'setIdAttributeNS' => 
    array (
      'name' => 'setIdAttributeNS',
      'class' => 'Dom\\Element',
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
        'qualifiedName' => 
        array (
          'position' => 1,
          'name' => 'qualifiedName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isId' => 
        array (
          'position' => 2,
          'name' => 'isId',
          'type' => 'bool',
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
    'setIdAttributeNode' => 
    array (
      'name' => 'setIdAttributeNode',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => 'Dom\\Attr',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isId' => 
        array (
          'position' => 1,
          'name' => 'isId',
          'type' => 'bool',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
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
    'append' => 
    array (
      'name' => 'append',
      'class' => 'Dom\\Element',
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
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'Dom\\Element',
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
    'replaceChildren' => 
    array (
      'name' => 'replaceChildren',
      'class' => 'Dom\\Element',
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
    'querySelector' => 
    array (
      'name' => 'querySelector',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'closest' => 
    array (
      'name' => 'closest',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'matches' => 
    array (
      'name' => 'matches',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'selectors' => 
        array (
          'position' => 0,
          'name' => 'selectors',
          'type' => 'string',
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
    'getInScopeNamespaces' => 
    array (
      'name' => 'getInScopeNamespaces',
      'class' => 'Dom\\Element',
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
    'getDescendantNamespaces' => 
    array (
      'name' => 'getDescendantNamespaces',
      'class' => 'Dom\\Element',
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
    'rename' => 
    array (
      'name' => 'rename',
      'class' => 'Dom\\Element',
      'parameters' => 
      array (
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
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
    0 => 'Dom\\ParentNode',
    1 => 'Dom\\ChildNode',
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
    'namespaceURI' => 
    array (
      'name' => 'namespaceURI',
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
      'type' => '?string',
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
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'tagName' => 
    array (
      'name' => 'tagName',
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'children' => 
    array (
      'name' => 'children',
      'class' => 'Dom\\Element',
      'type' => 'Dom\\HTMLCollection',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
      'type' => 'int',
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
      'class' => 'Dom\\Element',
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
      'class' => 'Dom\\Element',
      'type' => '?Dom\\Element',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'id' => 
    array (
      'name' => 'id',
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'className' => 
    array (
      'name' => 'className',
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'classList' => 
    array (
      'name' => 'classList',
      'class' => 'Dom\\Element',
      'type' => 'Dom\\TokenList',
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
      'class' => 'Dom\\Element',
      'type' => 'Dom\\NamedNodeMap',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'innerHTML' => 
    array (
      'name' => 'innerHTML',
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'outerHTML' => 
    array (
      'name' => 'outerHTML',
      'class' => 'Dom\\Element',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'substitutedNodeValue' => 
    array (
      'name' => 'substitutedNodeValue',
      'class' => 'Dom\\Element',
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
  'toString' => 'Class [ <internal:dom> class Dom\\Element extends Dom\\Node implements Dom\\ParentNode, Dom\\ChildNode ] {

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

  - Properties [31] {
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
    Property [ public virtual ?string $namespaceURI ]
    Property [ public virtual ?string $prefix ]
    Property [ public virtual string $localName ]
    Property [ public virtual string $tagName ]
    Property [ public Dom\\HTMLCollection $children ]
    Property [ public virtual ?Dom\\Element $firstElementChild ]
    Property [ public virtual ?Dom\\Element $lastElementChild ]
    Property [ public virtual int $childElementCount ]
    Property [ public virtual ?Dom\\Element $previousElementSibling ]
    Property [ public virtual ?Dom\\Element $nextElementSibling ]
    Property [ public virtual string $id ]
    Property [ public virtual string $className ]
    Property [ public Dom\\TokenList $classList ]
    Property [ public virtual Dom\\NamedNodeMap $attributes ]
    Property [ public virtual string $innerHTML ]
    Property [ public virtual string $outerHTML ]
    Property [ public virtual string $substitutedNodeValue ]
  }

  - Methods [60] {
    Method [ <internal:dom> public method hasAttributes ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method getAttributeNames ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom> public method getAttributeNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <required> string $value ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method setAttributeNS ] {

      - Parameters [3] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $qualifiedName ]
        Parameter #2 [ <required> string $value ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method removeAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method removeAttributeNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method toggleAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <optional> ?bool $force = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method hasAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method hasAttributeNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method getAttributeNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ ?Dom\\Attr ]
    }

    Method [ <internal:dom> public method getAttributeNodeNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ ?Dom\\Attr ]
    }

    Method [ <internal:dom> public method setAttributeNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Attr $attr ]
      }
      - Return [ ?Dom\\Attr ]
    }

    Method [ <internal:dom> public method setAttributeNodeNS ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Attr $attr ]
      }
      - Return [ ?Dom\\Attr ]
    }

    Method [ <internal:dom> public method removeAttributeNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Attr $attr ]
      }
      - Return [ Dom\\Attr ]
    }

    Method [ <internal:dom> public method getElementsByTagName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Return [ Dom\\HTMLCollection ]
    }

    Method [ <internal:dom> public method getElementsByTagNameNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Return [ Dom\\HTMLCollection ]
    }

    Method [ <internal:dom> public method getElementsByClassName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $classNames ]
      }
      - Return [ Dom\\HTMLCollection ]
    }

    Method [ <internal:dom> public method insertAdjacentElement ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\AdjacentPosition $where ]
        Parameter #1 [ <required> Dom\\Element $element ]
      }
      - Return [ ?Dom\\Element ]
    }

    Method [ <internal:dom> public method insertAdjacentText ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\AdjacentPosition $where ]
        Parameter #1 [ <required> string $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method insertAdjacentHTML ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\AdjacentPosition $where ]
        Parameter #1 [ <required> string $string ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method setIdAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $qualifiedName ]
        Parameter #1 [ <required> bool $isId ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method setIdAttributeNS ] {

      - Parameters [3] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $qualifiedName ]
        Parameter #2 [ <required> bool $isId ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method setIdAttributeNode ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Attr $attr ]
        Parameter #1 [ <required> bool $isId ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ChildNode> public method remove ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ChildNode> public method before ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ChildNode> public method after ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ChildNode> public method replaceWith ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ParentNode> public method append ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ParentNode> public method prepend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ParentNode> public method replaceChildren ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom, prototype Dom\\ParentNode> public method querySelector ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ ?Dom\\Element ]
    }

    Method [ <internal:dom, prototype Dom\\ParentNode> public method querySelectorAll ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ Dom\\NodeList ]
    }

    Method [ <internal:dom> public method closest ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ ?Dom\\Element ]
    }

    Method [ <internal:dom> public method matches ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $selectors ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method getInScopeNamespaces ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom> public method getDescendantNamespaces ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom> public method rename ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespaceURI ]
        Parameter #1 [ <required> string $qualifiedName ]
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
