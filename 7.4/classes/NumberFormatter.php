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
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class NumberFormatter ] {

  - Constants [74] {
    Constant [ public int PATTERN_DECIMAL ] { 0 }
    Constant [ public int DECIMAL ] { 1 }
    Constant [ public int CURRENCY ] { 2 }
    Constant [ public int PERCENT ] { 3 }
    Constant [ public int SCIENTIFIC ] { 4 }
    Constant [ public int SPELLOUT ] { 5 }
    Constant [ public int ORDINAL ] { 6 }
    Constant [ public int DURATION ] { 7 }
    Constant [ public int PATTERN_RULEBASED ] { 9 }
    Constant [ public int IGNORE ] { 0 }
    Constant [ public int CURRENCY_ACCOUNTING ] { 12 }
    Constant [ public int DEFAULT_STYLE ] { 1 }
    Constant [ public int ROUND_CEILING ] { 0 }
    Constant [ public int ROUND_FLOOR ] { 1 }
    Constant [ public int ROUND_DOWN ] { 2 }
    Constant [ public int ROUND_UP ] { 3 }
    Constant [ public int ROUND_HALFEVEN ] { 4 }
    Constant [ public int ROUND_HALFDOWN ] { 5 }
    Constant [ public int ROUND_HALFUP ] { 6 }
    Constant [ public int PAD_BEFORE_PREFIX ] { 0 }
    Constant [ public int PAD_AFTER_PREFIX ] { 1 }
    Constant [ public int PAD_BEFORE_SUFFIX ] { 2 }
    Constant [ public int PAD_AFTER_SUFFIX ] { 3 }
    Constant [ public int PARSE_INT_ONLY ] { 0 }
    Constant [ public int GROUPING_USED ] { 1 }
    Constant [ public int DECIMAL_ALWAYS_SHOWN ] { 2 }
    Constant [ public int MAX_INTEGER_DIGITS ] { 3 }
    Constant [ public int MIN_INTEGER_DIGITS ] { 4 }
    Constant [ public int INTEGER_DIGITS ] { 5 }
    Constant [ public int MAX_FRACTION_DIGITS ] { 6 }
    Constant [ public int MIN_FRACTION_DIGITS ] { 7 }
    Constant [ public int FRACTION_DIGITS ] { 8 }
    Constant [ public int MULTIPLIER ] { 9 }
    Constant [ public int GROUPING_SIZE ] { 10 }
    Constant [ public int ROUNDING_MODE ] { 11 }
    Constant [ public int ROUNDING_INCREMENT ] { 12 }
    Constant [ public int FORMAT_WIDTH ] { 13 }
    Constant [ public int PADDING_POSITION ] { 14 }
    Constant [ public int SECONDARY_GROUPING_SIZE ] { 15 }
    Constant [ public int SIGNIFICANT_DIGITS_USED ] { 16 }
    Constant [ public int MIN_SIGNIFICANT_DIGITS ] { 17 }
    Constant [ public int MAX_SIGNIFICANT_DIGITS ] { 18 }
    Constant [ public int LENIENT_PARSE ] { 19 }
    Constant [ public int POSITIVE_PREFIX ] { 0 }
    Constant [ public int POSITIVE_SUFFIX ] { 1 }
    Constant [ public int NEGATIVE_PREFIX ] { 2 }
    Constant [ public int NEGATIVE_SUFFIX ] { 3 }
    Constant [ public int PADDING_CHARACTER ] { 4 }
    Constant [ public int CURRENCY_CODE ] { 5 }
    Constant [ public int DEFAULT_RULESET ] { 6 }
    Constant [ public int PUBLIC_RULESETS ] { 7 }
    Constant [ public int DECIMAL_SEPARATOR_SYMBOL ] { 0 }
    Constant [ public int GROUPING_SEPARATOR_SYMBOL ] { 1 }
    Constant [ public int PATTERN_SEPARATOR_SYMBOL ] { 2 }
    Constant [ public int PERCENT_SYMBOL ] { 3 }
    Constant [ public int ZERO_DIGIT_SYMBOL ] { 4 }
    Constant [ public int DIGIT_SYMBOL ] { 5 }
    Constant [ public int MINUS_SIGN_SYMBOL ] { 6 }
    Constant [ public int PLUS_SIGN_SYMBOL ] { 7 }
    Constant [ public int CURRENCY_SYMBOL ] { 8 }
    Constant [ public int INTL_CURRENCY_SYMBOL ] { 9 }
    Constant [ public int MONETARY_SEPARATOR_SYMBOL ] { 10 }
    Constant [ public int EXPONENTIAL_SYMBOL ] { 11 }
    Constant [ public int PERMILL_SYMBOL ] { 12 }
    Constant [ public int PAD_ESCAPE_SYMBOL ] { 13 }
    Constant [ public int INFINITY_SYMBOL ] { 14 }
    Constant [ public int NAN_SYMBOL ] { 15 }
    Constant [ public int SIGNIFICANT_DIGIT_SYMBOL ] { 16 }
    Constant [ public int MONETARY_GROUPING_SEPARATOR_SYMBOL ] { 17 }
    Constant [ public int TYPE_DEFAULT ] { 0 }
    Constant [ public int TYPE_INT32 ] { 1 }
    Constant [ public int TYPE_INT64 ] { 2 }
    Constant [ public int TYPE_DOUBLE ] { 3 }
    Constant [ public int TYPE_CURRENCY ] { 4 }
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
