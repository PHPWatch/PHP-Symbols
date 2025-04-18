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
      'class' => 'SNMP',
      'parameters' => 
      array (
        'version' => 
        array (
          'position' => 0,
          'name' => 'version',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'host' => 
        array (
          'position' => 1,
          'name' => 'host',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'community' => 
        array (
          'position' => 2,
          'name' => 'community',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 3,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'retries' => 
        array (
          'position' => 4,
          'name' => 'retries',
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
        'sec_level' => 
        array (
          'position' => 0,
          'name' => 'sec_level',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'auth_protocol' => 
        array (
          'position' => 1,
          'name' => 'auth_protocol',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'auth_passphrase' => 
        array (
          'position' => 2,
          'name' => 'auth_passphrase',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'priv_protocol' => 
        array (
          'position' => 3,
          'name' => 'priv_protocol',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'priv_passphrase' => 
        array (
          'position' => 4,
          'name' => 'priv_passphrase',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextName' => 
        array (
          'position' => 5,
          'name' => 'contextName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contextEngineID' => 
        array (
          'position' => 6,
          'name' => 'contextEngineID',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'object_id' => 
        array (
          'position' => 0,
          'name' => 'object_id',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_orignames' => 
        array (
          'position' => 1,
          'name' => 'use_orignames',
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
    'getnext' => 
    array (
      'name' => 'getnext',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'object_id' => 
        array (
          'position' => 0,
          'name' => 'object_id',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_orignames' => 
        array (
          'position' => 1,
          'name' => 'use_orignames',
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
    'walk' => 
    array (
      'name' => 'walk',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'object_id' => 
        array (
          'position' => 0,
          'name' => 'object_id',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'suffix_keys' => 
        array (
          'position' => 1,
          'name' => 'suffix_keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max_repetitions' => 
        array (
          'position' => 2,
          'name' => 'max_repetitions',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'non_repeaters' => 
        array (
          'position' => 3,
          'name' => 'non_repeaters',
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'SNMP',
      'parameters' => 
      array (
        'object_id' => 
        array (
          'position' => 0,
          'name' => 'object_id',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 2,
          'name' => 'value',
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
  'extension' => 'snmp',
  'toString' => 'Class [ <internal:snmp> class SNMP ] {

  - Constants [12] {
    Constant [ public integer VERSION_1 ] { 0 }
    Constant [ public integer VERSION_2c ] { 1 }
    Constant [ public integer VERSION_2C ] { 1 }
    Constant [ public integer VERSION_3 ] { 3 }
    Constant [ public integer ERRNO_NOERROR ] { 0 }
    Constant [ public integer ERRNO_ANY ] { 126 }
    Constant [ public integer ERRNO_GENERIC ] { 2 }
    Constant [ public integer ERRNO_TIMEOUT ] { 4 }
    Constant [ public integer ERRNO_ERROR_IN_REPLY ] { 8 }
    Constant [ public integer ERRNO_OID_NOT_INCREASING ] { 16 }
    Constant [ public integer ERRNO_OID_PARSING_ERROR ] { 32 }
    Constant [ public integer ERRNO_MULTIPLE_SET_QUERIES ] { 64 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:snmp, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> $version ]
        Parameter #1 [ <required> $host ]
        Parameter #2 [ <required> $community ]
        Parameter #3 [ <optional> $timeout ]
        Parameter #4 [ <optional> $retries ]
      }
    }

    Method [ <internal:snmp> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:snmp> public method setSecurity ] {

      - Parameters [7] {
        Parameter #0 [ <required> $sec_level ]
        Parameter #1 [ <required> $auth_protocol ]
        Parameter #2 [ <required> $auth_passphrase ]
        Parameter #3 [ <required> $priv_protocol ]
        Parameter #4 [ <required> $priv_passphrase ]
        Parameter #5 [ <required> $contextName ]
        Parameter #6 [ <required> $contextEngineID ]
      }
    }

    Method [ <internal:snmp> public method get ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object_id ]
        Parameter #1 [ <optional> $use_orignames ]
      }
    }

    Method [ <internal:snmp> public method getnext ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object_id ]
        Parameter #1 [ <optional> $use_orignames ]
      }
    }

    Method [ <internal:snmp> public method walk ] {

      - Parameters [4] {
        Parameter #0 [ <required> $object_id ]
        Parameter #1 [ <required> $suffix_keys ]
        Parameter #2 [ <required> $max_repetitions ]
        Parameter #3 [ <required> $non_repeaters ]
      }
    }

    Method [ <internal:snmp> public method set ] {

      - Parameters [3] {
        Parameter #0 [ <required> $object_id ]
        Parameter #1 [ <required> $type ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:snmp> public method getErrno ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:snmp> public method getError ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
