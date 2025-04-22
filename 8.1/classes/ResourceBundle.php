<?php

return array (
  'type' => 'class',
  'name' => 'ResourceBundle',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ResourceBundle',
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
        'name' => 'ResourceBundle interface (php.net)',
        'url' => 'https://www.php.net/manual/class.resourcebundle.php',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ResourceBundle',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bundle' => 
        array (
          'position' => 1,
          'name' => 'bundle',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fallback' => 
        array (
          'position' => 2,
          'name' => 'fallback',
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
    'create' => 
    array (
      'name' => 'create',
      'class' => 'ResourceBundle',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bundle' => 
        array (
          'position' => 1,
          'name' => 'bundle',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fallback' => 
        array (
          'position' => 2,
          'name' => 'fallback',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'get' => 
    array (
      'name' => 'get',
      'class' => 'ResourceBundle',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fallback' => 
        array (
          'position' => 1,
          'name' => 'fallback',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'ResourceBundle',
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
    'getLocales' => 
    array (
      'name' => 'getLocales',
      'class' => 'ResourceBundle',
      'parameters' => 
      array (
        'bundle' => 
        array (
          'position' => 0,
          'name' => 'bundle',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'ResourceBundle',
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
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'ResourceBundle',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'ResourceBundle',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> <iterateable> class ResourceBundle implements IteratorAggregate, Traversable, Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [3] {
        Parameter #0 [ <required> ?string $locale ]
        Parameter #1 [ <required> ?string $bundle ]
        Parameter #2 [ <optional> bool $fallback = true ]
      }
      - Tentative return [ ?ResourceBundle ]
    }

    Method [ <internal:intl> static public method getLocales ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $bundle ]
      }
      - Tentative return [ array|false ]
    }
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> ?string $locale ]
        Parameter #1 [ <required> ?string $bundle ]
        Parameter #2 [ <optional> bool $fallback = true ]
      }
    }

    Method [ <internal:intl> public method get ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <optional> bool $fallback = true ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:intl, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:intl, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
