<?php

return array (
  'type' => 'class',
  'name' => 'Io\\Poll\\Watcher',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Io\\Poll\\Watcher',
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
        'name' => 'Io\\Poll\\Watcher interface (php.net)',
        'url' => 'https://www.php.net/manual/class.io-poll-watcher.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Io\\Poll',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Io\\Poll\\Watcher',
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
    'getHandle' => 
    array (
      'name' => 'getHandle',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
      ),
      'return_type' => 'Io\\Poll\\Handle',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getWatchedEvents' => 
    array (
      'name' => 'getWatchedEvents',
      'class' => 'Io\\Poll\\Watcher',
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
    'getTriggeredEvents' => 
    array (
      'name' => 'getTriggeredEvents',
      'class' => 'Io\\Poll\\Watcher',
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
    'getData' => 
    array (
      'name' => 'getData',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasTriggered' => 
    array (
      'name' => 'hasTriggered',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
        'event' => 
        array (
          'position' => 0,
          'name' => 'event',
          'type' => 'Io\\Poll\\Event',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isActive' => 
    array (
      'name' => 'isActive',
      'class' => 'Io\\Poll\\Watcher',
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
    'modify' => 
    array (
      'name' => 'modify',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
        'events' => 
        array (
          'position' => 0,
          'name' => 'events',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 1,
          'name' => 'data',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
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
    'modifyEvents' => 
    array (
      'name' => 'modifyEvents',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
        'events' => 
        array (
          'position' => 0,
          'name' => 'events',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
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
    'modifyData' => 
    array (
      'name' => 'modifyData',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'Io\\Poll\\Watcher',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'standard',
  'toString' => 'Class [ <internal:standard> final class Io\\Poll\\Watcher ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [11] {
    Method [ <internal:standard, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:standard> public method getHandle ] {

      - Parameters [0] {
      }
      - Return [ Io\\Poll\\Handle ]
    }

    Method [ <internal:standard> public method getWatchedEvents ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:standard> public method getTriggeredEvents ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:standard> public method getData ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:standard> public method hasTriggered ] {

      - Parameters [1] {
        Parameter #0 [ <required> Io\\Poll\\Event $event ]
      }
      - Return [ bool ]
    }

    Method [ <internal:standard> public method isActive ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:standard> public method modify ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $events ]
        Parameter #1 [ <optional> mixed $data = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:standard> public method modifyEvents ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $events ]
      }
      - Return [ void ]
    }

    Method [ <internal:standard> public method modifyData ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:standard> public method remove ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
  'modifiers' => 32,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => false,
  'is_read_only' => false,
);
