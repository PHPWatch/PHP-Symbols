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
    'ALGORITHM_INDEXED' => 'Indexed',
    'ALGORITHM_UNINDEXED' => 'Unindexed',
    'ALGORITHM_RANGE_PREVIEW' => 'RangePreview',
    'QUERY_TYPE_EQUALITY' => 'equality',
    'QUERY_TYPE_RANGE_PREVIEW' => 'rangePreview',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
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
    'addKeyAltName' => 
    array (
      'name' => 'addKeyAltName',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyId' => 
        array (
          'position' => 0,
          'name' => 'keyId',
          'type' => 'MongoDB\\BSON\\Binary',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'keyAltName' => 
        array (
          'position' => 1,
          'name' => 'keyAltName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
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
          'type' => 'string',
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
      'return_type' => 'MongoDB\\BSON\\Binary',
      'has_return_type' => true,
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
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'MongoDB\\BSON\\Binary',
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
    'deleteKey' => 
    array (
      'name' => 'deleteKey',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyId' => 
        array (
          'position' => 0,
          'name' => 'keyId',
          'type' => 'MongoDB\\BSON\\Binary',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'object',
      'has_return_type' => true,
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
      'return_type' => 'MongoDB\\BSON\\Binary',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'encryptExpression' => 
    array (
      'name' => 'encryptExpression',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'expr' => 
        array (
          'position' => 0,
          'name' => 'expr',
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
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKey' => 
    array (
      'name' => 'getKey',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyId' => 
        array (
          'position' => 0,
          'name' => 'keyId',
          'type' => 'MongoDB\\BSON\\Binary',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKeyByAltName' => 
    array (
      'name' => 'getKeyByAltName',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyAltName' => 
        array (
          'position' => 0,
          'name' => 'keyAltName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKeys' => 
    array (
      'name' => 'getKeys',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeKeyAltName' => 
    array (
      'name' => 'removeKeyAltName',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'keyId' => 
        array (
          'position' => 0,
          'name' => 'keyId',
          'type' => 'MongoDB\\BSON\\Binary',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'keyAltName' => 
        array (
          'position' => 1,
          'name' => 'keyAltName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rewrapManyDataKey' => 
    array (
      'name' => 'rewrapManyDataKey',
      'class' => 'MongoDB\\Driver\\ClientEncryption',
      'parameters' => 
      array (
        'filter' => 
        array (
          'position' => 0,
          'name' => 'filter',
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
      'return_type' => 'object',
      'has_return_type' => true,
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
);
