<?php

return array (
  'type' => 'class',
  'name' => 'OCICollection',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'OCICollection',
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
        'name' => 'OCICollection class (php.net)',
        'url' => 'https://www.php.net/manual/class.ocicollection.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'free' => 
    array (
      'name' => 'free',
      'class' => 'OCICollection',
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
    'append' => 
    array (
      'name' => 'append',
      'class' => 'OCICollection',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'string',
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
    'getElem' => 
    array (
      'name' => 'getElem',
      'class' => 'OCICollection',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
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
    'assign' => 
    array (
      'name' => 'assign',
      'class' => 'OCICollection',
      'parameters' => 
      array (
        'from' => 
        array (
          'position' => 0,
          'name' => 'from',
          'type' => 'OCICollection',
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
    'assignElem' => 
    array (
      'name' => 'assignElem',
      'class' => 'OCICollection',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'string',
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
    'size' => 
    array (
      'name' => 'size',
      'class' => 'OCICollection',
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
    'max' => 
    array (
      'name' => 'max',
      'class' => 'OCICollection',
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
    'trim' => 
    array (
      'name' => 'trim',
      'class' => 'OCICollection',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'int',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'oci8',
  'toString' => 'Class [ <internal:oci8> class OCICollection ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [8] {
    Method [ <internal:oci8> public method free ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method append ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $value ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method getElem ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Tentative return [ string|float|false|null ]
    }

    Method [ <internal:oci8> public method assign ] {

      - Parameters [1] {
        Parameter #0 [ <required> OCICollection $from ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method assignElem ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> string $value ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method size ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method max ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method trim ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $num ]
      }
      - Tentative return [ bool ]
    }
  }
}
',
);
