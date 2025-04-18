<?php

return array (
  'type' => 'class',
  'name' => 'OCILob',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'OCILob',
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
        'name' => 'OCILob class (php.net)',
        'url' => 'https://www.php.net/manual/class.ocilob.php',
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
    'save' => 
    array (
      'name' => 'save',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'import' => 
    array (
      'name' => 'import',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
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
    'saveFile' => 
    array (
      'name' => 'saveFile',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
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
    'load' => 
    array (
      'name' => 'load',
      'class' => 'OCILob',
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
    'read' => 
    array (
      'name' => 'read',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'length' => 
        array (
          'position' => 0,
          'name' => 'length',
          'type' => 'int',
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
    'eof' => 
    array (
      'name' => 'eof',
      'class' => 'OCILob',
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
    'tell' => 
    array (
      'name' => 'tell',
      'class' => 'OCILob',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'OCILob',
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
    'seek' => 
    array (
      'name' => 'seek',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whence' => 
        array (
          'position' => 1,
          'name' => 'whence',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'OCI_SEEK_SET',
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
      'class' => 'OCILob',
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
    'write' => 
    array (
      'name' => 'write',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'append' => 
    array (
      'name' => 'append',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'from' => 
        array (
          'position' => 0,
          'name' => 'from',
          'type' => 'OCILob',
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
    'truncate' => 
    array (
      'name' => 'truncate',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'length' => 
        array (
          'position' => 0,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'erase' => 
    array (
      'name' => 'erase',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'flush' => 
    array (
      'name' => 'flush',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'flag' => 
        array (
          'position' => 0,
          'name' => 'flag',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'setBuffering' => 
    array (
      'name' => 'setBuffering',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'bool',
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
    'getBuffering' => 
    array (
      'name' => 'getBuffering',
      'class' => 'OCILob',
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
    'writeToFile' => 
    array (
      'name' => 'writeToFile',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 2,
          'name' => 'length',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'export' => 
    array (
      'name' => 'export',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 2,
          'name' => 'length',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'writeTemporary' => 
    array (
      'name' => 'writeTemporary',
      'class' => 'OCILob',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'OCI_TEMP_CLOB',
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
      'class' => 'OCILob',
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
    'free' => 
    array (
      'name' => 'free',
      'class' => 'OCILob',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'oci8',
  'toString' => 'Class [ <internal:oci8> class OCILob ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [22] {
    Method [ <internal:oci8> public method save ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> int $offset = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method import ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $filename ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method saveFile ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $filename ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method load ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:oci8> public method read ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $length ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:oci8> public method eof ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method tell ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method seek ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <optional> int $whence = OCI_SEEK_SET ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method size ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method write ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> ?int $length = null ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method append ] {

      - Parameters [1] {
        Parameter #0 [ <required> OCILob $from ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method truncate ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $length = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method erase ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?int $offset = null ]
        Parameter #1 [ <optional> ?int $length = null ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:oci8> public method flush ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flag = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method setBuffering ] {

      - Parameters [1] {
        Parameter #0 [ <required> bool $mode ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method getBuffering ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method writeToFile ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> ?int $offset = null ]
        Parameter #2 [ <optional> ?int $length = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method export ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> ?int $offset = null ]
        Parameter #2 [ <optional> ?int $length = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method writeTemporary ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> int $type = OCI_TEMP_CLOB ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method close ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:oci8> public method free ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }
  }
}
',
);
