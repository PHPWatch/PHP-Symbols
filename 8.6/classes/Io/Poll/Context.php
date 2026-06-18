<?php

return array (
  'type' => 'class',
  'name' => 'Io\\Poll\\Context',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Io\\Poll\\Context',
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
        'name' => 'Io\\Poll\\Context interface (php.net)',
        'url' => 'https://www.php.net/manual/class.io-poll-context.php',
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
      'class' => 'Io\\Poll\\Context',
      'parameters' => 
      array (
        'backend' => 
        array (
          'position' => 0,
          'name' => 'backend',
          'type' => 'Io\\Poll\\Backend',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Io\\Poll\\Backend::Auto',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'add' => 
    array (
      'name' => 'add',
      'class' => 'Io\\Poll\\Context',
      'parameters' => 
      array (
        'handle' => 
        array (
          'position' => 0,
          'name' => 'handle',
          'type' => 'Io\\Poll\\Handle',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'events' => 
        array (
          'position' => 1,
          'name' => 'events',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 2,
          'name' => 'data',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Io\\Poll\\Watcher',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'wait' => 
    array (
      'name' => 'wait',
      'class' => 'Io\\Poll\\Context',
      'parameters' => 
      array (
        'timeoutSeconds' => 
        array (
          'position' => 0,
          'name' => 'timeoutSeconds',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeoutMicroseconds' => 
        array (
          'position' => 1,
          'name' => 'timeoutMicroseconds',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'maxEvents' => 
        array (
          'position' => 2,
          'name' => 'maxEvents',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBackend' => 
    array (
      'name' => 'getBackend',
      'class' => 'Io\\Poll\\Context',
      'parameters' => 
      array (
      ),
      'return_type' => 'Io\\Poll\\Backend',
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
  'toString' => 'Class [ <internal:standard> final class Io\\Poll\\Context ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:standard, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Io\\Poll\\Backend $backend = Io\\Poll\\Backend::Auto ]
      }
    }

    Method [ <internal:standard> public method add ] {

      - Parameters [3] {
        Parameter #0 [ <required> Io\\Poll\\Handle $handle ]
        Parameter #1 [ <required> array $events ]
        Parameter #2 [ <optional> mixed $data = null ]
      }
      - Return [ Io\\Poll\\Watcher ]
    }

    Method [ <internal:standard> public method wait ] {

      - Parameters [3] {
        Parameter #0 [ <optional> ?int $timeoutSeconds = null ]
        Parameter #1 [ <optional> int $timeoutMicroseconds = 0 ]
        Parameter #2 [ <optional> ?int $maxEvents = null ]
      }
      - Return [ array ]
    }

    Method [ <internal:standard> public method getBackend ] {

      - Parameters [0] {
      }
      - Return [ Io\\Poll\\Backend ]
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => false,
);
