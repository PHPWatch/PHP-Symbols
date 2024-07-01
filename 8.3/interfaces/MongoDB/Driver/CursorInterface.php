<?php

return array (
  'type' => 'interface',
  'name' => 'MongoDB\\Driver\\CursorInterface',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoDB\\Driver\\CursorInterface',
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
        'name' => 'MongoDB\\Driver\\CursorInterface interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-cursorinterface.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getId' => 
    array (
      'name' => 'getId',
      'class' => 'MongoDB\\Driver\\CursorInterface',
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
    'getServer' => 
    array (
      'name' => 'getServer',
      'class' => 'MongoDB\\Driver\\CursorInterface',
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
    'isDead' => 
    array (
      'name' => 'isDead',
      'class' => 'MongoDB\\Driver\\CursorInterface',
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
    'setTypeMap' => 
    array (
      'name' => 'setTypeMap',
      'class' => 'MongoDB\\Driver\\CursorInterface',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'MongoDB\\Driver\\CursorInterface',
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
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\Driver\\CursorInterface extends Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:mongodb> abstract public method getId ] {

      - Parameters [0] {
      }
      - Tentative return [ MongoDB\\Driver\\CursorId ]
    }

    Method [ <internal:mongodb> abstract public method getServer ] {

      - Parameters [0] {
      }
      - Tentative return [ MongoDB\\Driver\\Server ]
    }

    Method [ <internal:mongodb> abstract public method isDead ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:mongodb> abstract public method setTypeMap ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $typemap ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:mongodb> abstract public method toArray ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }
  }
}
',
);
