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
        'name' => 'Transliterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.transliterator.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
    'id' => NULL,
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
    'id' => 
    array (
      'name' => 'id',
      'class' => 'Transliterator',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'direction' => 
        array (
          'position' => 1,
          'name' => 'direction',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'direction' => 
        array (
          'position' => 1,
          'name' => 'direction',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
        'subject' => 
        array (
          'position' => 0,
          'name' => 'subject',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class Transliterator ] {

  - Constants [2] {
    Constant [ integer FORWARD ] { 0 }
    Constant [ integer REVERSE ] { 1 }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:intl> static public method create ] {

      - Parameters [2] {
        Parameter #0 [ <required> $id ]
        Parameter #1 [ <optional> $direction ]
      }
    }

    Method [ <internal:intl> static public method createFromRules ] {

      - Parameters [2] {
        Parameter #0 [ <required> $rules ]
        Parameter #1 [ <optional> $direction ]
      }
    }

    Method [ <internal:intl> static public method listIDs ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [1] {
    Property [ <default> public $id ]
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
        Parameter #0 [ <required> $subject ]
        Parameter #1 [ <optional> $start ]
        Parameter #2 [ <optional> $end ]
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
