<?php

return array (
  'type' => 'class',
  'name' => 'IntlRelativeDateTimeFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlRelativeDateTimeFormatter',
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
        'name' => 'IntlRelativeDateTimeFormatter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intlrelativedatetimeformatter.php',
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
      'class' => 'IntlRelativeDateTimeFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'style' => 
        array (
          'position' => 1,
          'name' => 'style',
          'type' => 'IntlRelativeDateTimeFormatterStyle',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlRelativeDateTimeFormatterStyle::Long',
        ),
        'capitalizationContext' => 
        array (
          'position' => 2,
          'name' => 'capitalizationContext',
          'type' => 'IntlRelativeDateTimeFormatterCapitalization',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlRelativeDateTimeFormatterCapitalization::None',
        ),
        'numberFormatter' => 
        array (
          'position' => 3,
          'name' => 'numberFormatter',
          'type' => '?NumberFormatter',
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'IntlRelativeDateTimeFormatter',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int|float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 1,
          'name' => 'unit',
          'type' => 'IntlRelativeDateTimeFormatterUnit',
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
    'formatNumeric' => 
    array (
      'name' => 'formatNumeric',
      'class' => 'IntlRelativeDateTimeFormatter',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int|float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 1,
          'name' => 'unit',
          'type' => 'IntlRelativeDateTimeFormatterUnit',
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
    'combineDateAndTime' => 
    array (
      'name' => 'combineDateAndTime',
      'class' => 'IntlRelativeDateTimeFormatter',
      'parameters' => 
      array (
        'relativeDate' => 
        array (
          'position' => 0,
          'name' => 'relativeDate',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'time' => 
        array (
          'position' => 1,
          'name' => 'time',
          'type' => 'string',
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
      'class' => 'IntlRelativeDateTimeFormatter',
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
      'class' => 'IntlRelativeDateTimeFormatter',
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
  'toString' => 'Class [ <internal:intl> final class IntlRelativeDateTimeFormatter ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <optional> ?string $locale = null ]
        Parameter #1 [ <optional> IntlRelativeDateTimeFormatterStyle $style = IntlRelativeDateTimeFormatterStyle::Long ]
        Parameter #2 [ <optional> IntlRelativeDateTimeFormatterCapitalization $capitalizationContext = IntlRelativeDateTimeFormatterCapitalization::None ]
        Parameter #3 [ <optional> ?NumberFormatter $numberFormatter = null ]
      }
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [2] {
        Parameter #0 [ <required> int|float $offset ]
        Parameter #1 [ <required> IntlRelativeDateTimeFormatterUnit $unit ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:intl> public method formatNumeric ] {

      - Parameters [2] {
        Parameter #0 [ <required> int|float $offset ]
        Parameter #1 [ <required> IntlRelativeDateTimeFormatterUnit $unit ]
      }
      - Return [ string|false ]
    }

    Method [ <internal:intl> public method combineDateAndTime ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $relativeDate ]
        Parameter #1 [ <required> string $time ]
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
