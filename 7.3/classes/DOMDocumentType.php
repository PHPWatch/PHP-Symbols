<?php

return array (
  'type' => 'class',
  'name' => 'DOMDocumentType',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMDocumentType',
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
        'name' => 'DOMDocumentType interface (php.net)',
        'url' => 'https://www.php.net/manual/class.domdocumenttype.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'insertBefore' => 
    array (
      'name' => 'insertBefore',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'newChild' => 
        array (
          'position' => 0,
          'name' => 'newChild',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'refChild' => 
        array (
          'position' => 1,
          'name' => 'refChild',
          'type' => 'DOMNode',
          'is_optional' => true,
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
        'newChild' => 
        array (
          'position' => 0,
          'name' => 'newChild',
          'type' => 'DOMNode',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'oldChild' => 
        array (
          'position' => 1,
          'name' => 'oldChild',
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
    'removeChild' => 
    array (
      'name' => 'removeChild',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'oldChild' => 
        array (
          'position' => 0,
          'name' => 'oldChild',
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
    'appendChild' => 
    array (
      'name' => 'appendChild',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'newChild' => 
        array (
          'position' => 0,
          'name' => 'newChild',
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
          'type' => NULL,
          'is_optional' => true,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'version' => 
        array (
          'position' => 1,
          'name' => 'version',
          'type' => NULL,
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
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => NULL,
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
    'isDefaultNamespace' => 
    array (
      'name' => 'isDefaultNamespace',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => NULL,
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
    'lookupNamespaceUri' => 
    array (
      'name' => 'lookupNamespaceUri',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => NULL,
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
        'arg' => 
        array (
          'position' => 0,
          'name' => 'arg',
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
    'getFeature' => 
    array (
      'name' => 'getFeature',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'feature' => 
        array (
          'position' => 0,
          'name' => 'feature',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'version' => 
        array (
          'position' => 1,
          'name' => 'version',
          'type' => NULL,
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
    'setUserData' => 
    array (
      'name' => 'setUserData',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 1,
          'name' => 'data',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'handler' => 
        array (
          'position' => 2,
          'name' => 'handler',
          'type' => NULL,
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
    'getUserData' => 
    array (
      'name' => 'getUserData',
      'class' => 'DOMNode',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'with_comments' => 
        array (
          'position' => 1,
          'name' => 'with_comments',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'xpath' => 
        array (
          'position' => 2,
          'name' => 'xpath',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ns_prefixes' => 
        array (
          'position' => 3,
          'name' => 'ns_prefixes',
          'type' => 'array',
          'is_optional' => true,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'exclusive' => 
        array (
          'position' => 1,
          'name' => 'exclusive',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'with_comments' => 
        array (
          'position' => 2,
          'name' => 'with_comments',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'xpath' => 
        array (
          'position' => 3,
          'name' => 'xpath',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ns_prefixes' => 
        array (
          'position' => 4,
          'name' => 'ns_prefixes',
          'type' => 'array',
          'is_optional' => true,
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class DOMDocumentType extends DOMNode ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [22] {
    Method [ <internal:dom, inherits DOMNode> public method insertBefore ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMNode $newChild ]
        Parameter #1 [ <optional> DOMNode or NULL $refChild ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method replaceChild ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMNode $newChild ]
        Parameter #1 [ <required> DOMNode $oldChild ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method removeChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $oldChild ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method appendChild ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $newChild ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method hasChildNodes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method cloneNode ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $deep ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method normalize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method isSupported ] {

      - Parameters [2] {
        Parameter #0 [ <required> $feature ]
        Parameter #1 [ <required> $version ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method hasAttributes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method compareDocumentPosition ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $other ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method isSameNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $other ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method lookupPrefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> $namespaceURI ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method isDefaultNamespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> $namespaceURI ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method lookupNamespaceUri ] {

      - Parameters [1] {
        Parameter #0 [ <required> $prefix ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method isEqualNode ] {

      - Parameters [1] {
        Parameter #0 [ <required> DOMNode $arg ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method getFeature ] {

      - Parameters [2] {
        Parameter #0 [ <required> $feature ]
        Parameter #1 [ <required> $version ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method setUserData ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $data ]
        Parameter #2 [ <required> $handler ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method getUserData ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method getNodePath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method getLineNo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method C14N ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $exclusive ]
        Parameter #1 [ <optional> $with_comments ]
        Parameter #2 [ <optional> array or NULL $xpath ]
        Parameter #3 [ <optional> array or NULL $ns_prefixes ]
      }
    }

    Method [ <internal:dom, inherits DOMNode> public method C14NFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> $uri ]
        Parameter #1 [ <optional> $exclusive ]
        Parameter #2 [ <optional> $with_comments ]
        Parameter #3 [ <optional> array or NULL $xpath ]
        Parameter #4 [ <optional> array or NULL $ns_prefixes ]
      }
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
