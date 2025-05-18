<?php

return array (
  'type' => 'class',
  'name' => 'IntlListFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlListFormatter',
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
        'name' => 'IntlListFormatter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intllistformatter.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'TYPE_AND' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int TYPE_AND ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TYPE_OR' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int TYPE_OR ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TYPE_UNITS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int TYPE_UNITS ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'WIDTH_WIDE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int WIDTH_WIDE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'WIDTH_SHORT' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int WIDTH_SHORT ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'WIDTH_NARROW' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int WIDTH_NARROW ] { 2 }
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
      'class' => 'IntlListFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlListFormatter::TYPE_AND',
        ),
        'width' => 
        array (
          'position' => 2,
          'name' => 'width',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlListFormatter::WIDTH_WIDE',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'format' => 
    array (
      'name' => 'format',
      'class' => 'IntlListFormatter',
      'parameters' => 
      array (
        'strings' => 
        array (
          'position' => 0,
          'name' => 'strings',
          'type' => 'array',
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
      'class' => 'IntlListFormatter',
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
      'class' => 'IntlListFormatter',
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
  'toString' => 'Class [ <internal:intl> final class IntlListFormatter ] {

  - Constants [6] {
    Constant [ public int TYPE_AND ] { 0 }
    Constant [ public int TYPE_OR ] { 1 }
    Constant [ public int TYPE_UNITS ] { 2 }
    Constant [ public int WIDTH_WIDE ] { 0 }
    Constant [ public int WIDTH_SHORT ] { 1 }
    Constant [ public int WIDTH_NARROW ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> int $type = IntlListFormatter::TYPE_AND ]
        Parameter #2 [ <optional> int $width = IntlListFormatter::WIDTH_WIDE ]
      }
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $strings ]
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
  'is_instantiable' => true,
  'is_read_only' => false,
);
