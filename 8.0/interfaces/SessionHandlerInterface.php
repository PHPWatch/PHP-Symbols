<?php

return array (
  'type' => 'interface',
  'name' => 'SessionHandlerInterface',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'SessionHandlerInterface',
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
        'name' => 'SessionHandlerInterface interface (php.net)',
        'url' => 'https://www.php.net/manual/class.sessionhandlerinterface.php',
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
    'open' => 
    array (
      'name' => 'open',
      'class' => 'SessionHandlerInterface',
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
      'class' => 'SessionHandlerInterface',
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
      'class' => 'SessionHandlerInterface',
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
      'class' => 'SessionHandlerInterface',
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
      'class' => 'SessionHandlerInterface',
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
      'class' => 'SessionHandlerInterface',
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
  ),
  'extension' => 'session',
  'toString' => 'Interface [ <internal:session> interface SessionHandlerInterface ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:session> abstract public method open ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $path ]
        Parameter #1 [ <required> string $name ]
      }
    }

    Method [ <internal:session> abstract public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:session> abstract public method read ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $id ]
      }
    }

    Method [ <internal:session> abstract public method write ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $id ]
        Parameter #1 [ <required> string $data ]
      }
    }

    Method [ <internal:session> abstract public method destroy ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $id ]
      }
    }

    Method [ <internal:session> abstract public method gc ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $max_lifetime ]
      }
    }
  }
}
',
);
