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
  'constants' => 
  array (
    'FORM_D' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int FORM_D ] { 4 }
',
      'visibility' => 1,
    ),
    'NFD' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int NFD ] { 4 }
',
      'visibility' => 1,
    ),
    'FORM_KD' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int FORM_KD ] { 8 }
',
      'visibility' => 1,
    ),
    'NFKD' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int NFKD ] { 8 }
',
      'visibility' => 1,
    ),
    'FORM_C' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int FORM_C ] { 16 }
',
      'visibility' => 1,
    ),
    'NFC' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int NFC ] { 16 }
',
      'visibility' => 1,
    ),
    'FORM_KC' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int FORM_KC ] { 32 }
',
      'visibility' => 1,
    ),
    'NFKC' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int NFKC ] { 32 }
',
      'visibility' => 1,
    ),
    'FORM_KC_CF' => 
    array (
      'value' => 48,
      'toString' => 'Constant [ public int FORM_KC_CF ] { 48 }
',
      'visibility' => 1,
    ),
    'NFKC_CF' => 
    array (
      'value' => 48,
      'toString' => 'Constant [ public int NFKC_CF ] { 48 }
',
      'visibility' => 1,
    ),
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
        'form' => 
        array (
          'position' => 1,
          'name' => 'form',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Normalizer::FORM_C',
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
        'form' => 
        array (
          'position' => 1,
          'name' => 'form',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Normalizer::FORM_C',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRawDecomposition' => 
    array (
      'name' => 'getRawDecomposition',
      'class' => 'Normalizer',
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
        'form' => 
        array (
          'position' => 1,
          'name' => 'form',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Normalizer::FORM_C',
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
  'is_instantiable' => true,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class Normalizer ] {

  - Constants [10] {
    Constant [ public int FORM_D ] { 4 }
    Constant [ public int NFD ] { 4 }
    Constant [ public int FORM_KD ] { 8 }
    Constant [ public int NFKD ] { 8 }
    Constant [ public int FORM_C ] { 16 }
    Constant [ public int NFC ] { 16 }
    Constant [ public int FORM_KC ] { 32 }
    Constant [ public int NFKC ] { 32 }
    Constant [ public int FORM_KC_CF ] { 48 }
    Constant [ public int NFKC_CF ] { 48 }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:intl> static public method normalize ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $form = Normalizer::FORM_C ]
      }
    }

    Method [ <internal:intl> static public method isNormalized ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $form = Normalizer::FORM_C ]
      }
    }

    Method [ <internal:intl> static public method getRawDecomposition ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $form = Normalizer::FORM_C ]
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
