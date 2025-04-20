<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\Node',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\Node',
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
        'name' => 'Dom\\Node class (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-node.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => 'Dom',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
  ),
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
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Dom\\Node',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class Dom\\Node ] {

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

  - Properties [14] {
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
  }

  - Methods [22] {
    Method [ <internal:dom, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom> public method getRootNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array $options = [] ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method hasChildNodes ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method normalize ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method cloneNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $deep = false ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method isEqualNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $otherNode ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method isSameNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $otherNode ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method compareDocumentPosition ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $other ]
      }
      - Return [ int ]
    }

    Method [ <internal:dom> public method contains ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?Dom\\Node $other ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method lookupPrefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $namespace ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom> public method lookupNamespaceURI ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $prefix ]
      }
      - Return [ ?string ]
    }

    Method [ <internal:dom> public method isDefaultNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $namespace ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method insertBefore ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Node $node ]
        Parameter #1 [ <required> ?Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method appendChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $node ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method replaceChild ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Node $node ]
        Parameter #1 [ <required> Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method removeChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> Dom\\Node $child ]
      }
      - Return [ Dom\\Node ]
    }

    Method [ <internal:dom> public method getLineNo ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:dom> public method getNodePath ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:dom> public method C14N ] {

      - Parameters [4] {
        Parameter #0 [ <optional> bool $exclusive = false ]
        Parameter #1 [ <optional> bool $withComments = false ]
        Parameter #2 [ <optional> ?array $xpath = null ]
        Parameter #3 [ <optional> ?array $nsPrefixes = null ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:dom> public method C14NFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> bool $exclusive = false ]
        Parameter #2 [ <optional> bool $withComments = false ]
        Parameter #3 [ <optional> ?array $xpath = null ]
        Parameter #4 [ <optional> ?array $nsPrefixes = null ]
      }
      - Return [ int|false ]
    }

    Method [ <internal:dom> public method __sleep ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom> public method __wakeup ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
);
