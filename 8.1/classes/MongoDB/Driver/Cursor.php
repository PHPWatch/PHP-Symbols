<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\Cursor',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\Cursor',
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
        'name' => 'MongoDB\\Driver\\Cursor class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-cursor.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'MongoDB\\Driver\\CursorInterface',
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
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'MongoDB\\Driver\\Cursor',
      'parameters' => 
      array (
      ),
      'return_type' => 'object|array|null',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getId' => 
    array (
      'name' => 'getId',
      'class' => 'MongoDB\\Driver\\Cursor',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\CursorId',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getServer' => 
    array (
      'name' => 'getServer',
      'class' => 'MongoDB\\Driver\\Cursor',
      'parameters' => 
      array (
      ),
      'return_type' => 'MongoDB\\Driver\\Server',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isDead' => 
    array (
      'name' => 'isDead',
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'setTypeMap' => 
    array (
      'name' => 'setTypeMap',
      'class' => 'MongoDB\\Driver\\Cursor',
      'parameters' => 
      array (
        'typemap' => 
        array (
          'position' => 0,
          'name' => 'typemap',
          'type' => 'array',
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
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'MongoDB\\Driver\\Cursor',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'MongoDB\\Driver\\Cursor',
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
  'toString' => 'Class [ <internal:mongodb> <iterateable> final class MongoDB\\Driver\\Cursor implements Iterator, Traversable, MongoDB\\Driver\\CursorInterface ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [11] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Return [ object|array|null ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\Driver\\CursorInterface> final public method getId ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\CursorId ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\Driver\\CursorInterface> final public method getServer ] {

      - Parameters [0] {
      }
      - Return [ MongoDB\\Driver\\Server ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\Driver\\CursorInterface> final public method isDead ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:mongodb, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:mongodb, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\Driver\\CursorInterface> final public method setTypeMap ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $typemap ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\Driver\\CursorInterface> final public method toArray ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }
  }
}
',
);
