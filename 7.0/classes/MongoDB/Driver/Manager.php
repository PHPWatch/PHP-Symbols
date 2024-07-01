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
          'type' => NULL,
          'is_optional' => true,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'zquery' => 
        array (
          'position' => 1,
          'name' => 'zquery',
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
      'return_type' => NULL,
      'has_return_type' => false,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'zbulk' => 
        array (
          'position' => 1,
          'name' => 'zbulk',
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
      'return_type' => NULL,
      'has_return_type' => false,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__wakeup' => 
    array (
      'name' => '__wakeup',
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

  - Methods [15] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $uri ]
        Parameter #1 [ <optional> array $options ]
        Parameter #2 [ <optional> array $driverOptions ]
      }
    }

    Method [ <internal:mongodb> final public method createClientEncryption ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeReadCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> array $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeReadWriteCommand ] {

      - Parameters [3] {
        Parameter #0 [ <required> $db ]
        Parameter #1 [ <required> MongoDB\\Driver\\Command $command ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\Query $zquery ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:mongodb> final public method executeBulkWrite ] {

      - Parameters [3] {
        Parameter #0 [ <required> $namespace ]
        Parameter #1 [ <required> MongoDB\\Driver\\BulkWrite $zbulk ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:mongodb> final public method getReadConcern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getServers ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getWriteConcern ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method selectServer ] {

      - Parameters [1] {
        Parameter #0 [ <required> MongoDB\\Driver\\ReadPreference $readPreference ]
      }
    }

    Method [ <internal:mongodb> final public method startSession ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $options ]
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
