<?php

return array (
  'type' => 'class',
  'name' => 'IntlNumberRangeFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlNumberRangeFormatter',
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
        'name' => 'IntlNumberRangeFormatter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intlnumberrangeformatter.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'COLLAPSE_AUTO' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int COLLAPSE_AUTO ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'COLLAPSE_NONE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int COLLAPSE_NONE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'COLLAPSE_UNIT' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int COLLAPSE_UNIT ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'COLLAPSE_ALL' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int COLLAPSE_ALL ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'IDENTITY_FALLBACK_SINGLE_VALUE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int IDENTITY_FALLBACK_SINGLE_VALUE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'IDENTITY_FALLBACK_APPROXIMATELY' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int IDENTITY_FALLBACK_APPROXIMATELY ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'IDENTITY_FALLBACK_RANGE' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int IDENTITY_FALLBACK_RANGE ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlNumberRangeFormatter',
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
      'class' => 'IntlNumberRangeFormatter',
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
        'collapse' => 
        array (
          'position' => 2,
          'name' => 'collapse',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'identityFallback' => 
        array (
          'position' => 3,
          'name' => 'identityFallback',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'IntlNumberRangeFormatter',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'format' => 
    array (
      'name' => 'format',
      'class' => 'IntlNumberRangeFormatter',
      'parameters' => 
      array (
        'start' => 
        array (
          'position' => 0,
          'name' => 'start',
          'type' => 'int|float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 1,
          'name' => 'end',
          'type' => 'int|float',
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlNumberRangeFormatter',
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
      'class' => 'IntlNumberRangeFormatter',
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
  'toString' => 'Class [ <internal:intl> final class IntlNumberRangeFormatter ] {

  - Constants [8] {
    Constant [ public int COLLAPSE_AUTO ] { 0 }
    Constant [ public int COLLAPSE_NONE ] { 1 }
    Constant [ public int COLLAPSE_UNIT ] { 2 }
    Constant [ public int COLLAPSE_ALL ] { 3 }
    Constant [ public int IDENTITY_FALLBACK_SINGLE_VALUE ] { 0 }
    Constant [ public int IDENTITY_FALLBACK_APPROXIMATELY_OR_SINGLE_VALUE ] { 1 }
    Constant [ public int IDENTITY_FALLBACK_APPROXIMATELY ] { 2 }
    Constant [ public int IDENTITY_FALLBACK_RANGE ] { 3 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:intl> static public method createFromSkeleton ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $skeleton ]
        Parameter #1 [ <required> string $locale ]
        Parameter #2 [ <required> int $collapse ]
        Parameter #3 [ <required> int $identityFallback ]
      }
      - Return [ IntlNumberRangeFormatter ]
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

      - Parameters [2] {
        Parameter #0 [ <required> int|float $start ]
        Parameter #1 [ <required> int|float $end ]
      }
      - Return [ string ]
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
