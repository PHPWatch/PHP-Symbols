<?php

return array (
  'type' => 'class',
  'name' => 'NumberFormatter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'NumberFormatter',
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
        'name' => 'NumberFormatter class (php.net)',
        'url' => 'https://www.php.net/manual/class.numberformatter.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'PATTERN_DECIMAL' => 0,
    'DECIMAL' => 1,
    'CURRENCY' => 2,
    'PERCENT' => 3,
    'SCIENTIFIC' => 4,
    'SPELLOUT' => 5,
    'ORDINAL' => 6,
    'DURATION' => 7,
    'PATTERN_RULEBASED' => 9,
    'IGNORE' => 0,
    'DEFAULT_STYLE' => 1,
    'ROUND_CEILING' => 0,
    'ROUND_FLOOR' => 1,
    'ROUND_DOWN' => 2,
    'ROUND_UP' => 3,
    'ROUND_HALFEVEN' => 4,
    'ROUND_HALFDOWN' => 5,
    'ROUND_HALFUP' => 6,
    'PAD_BEFORE_PREFIX' => 0,
    'PAD_AFTER_PREFIX' => 1,
    'PAD_BEFORE_SUFFIX' => 2,
    'PAD_AFTER_SUFFIX' => 3,
    'PARSE_INT_ONLY' => 0,
    'GROUPING_USED' => 1,
    'DECIMAL_ALWAYS_SHOWN' => 2,
    'MAX_INTEGER_DIGITS' => 3,
    'MIN_INTEGER_DIGITS' => 4,
    'INTEGER_DIGITS' => 5,
    'MAX_FRACTION_DIGITS' => 6,
    'MIN_FRACTION_DIGITS' => 7,
    'FRACTION_DIGITS' => 8,
    'MULTIPLIER' => 9,
    'GROUPING_SIZE' => 10,
    'ROUNDING_MODE' => 11,
    'ROUNDING_INCREMENT' => 12,
    'FORMAT_WIDTH' => 13,
    'PADDING_POSITION' => 14,
    'SECONDARY_GROUPING_SIZE' => 15,
    'SIGNIFICANT_DIGITS_USED' => 16,
    'MIN_SIGNIFICANT_DIGITS' => 17,
    'MAX_SIGNIFICANT_DIGITS' => 18,
    'LENIENT_PARSE' => 19,
    'POSITIVE_PREFIX' => 0,
    'POSITIVE_SUFFIX' => 1,
    'NEGATIVE_PREFIX' => 2,
    'NEGATIVE_SUFFIX' => 3,
    'PADDING_CHARACTER' => 4,
    'CURRENCY_CODE' => 5,
    'DEFAULT_RULESET' => 6,
    'PUBLIC_RULESETS' => 7,
    'DECIMAL_SEPARATOR_SYMBOL' => 0,
    'GROUPING_SEPARATOR_SYMBOL' => 1,
    'PATTERN_SEPARATOR_SYMBOL' => 2,
    'PERCENT_SYMBOL' => 3,
    'ZERO_DIGIT_SYMBOL' => 4,
    'DIGIT_SYMBOL' => 5,
    'MINUS_SIGN_SYMBOL' => 6,
    'PLUS_SIGN_SYMBOL' => 7,
    'CURRENCY_SYMBOL' => 8,
    'INTL_CURRENCY_SYMBOL' => 9,
    'MONETARY_SEPARATOR_SYMBOL' => 10,
    'EXPONENTIAL_SYMBOL' => 11,
    'PERMILL_SYMBOL' => 12,
    'PAD_ESCAPE_SYMBOL' => 13,
    'INFINITY_SYMBOL' => 14,
    'NAN_SYMBOL' => 15,
    'SIGNIFICANT_DIGIT_SYMBOL' => 16,
    'MONETARY_GROUPING_SEPARATOR_SYMBOL' => 17,
    'TYPE_DEFAULT' => 0,
    'TYPE_INT32' => 1,
    'TYPE_INT64' => 2,
    'TYPE_DOUBLE' => 3,
    'TYPE_CURRENCY' => 4,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'style' => 
        array (
          'position' => 1,
          'name' => 'style',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'style' => 
        array (
          'position' => 1,
          'name' => 'style',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'format' => 
    array (
      'name' => 'format',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'position' => 
        array (
          'position' => 2,
          'name' => 'position',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'formatCurrency' => 
    array (
      'name' => 'formatCurrency',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'currency' => 
        array (
          'position' => 1,
          'name' => 'currency',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'parseCurrency' => 
    array (
      'name' => 'parseCurrency',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'currency' => 
        array (
          'position' => 1,
          'name' => 'currency',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'position' => 
        array (
          'position' => 2,
          'name' => 'position',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'setTextAttribute' => 
    array (
      'name' => 'setTextAttribute',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'getTextAttribute' => 
    array (
      'name' => 'getTextAttribute',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'setSymbol' => 
    array (
      'name' => 'setSymbol',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'symbol' => 
        array (
          'position' => 1,
          'name' => 'symbol',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'getSymbol' => 
    array (
      'name' => 'getSymbol',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'attr' => 
        array (
          'position' => 0,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'setPattern' => 
    array (
      'name' => 'setPattern',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'getPattern' => 
    array (
      'name' => 'getPattern',
      'class' => 'NumberFormatter',
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
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'NumberFormatter',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'NumberFormatter',
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
      'class' => 'NumberFormatter',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:intl> class NumberFormatter ] {

  - Constants [73] {
    Constant [ public integer PATTERN_DECIMAL ] { 0 }
    Constant [ public integer DECIMAL ] { 1 }
    Constant [ public integer CURRENCY ] { 2 }
    Constant [ public integer PERCENT ] { 3 }
    Constant [ public integer SCIENTIFIC ] { 4 }
    Constant [ public integer SPELLOUT ] { 5 }
    Constant [ public integer ORDINAL ] { 6 }
    Constant [ public integer DURATION ] { 7 }
    Constant [ public integer PATTERN_RULEBASED ] { 9 }
    Constant [ public integer IGNORE ] { 0 }
    Constant [ public integer DEFAULT_STYLE ] { 1 }
    Constant [ public integer ROUND_CEILING ] { 0 }
    Constant [ public integer ROUND_FLOOR ] { 1 }
    Constant [ public integer ROUND_DOWN ] { 2 }
    Constant [ public integer ROUND_UP ] { 3 }
    Constant [ public integer ROUND_HALFEVEN ] { 4 }
    Constant [ public integer ROUND_HALFDOWN ] { 5 }
    Constant [ public integer ROUND_HALFUP ] { 6 }
    Constant [ public integer PAD_BEFORE_PREFIX ] { 0 }
    Constant [ public integer PAD_AFTER_PREFIX ] { 1 }
    Constant [ public integer PAD_BEFORE_SUFFIX ] { 2 }
    Constant [ public integer PAD_AFTER_SUFFIX ] { 3 }
    Constant [ public integer PARSE_INT_ONLY ] { 0 }
    Constant [ public integer GROUPING_USED ] { 1 }
    Constant [ public integer DECIMAL_ALWAYS_SHOWN ] { 2 }
    Constant [ public integer MAX_INTEGER_DIGITS ] { 3 }
    Constant [ public integer MIN_INTEGER_DIGITS ] { 4 }
    Constant [ public integer INTEGER_DIGITS ] { 5 }
    Constant [ public integer MAX_FRACTION_DIGITS ] { 6 }
    Constant [ public integer MIN_FRACTION_DIGITS ] { 7 }
    Constant [ public integer FRACTION_DIGITS ] { 8 }
    Constant [ public integer MULTIPLIER ] { 9 }
    Constant [ public integer GROUPING_SIZE ] { 10 }
    Constant [ public integer ROUNDING_MODE ] { 11 }
    Constant [ public integer ROUNDING_INCREMENT ] { 12 }
    Constant [ public integer FORMAT_WIDTH ] { 13 }
    Constant [ public integer PADDING_POSITION ] { 14 }
    Constant [ public integer SECONDARY_GROUPING_SIZE ] { 15 }
    Constant [ public integer SIGNIFICANT_DIGITS_USED ] { 16 }
    Constant [ public integer MIN_SIGNIFICANT_DIGITS ] { 17 }
    Constant [ public integer MAX_SIGNIFICANT_DIGITS ] { 18 }
    Constant [ public integer LENIENT_PARSE ] { 19 }
    Constant [ public integer POSITIVE_PREFIX ] { 0 }
    Constant [ public integer POSITIVE_SUFFIX ] { 1 }
    Constant [ public integer NEGATIVE_PREFIX ] { 2 }
    Constant [ public integer NEGATIVE_SUFFIX ] { 3 }
    Constant [ public integer PADDING_CHARACTER ] { 4 }
    Constant [ public integer CURRENCY_CODE ] { 5 }
    Constant [ public integer DEFAULT_RULESET ] { 6 }
    Constant [ public integer PUBLIC_RULESETS ] { 7 }
    Constant [ public integer DECIMAL_SEPARATOR_SYMBOL ] { 0 }
    Constant [ public integer GROUPING_SEPARATOR_SYMBOL ] { 1 }
    Constant [ public integer PATTERN_SEPARATOR_SYMBOL ] { 2 }
    Constant [ public integer PERCENT_SYMBOL ] { 3 }
    Constant [ public integer ZERO_DIGIT_SYMBOL ] { 4 }
    Constant [ public integer DIGIT_SYMBOL ] { 5 }
    Constant [ public integer MINUS_SIGN_SYMBOL ] { 6 }
    Constant [ public integer PLUS_SIGN_SYMBOL ] { 7 }
    Constant [ public integer CURRENCY_SYMBOL ] { 8 }
    Constant [ public integer INTL_CURRENCY_SYMBOL ] { 9 }
    Constant [ public integer MONETARY_SEPARATOR_SYMBOL ] { 10 }
    Constant [ public integer EXPONENTIAL_SYMBOL ] { 11 }
    Constant [ public integer PERMILL_SYMBOL ] { 12 }
    Constant [ public integer PAD_ESCAPE_SYMBOL ] { 13 }
    Constant [ public integer INFINITY_SYMBOL ] { 14 }
    Constant [ public integer NAN_SYMBOL ] { 15 }
    Constant [ public integer SIGNIFICANT_DIGIT_SYMBOL ] { 16 }
    Constant [ public integer MONETARY_GROUPING_SEPARATOR_SYMBOL ] { 17 }
    Constant [ public integer TYPE_DEFAULT ] { 0 }
    Constant [ public integer TYPE_INT32 ] { 1 }
    Constant [ public integer TYPE_INT64 ] { 2 }
    Constant [ public integer TYPE_DOUBLE ] { 3 }
    Constant [ public integer TYPE_CURRENCY ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [3] {
        Parameter #0 [ <required> $locale ]
        Parameter #1 [ <required> $style ]
        Parameter #2 [ <optional> $pattern ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [16] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $locale ]
        Parameter #1 [ <required> $style ]
        Parameter #2 [ <optional> $pattern ]
      }
    }

    Method [ <internal:intl> public method format ] {

      - Parameters [2] {
        Parameter #0 [ <required> $num ]
        Parameter #1 [ <optional> $type ]
      }
    }

    Method [ <internal:intl> public method parse ] {

      - Parameters [3] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <optional> $type ]
        Parameter #2 [ <optional> &$position ]
      }
    }

    Method [ <internal:intl> public method formatCurrency ] {

      - Parameters [2] {
        Parameter #0 [ <required> $num ]
        Parameter #1 [ <required> $currency ]
      }
    }

    Method [ <internal:intl> public method parseCurrency ] {

      - Parameters [3] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <required> &$currency ]
        Parameter #2 [ <optional> &$position ]
      }
    }

    Method [ <internal:intl> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $attr ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:intl> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $attr ]
      }
    }

    Method [ <internal:intl> public method setTextAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $attr ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:intl> public method getTextAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $attr ]
      }
    }

    Method [ <internal:intl> public method setSymbol ] {

      - Parameters [2] {
        Parameter #0 [ <required> $attr ]
        Parameter #1 [ <required> $symbol ]
      }
    }

    Method [ <internal:intl> public method getSymbol ] {

      - Parameters [1] {
        Parameter #0 [ <required> $attr ]
      }
    }

    Method [ <internal:intl> public method setPattern ] {

      - Parameters [1] {
        Parameter #0 [ <required> $pattern ]
      }
    }

    Method [ <internal:intl> public method getPattern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $type ]
      }
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
