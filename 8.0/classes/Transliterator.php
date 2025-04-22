<?php

return array (
  'type' => 'class',
  'name' => 'Transliterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Transliterator',
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
        'name' => 'Transliterator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.transliterator.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'FORWARD' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int FORWARD ] { 0 }
',
      'visibility' => 1,
    ),
    'REVERSE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int REVERSE ] { 1 }
',
      'visibility' => 1,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Transliterator',
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
    'create' => 
    array (
      'name' => 'create',
      'class' => 'Transliterator',
      'parameters' => 
      array (
        'id' => 
        array (
          'position' => 0,
          'name' => 'id',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'direction' => 
        array (
          'position' => 1,
          'name' => 'direction',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Transliterator::FORWARD',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createFromRules' => 
    array (
      'name' => 'createFromRules',
      'class' => 'Transliterator',
      'parameters' => 
      array (
        'rules' => 
        array (
          'position' => 0,
          'name' => 'rules',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'direction' => 
        array (
          'position' => 1,
          'name' => 'direction',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Transliterator::FORWARD',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createInverse' => 
    array (
      'name' => 'createInverse',
      'class' => 'Transliterator',
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
    'listIDs' => 
    array (
      'name' => 'listIDs',
      'class' => 'Transliterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'transliterate' => 
    array (
      'name' => 'transliterate',
      'class' => 'Transliterator',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => 'int',
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
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'Transliterator',
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
      'class' => 'Transliterator',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'class' => 'Transliterator',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class Transliterator ] {

  - Constants [2] {
    Constant [ public int FORWARD ] { 0 }
    Constant [ public int REVERSE ] { 1 }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $id ]
        Parameter #1 [ <optional> int $direction = Transliterator::FORWARD ]
      }
    }

    Method [ <internal:intl> static public method createFromRules ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $rules ]
        Parameter #1 [ <optional> int $direction = Transliterator::FORWARD ]
      }
    }

    Method [ <internal:intl> static public method listIDs ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [1] {
    Property [ public $id = NULL ]
  }

  - Methods [5] {
    Method [ <internal:intl, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method createInverse ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method transliterate ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $start = 0 ]
        Parameter #2 [ <optional> int $end = -1 ]
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
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'id' => NULL,
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => false,
  'is_read_only' => false,
);
