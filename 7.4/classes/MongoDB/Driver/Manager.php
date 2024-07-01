<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Manager',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Manager',
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
        'name' => 'MongoDB\\Driver\\Manager class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-manager.php',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'uriOptions' => 
        array (
          'position' => 1,
          'name' => 'uriOptions',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'driverOptions' => 
        array (
          'position' => 2,
          'name' => 'driverOptions',
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
    'addSubscriber' => 
    array (
      'name' => 'addSubscriber',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
        'subscriber' => 
        array (
          'position' => 0,
          'name' => 'subscriber',
          'type' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createClientEncryption' => 
    array (
      'name' => 'createClientEncryption',
      'class' => 'MongoDB\\Driver\\Manager',
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
      'return_type' => 'MongoDB\\Driver\\ClientEncryption',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'executeBulkWrite' => 
    array (
      'name' => 'executeBulkWrite',
      'class' => 'MongoDB\\Driver\\Manager',
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
        'bulk' => 
        array (
          'position' => 1,
          'name' => 'bulk',
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'MongoDB\\Driver\\Manager',
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'MongoDB\\Driver\\Manager',
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'MongoDB\\Driver\\Manager',
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
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'MongoDB\\Driver\\Manager',
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
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'MongoDB\\Driver\\Manager',
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
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
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
    'getEncryptedFieldsMap' => 
    array (
      'name' => 'getEncryptedFieldsMap',
      'class' => 'MongoDB\\Driver\\Manager',
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
    'getReadConcern' => 
    array (
      'name' => 'getReadConcern',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\ReadConcern',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getReadPreference' => 
    array (
      'name' => 'getReadPreference',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\ReadPreference',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getServers' => 
    array (
      'name' => 'getServers',
      'class' => 'MongoDB\\Driver\\Manager',
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
    'getWriteConcern' => 
    array (
      'name' => 'getWriteConcern',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\WriteConcern',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'removeSubscriber' => 
    array (
      'name' => 'removeSubscriber',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
        'subscriber' => 
        array (
          'position' => 0,
          'name' => 'subscriber',
          'type' => 'MongoDB\\Driver\\Monitoring\\Subscriber',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'selectServer' => 
    array (
      'name' => 'selectServer',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
        'readPreference' => 
        array (
          'position' => 0,
          'name' => 'readPreference',
          'type' => 'MongoDB\\Driver\\ReadPreference',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Server',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'startSession' => 
    array (
      'name' => 'startSession',
      'class' => 'MongoDB\\Driver\\Manager',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\Driver\\Session',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\Manager ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [17] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string or NULL $uri ]
        Parameter #1 [ <optional> array or NULL $uriOptions ]
        Parameter #2 [ <optional> array or NULL $driverOptions ]
      }
    }

    Method [ <internal:mongodb> final public method addSubscriber ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\Subscriber $subscriber ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb> final public method createClientEncryption ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $options ]
      }
      - Return [ MongoDB\\Driver\\ClientEncryption ]
    }

    Method [ <internal:mongodb> final public method executeBulkWrite ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\BulkWrite $bulk ]
        Parameter #2 [ <optional> $options ]
      }
      - Return [ MongoDB\\Driver\\WriteResult ]
    }

    Method [ <internal:mongodb> final public method executeCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> $options ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\Query $query ]
        Parameter #2 [ <optional> $options ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeReadCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> array or NULL $options ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeReadWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> array or NULL $options ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method executeWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> array or NULL $options ]
      }
      - Return [ MongoDB\\Driver\\Cursor ]
    }

    Method [ <internal:mongodb> final public method getEncryptedFieldsMap ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getReadConcern ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\ReadConcern ]
    }

    Method [ <internal:mongodb> final public method getReadPreference ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\ReadPreference ]
    }

    Method [ <internal:mongodb> final public method getServers ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb> final public method getWriteConcern ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\WriteConcern ]
    }

    Method [ <internal:mongodb> final public method removeSubscriber ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\Monitoring\\Subscriber $subscriber ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb> final public method selectServer ] {

      - Parameters [1] {
        Parameter #0 [ <optional> MongoDB\\Driver\\ReadPreference or NULL $readPreference ]
      }
      - Return [ MongoDB\\Driver\\Server ]
    }

    Method [ <internal:mongodb> final public method startSession ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $options ]
      }
      - Return [ MongoDB\\Driver\\Session ]
    }
  }
}
',
);
