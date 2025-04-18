<?php

return array (
  'type' => 'class',
  'name' => 'Collator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Collator',
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
        'name' => 'Collator class (php.net)',
        'url' => 'https://www.php.net/manual/class.collator.php',
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
      'class' => 'Collator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
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
    'create' => 
    array (
      'name' => 'create',
      'class' => 'Collator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
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
    'compare' => 
    array (
      'name' => 'compare',
      'class' => 'Collator',
      'parameters' => 
      array (
        'string1' => 
        array (
          'position' => 0,
          'name' => 'string1',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'string2' => 
        array (
          'position' => 1,
          'name' => 'string2',
          'type' => 'string',
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
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'Collator',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Collator::SORT_REGULAR',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sortWithSortKeys' => 
    array (
      'name' => 'sortWithSortKeys',
      'class' => 'Collator',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
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
    'asort' => 
    array (
      'name' => 'asort',
      'class' => 'Collator',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Collator::SORT_REGULAR',
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
      'class' => 'Collator',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => 'int',
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
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'Collator',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => 'int',
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
          'type' => 'int',
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
    'getStrength' => 
    array (
      'name' => 'getStrength',
      'class' => 'Collator',
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
    'setStrength' => 
    array (
      'name' => 'setStrength',
      'class' => 'Collator',
      'parameters' => 
      array (
        'strength' => 
        array (
          'position' => 0,
          'name' => 'strength',
          'type' => 'int',
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
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'Collator',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'Collator',
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
      'class' => 'Collator',
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
    'getSortKey' => 
    array (
      'name' => 'getSortKey',
      'class' => 'Collator',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class Collator ] {

  - Constants [24] {
    Constant [ public int DEFAULT_VALUE ] { -1 }
    Constant [ public int PRIMARY ] { 0 }
    Constant [ public int SECONDARY ] { 1 }
    Constant [ public int TERTIARY ] { 2 }
    Constant [ public int DEFAULT_STRENGTH ] { 2 }
    Constant [ public int QUATERNARY ] { 3 }
    Constant [ public int IDENTICAL ] { 15 }
    Constant [ public int OFF ] { 16 }
    Constant [ public int ON ] { 17 }
    Constant [ public int SHIFTED ] { 20 }
    Constant [ public int NON_IGNORABLE ] { 21 }
    Constant [ public int LOWER_FIRST ] { 24 }
    Constant [ public int UPPER_FIRST ] { 25 }
    Constant [ public int FRENCH_COLLATION ] { 0 }
    Constant [ public int ALTERNATE_HANDLING ] { 1 }
    Constant [ public int CASE_FIRST ] { 2 }
    Constant [ public int CASE_LEVEL ] { 3 }
    Constant [ public int NORMALIZATION_MODE ] { 4 }
    Constant [ public int STRENGTH ] { 5 }
    Constant [ public int HIRAGANA_QUATERNARY_MODE ] { 6 }
    Constant [ public int NUMERIC_COLLATION ] { 7 }
    Constant [ public int SORT_REGULAR ] { 0 }
    Constant [ public int SORT_STRING ] { 1 }
    Constant [ public int SORT_NUMERIC ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [13] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> public method compare ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string1 ]
        Parameter #1 [ <required> string $string2 ]
      }
    }

    Method [ <internal:intl> public method sort ] {

      - Parameters [2] {
        Parameter #0 [ <required> array &$array ]
        Parameter #1 [ <optional> int $flags = Collator::SORT_REGULAR ]
      }
    }

    Method [ <internal:intl> public method sortWithSortKeys ] {

      - Parameters [1] {
        Parameter #0 [ <required> array &$array ]
      }
    }

    Method [ <internal:intl> public method asort ] {

      - Parameters [2] {
        Parameter #0 [ <required> array &$array ]
        Parameter #1 [ <optional> int $flags = Collator::SORT_REGULAR ]
      }
    }

    Method [ <internal:intl> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $attribute ]
      }
    }

    Method [ <internal:intl> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $attribute ]
        Parameter #1 [ <required> int $value ]
      }
    }

    Method [ <internal:intl> public method getStrength ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setStrength ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $strength ]
      }
    }

    Method [ <internal:intl> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $type ]
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

    Method [ <internal:intl> public method getSortKey ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $string ]
      }
    }
  }
}
',
);
