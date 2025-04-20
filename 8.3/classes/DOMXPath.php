<?php

return array (
  'type' => 'class',
  'name' => 'DOMXPath',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMXPath',
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
        'name' => 'DOMXPath class (php.net)',
        'url' => 'https://www.php.net/manual/class.domxpath.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
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
      'class' => 'DOMXPath',
      'type' => 'DOMDocument',
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
      'class' => 'DOMXPath',
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
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'document' => 
        array (
          'position' => 0,
          'name' => 'document',
          'type' => 'DOMDocument',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?DOMNode',
          'is_optional' => true,
          'has_default_value' => true,
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
    'query' => 
    array (
      'name' => 'query',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'expression' => 
        array (
          'position' => 0,
          'name' => 'expression',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextNode' => 
        array (
          'position' => 1,
          'name' => 'contextNode',
          'type' => '?DOMNode',
          'is_optional' => true,
          'has_default_value' => true,
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
    'registerNamespace' => 
    array (
      'name' => 'registerNamespace',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'prefix' => 
        array (
          'position' => 0,
          'name' => 'prefix',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'registerPhpFunctions' => 
    array (
      'name' => 'registerPhpFunctions',
      'class' => 'DOMXPath',
      'parameters' => 
      array (
        'restrict' => 
        array (
          'position' => 0,
          'name' => 'restrict',
          'type' => 'array|string|null',
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
  'toString' => 'Class [ <internal:dom> class DOMXPath ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ public DOMDocument $document ]
    Property [ public bool $registerNodeNamespaces ]
  }

  - Methods [5] {
    Method [ <internal:dom, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> DOMDocument $document ]
        Parameter #1 [ <optional> bool $registerNodeNS = true ]
      }
    }

    Method [ <internal:dom> public method evaluate ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $expression ]
        Parameter #1 [ <optional> ?DOMNode $contextNode = null ]
        Parameter #2 [ <optional> bool $registerNodeNS = true ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:dom> public method query ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $expression ]
        Parameter #1 [ <optional> ?DOMNode $contextNode = null ]
        Parameter #2 [ <optional> bool $registerNodeNS = true ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:dom> public method registerNamespace ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $prefix ]
        Parameter #1 [ <required> string $namespace ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:dom> public method registerPhpFunctions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array|string|null $restrict = null ]
      }
      - Tentative return [ void ]
    }
  }
}
',
);
