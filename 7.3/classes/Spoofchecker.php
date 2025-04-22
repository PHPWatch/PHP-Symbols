<?php

return array (
  'type' => 'class',
  'name' => 'Spoofchecker',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Spoofchecker',
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
        'name' => 'Spoofchecker interface (php.net)',
        'url' => 'https://www.php.net/manual/class.spoofchecker.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'SINGLE_SCRIPT_CONFUSABLE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int SINGLE_SCRIPT_CONFUSABLE ] { 1 }
',
      'visibility' => 256,
    ),
    'MIXED_SCRIPT_CONFUSABLE' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int MIXED_SCRIPT_CONFUSABLE ] { 2 }
',
      'visibility' => 256,
    ),
    'WHOLE_SCRIPT_CONFUSABLE' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int WHOLE_SCRIPT_CONFUSABLE ] { 4 }
',
      'visibility' => 256,
    ),
    'ANY_CASE' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int ANY_CASE ] { 8 }
',
      'visibility' => 256,
    ),
    'SINGLE_SCRIPT' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int SINGLE_SCRIPT ] { 16 }
',
      'visibility' => 256,
    ),
    'INVISIBLE' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int INVISIBLE ] { 32 }
',
      'visibility' => 256,
    ),
    'CHAR_LIMIT' => 
    array (
      'value' => 64,
      'toString' => 'Constant [ public int CHAR_LIMIT ] { 64 }
',
      'visibility' => 256,
    ),
    'ASCII' => 
    array (
      'value' => 268435456,
      'toString' => 'Constant [ public int ASCII ] { 268435456 }
',
      'visibility' => 256,
    ),
    'HIGHLY_RESTRICTIVE' => 
    array (
      'value' => 805306368,
      'toString' => 'Constant [ public int HIGHLY_RESTRICTIVE ] { 805306368 }
',
      'visibility' => 256,
    ),
    'MODERATELY_RESTRICTIVE' => 
    array (
      'value' => 1073741824,
      'toString' => 'Constant [ public int MODERATELY_RESTRICTIVE ] { 1073741824 }
',
      'visibility' => 256,
    ),
    'MINIMALLY_RESTRICTIVE' => 
    array (
      'value' => 1342177280,
      'toString' => 'Constant [ public int MINIMALLY_RESTRICTIVE ] { 1342177280 }
',
      'visibility' => 256,
    ),
    'UNRESTRICTIVE' => 
    array (
      'value' => 1610612736,
      'toString' => 'Constant [ public int UNRESTRICTIVE ] { 1610612736 }
',
      'visibility' => 256,
    ),
    'SINGLE_SCRIPT_RESTRICTIVE' => 
    array (
      'value' => 536870912,
      'toString' => 'Constant [ public int SINGLE_SCRIPT_RESTRICTIVE ] { 536870912 }
',
      'visibility' => 256,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Spoofchecker',
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
    'isSuspicious' => 
    array (
      'name' => 'isSuspicious',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'text' => 
        array (
          'position' => 0,
          'name' => 'text',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 1,
          'name' => 'error',
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
    'areConfusable' => 
    array (
      'name' => 'areConfusable',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        's1' => 
        array (
          'position' => 0,
          'name' => 's1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        's2' => 
        array (
          'position' => 1,
          'name' => 's2',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 2,
          'name' => 'error',
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
    'setAllowedLocales' => 
    array (
      'name' => 'setAllowedLocales',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'locale_list' => 
        array (
          'position' => 0,
          'name' => 'locale_list',
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
    'setChecks' => 
    array (
      'name' => 'setChecks',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'checks' => 
        array (
          'position' => 0,
          'name' => 'checks',
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
    'setRestrictionLevel' => 
    array (
      'name' => 'setRestrictionLevel',
      'class' => 'Spoofchecker',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class Spoofchecker ] {

  - Constants [13] {
    Constant [ public int SINGLE_SCRIPT_CONFUSABLE ] { 1 }
    Constant [ public int MIXED_SCRIPT_CONFUSABLE ] { 2 }
    Constant [ public int WHOLE_SCRIPT_CONFUSABLE ] { 4 }
    Constant [ public int ANY_CASE ] { 8 }
    Constant [ public int SINGLE_SCRIPT ] { 16 }
    Constant [ public int INVISIBLE ] { 32 }
    Constant [ public int CHAR_LIMIT ] { 64 }
    Constant [ public int ASCII ] { 268435456 }
    Constant [ public int HIGHLY_RESTRICTIVE ] { 805306368 }
    Constant [ public int MODERATELY_RESTRICTIVE ] { 1073741824 }
    Constant [ public int MINIMALLY_RESTRICTIVE ] { 1342177280 }
    Constant [ public int UNRESTRICTIVE ] { 1610612736 }
    Constant [ public int SINGLE_SCRIPT_RESTRICTIVE ] { 536870912 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method isSuspicious ] {

      - Parameters [2] {
        Parameter #0 [ <required> $text ]
        Parameter #1 [ <optional> &$error ]
      }
    }

    Method [ <internal:intl> public method areConfusable ] {

      - Parameters [3] {
        Parameter #0 [ <required> $s1 ]
        Parameter #1 [ <required> $s2 ]
        Parameter #2 [ <optional> &$error ]
      }
    }

    Method [ <internal:intl> public method setAllowedLocales ] {

      - Parameters [1] {
        Parameter #0 [ <required> $locale_list ]
      }
    }

    Method [ <internal:intl> public method setChecks ] {

      - Parameters [1] {
        Parameter #0 [ <required> $checks ]
      }
    }

    Method [ <internal:intl> public method setRestrictionLevel ] {

      - Parameters [1] {
        Parameter #0 [ <required> $level ]
      }
    }
  }
}
',
  'modifiers' => 0,
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
