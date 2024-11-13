<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\XPath',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\XPath',
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
        'name' => 'Dom\\XPath class (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-xpath.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'document' => 
    array (
      'name' => 'document',
      'class' => 'Dom\\XPath',
      'type' => 'Dom\\Document',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'registerNodeNamespaces' => 
    array (
      'name' => 'registerNodeNamespaces',
      'class' => 'Dom\\XPath',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'Dom\\Document',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 1,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
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
    'evaluate' => 
    array (
      'name' => 'evaluate',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?Dom\\Node',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 2,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Dom\\NodeList|string|float|bool|null',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?Dom\\Node',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'registerNodeNS' => 
        array (
          'position' => 2,
          'name' => 'registerNodeNS',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
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
    'registerNamespace' => 
    array (
      'name' => 'registerNamespace',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'namespace' => 
        array (
          'position' => 1,
          'name' => 'namespace',
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
    'registerPhpFunctions' => 
    array (
      'name' => 'registerPhpFunctions',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'restrict' => 
        array (
          'position' => 0,
          'name' => 'restrict',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
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
    'registerPhpFunctionNS' => 
    array (
      'name' => 'registerPhpFunctionNS',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'namespaceURI' => 
        array (
          'position' => 0,
          'name' => 'namespaceURI',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callable' => 
        array (
          'position' => 2,
          'name' => 'callable',
          'type' => 'callable',
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
    'quote' => 
    array (
      'name' => 'quote',
      'class' => 'Dom\\XPath',
      'parameters' => 
      array (
        'str' => 
        array (
          'position' => 0,
          'name' => 'str',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:dom> final class Dom\\XPath ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:dom> static public method quote ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $str ]
      }
      - Return [ string ]
    }
  }

  - Properties [2] {
    Property [ public Dom\\Document $document ]
    Property [ public bool $registerNodeNamespaces ]
  }

  - Methods [6] {
    Method [ <internal:dom, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> Dom\\Document $document ]
        Parameter #1 [ <optional> bool $registerNodeNS = true ]
      }
    }

    Method [ <internal:dom> public method evaluate ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $expression ]
        Parameter #1 [ <optional> ?Dom\\Node $contextNode = null ]
        Parameter #2 [ <optional> bool $registerNodeNS = true ]
      }
      - Return [ Dom\\NodeList|string|float|bool|null ]
    }

    Method [ <internal:dom> public method query ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $expression ]
        Parameter #1 [ <optional> ?Dom\\Node $contextNode = null ]
        Parameter #2 [ <optional> bool $registerNodeNS = true ]
      }
      - Return [ Dom\\NodeList ]
    }

    Method [ <internal:dom> public method registerNamespace ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $prefix ]
        Parameter #1 [ <required> string $namespace ]
      }
      - Return [ bool ]
    }

    Method [ <internal:dom> public method registerPhpFunctions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array|string|null $restrict = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> public method registerPhpFunctionNS ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespaceURI ]
        Parameter #1 [ <required> string $name ]
        Parameter #2 [ <required> callable $callable ]
      }
      - Return [ void ]
    }
  }
}
',
);
