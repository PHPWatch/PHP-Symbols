<?php

return array (
  'type' => 'enum',
  'name' => 'Io\\Poll\\Backend',
  'meta' => 
  array (
    'type' => 'enum',
    'name' => 'Io\\Poll\\Backend',
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
        'name' => 'Io\\Poll\\Backend interface (php.net)',
        'url' => 'https://www.php.net/manual/class.io-poll-backend.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Io\\Poll',
  'constants' => 
  array (
    'Auto' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend Auto ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Poll' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend Poll ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Epoll' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend Epoll ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Kqueue' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend Kqueue ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'EventPorts' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend EventPorts ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'WSAPoll' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Backend WSAPoll ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
  ),
  'methods' => 
  array (
    'getAvailableBackends' => 
    array (
      'name' => 'getAvailableBackends',
      'class' => 'Io\\Poll\\Backend',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isAvailable' => 
    array (
      'name' => 'isAvailable',
      'class' => 'Io\\Poll\\Backend',
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
    'supportsEdgeTriggering' => 
    array (
      'name' => 'supportsEdgeTriggering',
      'class' => 'Io\\Poll\\Backend',
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
    'cases' => 
    array (
      'name' => 'cases',
      'class' => 'Io\\Poll\\Backend',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'Io\\Poll\\Backend',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'standard',
  'toString' => 'Enum [ <internal:standard> enum Io\\Poll\\Backend implements UnitEnum ] {

  - Enum cases [6] {
    Case Auto
    Case Poll
    Case Epoll
    Case Kqueue
    Case EventPorts
    Case WSAPoll
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:standard> static public method getAvailableBackends ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:standard, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }

  - Properties [1] {
    Property [ public protected(set) readonly string $name ]
  }

  - Methods [2] {
    Method [ <internal:standard> public method isAvailable ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:standard> public method supportsEdgeTriggering ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }
  }
}
',
  'modifiers' => 0,
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
  'is_final' => false,
  'is_instantiable' => false,
  'is_read_only' => false,
);
