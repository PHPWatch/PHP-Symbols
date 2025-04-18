<?php

return array (
  'type' => 'class',
  'name' => 'Normalizer',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Normalizer',
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
        'name' => 'Normalizer class (php.net)',
        'url' => 'https://www.php.net/manual/class.normalizer.php',
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
    'normalize' => 
    array (
      'name' => 'normalize',
      'class' => 'Normalizer',
      'parameters' => 
      array (
        'input' => 
        array (
          'position' => 0,
          'name' => 'input',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'form' => 
        array (
          'position' => 1,
          'name' => 'form',
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
    'isNormalized' => 
    array (
      'name' => 'isNormalized',
      'class' => 'Normalizer',
      'parameters' => 
      array (
        'input' => 
        array (
          'position' => 0,
          'name' => 'input',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'form' => 
        array (
          'position' => 1,
          'name' => 'form',
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
  'toString' => 'Class [ <internal:intl> class Normalizer ] {

  - Constants [9] {
    Constant [ public integer NONE ] { 1 }
    Constant [ public integer FORM_D ] { 2 }
    Constant [ public integer NFD ] { 2 }
    Constant [ public integer FORM_KD ] { 3 }
    Constant [ public integer NFKD ] { 3 }
    Constant [ public integer FORM_C ] { 4 }
    Constant [ public integer NFC ] { 4 }
    Constant [ public integer FORM_KC ] { 5 }
    Constant [ public integer NFKC ] { 5 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:intl> static public method normalize ] {

      - Parameters [2] {
        Parameter #0 [ <required> $input ]
        Parameter #1 [ <optional> $form ]
      }
    }

    Method [ <internal:intl> static public method isNormalized ] {

      - Parameters [2] {
        Parameter #0 [ <required> $input ]
        Parameter #1 [ <optional> $form ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
',
);
