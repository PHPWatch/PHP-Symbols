<?php

return array (
  'type' => 'class',
  'name' => 'SNMP',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SNMP',
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
        'name' => 'SNMP class (php.net)',
        'url' => 'https://www.php.net/manual/class.snmp.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'VERSION_1' => 0,
    'VERSION_2c' => 1,
    'VERSION_2C' => 1,
    'VERSION_3' => 3,
    'ERRNO_NOERROR' => 0,
    'ERRNO_ANY' => 126,
    'ERRNO_GENERIC' => 2,
    'ERRNO_TIMEOUT' => 4,
    'ERRNO_ERROR_IN_REPLY' => 8,
    'ERRNO_OID_NOT_INCREASING' => 16,
    'ERRNO_OID_PARSING_ERROR' => 32,
    'ERRNO_MULTIPLE_SET_QUERIES' => 64,
  ),
  'properties' => 
  array (
    'info' => 
    array (
      'name' => 'info',
      'class' => 'SNMP',
      'type' => 'array',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'max_oids' => 
    array (
      'name' => 'max_oids',
      'class' => 'SNMP',
      'type' => '?int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'valueretrieval' => 
    array (
      'name' => 'valueretrieval',
      'class' => 'SNMP',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'quick_print' => 
    array (
      'name' => 'quick_print',
      'class' => 'SNMP',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'enum_print' => 
    array (
      'name' => 'enum_print',
      'class' => 'SNMP',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'oid_output_format' => 
    array (
      'name' => 'oid_output_format',
      'class' => 'SNMP',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'oid_increasing_check' => 
    array (
      'name' => 'oid_increasing_check',
      'class' => 'SNMP',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'exceptions_enabled' => 
    array (
      'name' => 'exceptions_enabled',
      'class' => 'SNMP',
      'type' => 'int',
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
      'class' => 'SNMP',
      'parameters' => 
      array (
        'version' => 
        array (
          'position' => 0,
          'name' => 'version',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'hostname' => 
        array (
          'position' => 1,
          'name' => 'hostname',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'community' => 
        array (
          'position' => 2,
          'name' => 'community',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 3,
          'name' => 'timeout',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'retries' => 
        array (
          'position' => 4,
          'name' => 'retries',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'SNMP',
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
    'setSecurity' => 
    array (
      'name' => 'setSecurity',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'securityLevel' => 
        array (
          'position' => 0,
          'name' => 'securityLevel',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'authProtocol' => 
        array (
          'position' => 1,
          'name' => 'authProtocol',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'authPassphrase' => 
        array (
          'position' => 2,
          'name' => 'authPassphrase',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'privacyProtocol' => 
        array (
          'position' => 3,
          'name' => 'privacyProtocol',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'privacyPassphrase' => 
        array (
          'position' => 4,
          'name' => 'privacyPassphrase',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextName' => 
        array (
          'position' => 5,
          'name' => 'contextName',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextEngineId' => 
        array (
          'position' => 6,
          'name' => 'contextEngineId',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'objectId' => 
        array (
          'position' => 0,
          'name' => 'objectId',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'preserveKeys' => 
        array (
          'position' => 1,
          'name' => 'preserveKeys',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'getnext' => 
    array (
      'name' => 'getnext',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'objectId' => 
        array (
          'position' => 0,
          'name' => 'objectId',
          'type' => 'array|string',
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
    'walk' => 
    array (
      'name' => 'walk',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'objectId' => 
        array (
          'position' => 0,
          'name' => 'objectId',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'suffixAsKey' => 
        array (
          'position' => 1,
          'name' => 'suffixAsKey',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'maxRepetitions' => 
        array (
          'position' => 2,
          'name' => 'maxRepetitions',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nonRepeaters' => 
        array (
          'position' => 3,
          'name' => 'nonRepeaters',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'objectId' => 
        array (
          'position' => 0,
          'name' => 'objectId',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 2,
          'name' => 'value',
          'type' => 'array|string',
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
    'getErrno' => 
    array (
      'name' => 'getErrno',
      'class' => 'SNMP',
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
    'getError' => 
    array (
      'name' => 'getError',
      'class' => 'SNMP',
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
  'is_final' => false,
  'is_read_only' => false,
);
