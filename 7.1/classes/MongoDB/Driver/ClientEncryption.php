<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\ClientEncryption',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\ClientEncryption',
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
        'name' => 'MongoDB\\Driver\\ClientEncryption class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-clientencryption.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC' => 'AEAD_AES_256_CBC_HMAC_SHA_512-Deterministic',
    'AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM' => 'AEAD_AES_256_CBC_HMAC_SHA_512-Random',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'createDataKey' => 
    array (
      'name' => 'createDataKey',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'kmsProvider' => 
        array (
          'position' => 0,
          'name' => 'kmsProvider',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
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
    'encrypt' => 
    array (
      'name' => 'encrypt',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
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
    'decrypt' => 
    array (
      'name' => 'decrypt',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyVaultClient' => 
        array (
          'position' => 0,
          'name' => 'keyVaultClient',
          'type' => 'MongoDB\\BSON\\BinaryInterface',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\ClientEncryption ] {

  - Constants [2] {
    Constant [ public string AEAD_AES_256_CBC_HMAC_SHA_512_DETERMINISTIC ] { AEAD_AES_256_CBC_HMAC_SHA_512-Deterministic }
    Constant [ public string AEAD_AES_256_CBC_HMAC_SHA_512_RANDOM ] { AEAD_AES_256_CBC_HMAC_SHA_512-Random }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:mongodb> final public method createDataKey ] {

      - Parameters [2] {
        Parameter #0 [ <required> $kmsProvider ]
        Parameter #1 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:mongodb> final public method encrypt ] {

      - Parameters [2] {
        Parameter #0 [ <required> $value ]
        Parameter #1 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:mongodb> final public method decrypt ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\BSON\\BinaryInterface $keyVaultClient ]
      }
    }

    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method __wakeup ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
