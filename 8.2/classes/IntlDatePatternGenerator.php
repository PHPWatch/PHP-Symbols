<?php

return array (
  'type' => 'class',
  'name' => 'IntlDatePatternGenerator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlDatePatternGenerator',
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
        'name' => 'IntlDatePatternGenerator class (php.net)',
        'url' => 'https://www.php.net/manual/class.intldatepatterngenerator.php',
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
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlDatePatternGenerator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
      'class' => 'IntlDatePatternGenerator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?IntlDatePatternGenerator',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBestPattern' => 
    array (
      'name' => 'getBestPattern',
      'class' => 'IntlDatePatternGenerator',
      'parameters' => 
      array (
        'skeleton' => 
        array (
          'position' => 0,
          'name' => 'skeleton',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlDatePatternGenerator ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Return [ ?IntlDatePatternGenerator ]
    }
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
    }

    Method [ <internal:intl> public method getBestPattern ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $skeleton ]
      }
      - Return [ string|false ]
    }
  }
}
',
);
