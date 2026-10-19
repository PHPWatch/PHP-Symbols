<?php

return array (
  'type' => 'class',
  'name' => 'IntlNumberFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlNumberFormatter',
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
        'name' => 'IntlNumberFormatter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intlnumberformatter.php',
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
      'class' => 'IntlNumberFormatter',
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
    'createFromSkeleton' => 
    array (
      'name' => 'createFromSkeleton',
      'class' => 'IntlNumberFormatter',
      'parameters' => 
      array (
        'skeleton' => 
        array (
          'position' => 0,
          'name' => 'skeleton',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?IntlNumberFormatter',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'format' => 
    array (
      'name' => 'format',
      'class' => 'IntlNumberFormatter',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'string|int|float',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlNumberFormatter',
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
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'IntlNumberFormatter',
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> final class IntlNumberFormatter ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:intl> static public method createFromSkeleton ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $skeleton ]
        Parameter #1 [ <required> string $locale ]
      }
      - Return [ ?IntlNumberFormatter ]
    }
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:intl, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int|float $value ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
  'modifiers' => 32,
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
  'is_final' => true,
  'is_instantiable' => false,
  'is_read_only' => false,
);
