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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
);
