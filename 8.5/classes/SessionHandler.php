<?php

return array (
  'type' => 'class',
  'name' => 'SessionHandler',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SessionHandler',
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
        'name' => 'SessionHandler class (php.net)',
        'url' => 'https://www.php.net/manual/class.sessionhandler.php',
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
    0 => 'SessionHandlerInterface',
    1 => 'SessionIdInterface',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'open' => 
    array (
      'name' => 'open',
      'class' => 'SessionHandler',
      'parameters' => 
      array (
        'path' => 
        array (
          'position' => 0,
          'name' => 'path',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'SessionHandler',
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
      'class' => 'SessionHandler',
      'parameters' => 
      array (
        'id' => 
        array (
          'position' => 0,
          'name' => 'id',
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
    'write' => 
    array (
      'name' => 'write',
      'class' => 'SessionHandler',
      'parameters' => 
      array (
        'id' => 
        array (
          'position' => 0,
          'name' => 'id',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 1,
          'name' => 'data',
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
    'destroy' => 
    array (
      'name' => 'destroy',
      'class' => 'SessionHandler',
      'parameters' => 
      array (
        'id' => 
        array (
          'position' => 0,
          'name' => 'id',
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
    'gc' => 
    array (
      'name' => 'gc',
      'class' => 'SessionHandler',
      'parameters' => 
      array (
        'max_lifetime' => 
        array (
          'position' => 0,
          'name' => 'max_lifetime',
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
    'create_sid' => 
    array (
      'name' => 'create_sid',
      'class' => 'SessionHandler',
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
  'extension' => 'session',
  'toString' => 'Class [ <internal:session> class SessionHandler implements SessionHandlerInterface, SessionIdInterface ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:session, prototype SessionHandlerInterface> public method open ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $path ]
        Parameter #1 [ <required> string $name ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:session, prototype SessionHandlerInterface> public method close ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:session, prototype SessionHandlerInterface> public method read ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $id ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:session, prototype SessionHandlerInterface> public method write ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $id ]
        Parameter #1 [ <required> string $data ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:session, prototype SessionHandlerInterface> public method destroy ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $id ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:session, prototype SessionHandlerInterface> public method gc ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $max_lifetime ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:session, prototype SessionIdInterface> public method create_sid ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }
  }
}
',
);
