<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Server',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Server',
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
        'name' => 'MongoDB\\Driver\\Server class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-server.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TYPE_UNKNOWN' => 0,
    'TYPE_STANDALONE' => 1,
    'TYPE_MONGOS' => 2,
    'TYPE_POSSIBLE_PRIMARY' => 3,
    'TYPE_RS_PRIMARY' => 4,
    'TYPE_RS_SECONDARY' => 5,
    'TYPE_RS_ARBITER' => 6,
    'TYPE_RS_OTHER' => 7,
    'TYPE_RS_GHOST' => 8,
    'TYPE_LOAD_BALANCER' => 9,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\Server',
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
    'executeBulkWrite' => 
    array (
      'name' => 'executeBulkWrite',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'bulkWrite' => 
        array (
          'position' => 1,
          'name' => 'bulkWrite',
          'type' => 'MongoDB\\Driver\\BulkWrite',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'MongoDB\\Driver\\WriteConcern|array|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\WriteResult',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeCommand' => 
    array (
      'name' => 'executeCommand',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'db' => 
        array (
          'position' => 0,
          'name' => 'db',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'command' => 
        array (
          'position' => 1,
          'name' => 'command',
          'type' => 'MongoDB\\Driver\\Command',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'MongoDB\\Driver\\ReadPreference|array|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeQuery' => 
    array (
      'name' => 'executeQuery',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'query' => 
        array (
          'position' => 1,
          'name' => 'query',
          'type' => 'MongoDB\\Driver\\Query',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'MongoDB\\Driver\\ReadPreference|array|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeReadCommand' => 
    array (
      'name' => 'executeReadCommand',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'db' => 
        array (
          'position' => 0,
          'name' => 'db',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'command' => 
        array (
          'position' => 1,
          'name' => 'command',
          'type' => 'MongoDB\\Driver\\Command',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeReadWriteCommand' => 
    array (
      'name' => 'executeReadWriteCommand',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'db' => 
        array (
          'position' => 0,
          'name' => 'db',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'command' => 
        array (
          'position' => 1,
          'name' => 'command',
          'type' => 'MongoDB\\Driver\\Command',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeWriteCommand' => 
    array (
      'name' => 'executeWriteCommand',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
        'db' => 
        array (
          'position' => 0,
          'name' => 'db',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'command' => 
        array (
          'position' => 1,
          'name' => 'command',
          'type' => 'MongoDB\\Driver\\Command',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Cursor',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getInfo' => 
    array (
      'name' => 'getInfo',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLatency' => 
    array (
      'name' => 'getLatency',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => '?int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getServerDescription' => 
    array (
      'name' => 'getServerDescription',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\ServerDescription',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTags' => 
    array (
      'name' => 'getTags',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isArbiter' => 
    array (
      'name' => 'isArbiter',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isHidden' => 
    array (
      'name' => 'isHidden',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isPassive' => 
    array (
      'name' => 'isPassive',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isPrimary' => 
    array (
      'name' => 'isPrimary',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isSecondary' => 
    array (
      'name' => 'isSecondary',
      'class' => 'MongoDB\\Driver\\Server',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\Server ] {

  - Constants [10] {
    Constant [ public int TYPE_UNKNOWN ] { 0 }
    Constant [ public int TYPE_STANDALONE ] { 1 }
    Constant [ public int TYPE_MONGOS ] { 2 }
    Constant [ public int TYPE_POSSIBLE_PRIMARY ] { 3 }
    Constant [ public int TYPE_RS_PRIMARY ] { 4 }
    Constant [ public int TYPE_RS_SECONDARY ] { 5 }
    Constant [ public int TYPE_RS_ARBITER ] { 6 }
    Constant [ public int TYPE_RS_OTHER ] { 7 }
    Constant [ public int TYPE_RS_GHOST ] { 8 }
    Constant [ public int TYPE_LOAD_BALANCER ] { 9 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [19] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method executeBulkWrite ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\BulkWrite $bulkWrite ]
        Parameter #2 [ <optional> MongoDB\\Driver\\WriteConcern|array|null $options = null ]
      }
      - Return [ MongoDB\\Driver\\WriteResult ]
    }

    Method [ <internal:mongodb> final public method executeCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> MongoDB\\Driver\\ReadPreference|array|null $options = null ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\Query $query ]
        Parameter #2 [ <optional> MongoDB\\Driver\\ReadPreference|array|null $options = null ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeReadCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> ?array $options = null ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeReadWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> ?array $options = null ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> ?array $options = null ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method getHost ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getInfo ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb> final public method getLatency ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:mongodb> final public method getPort ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getServerDescription ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\ServerDescription ]
    }

    Method [ <internal:mongodb> final public method getTags ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb> final public method getType ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method isArbiter ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:mongodb> final public method isHidden ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:mongodb> final public method isPassive ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:mongodb> final public method isPrimary ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:mongodb> final public method isSecondary ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }
  }
}
',
);
