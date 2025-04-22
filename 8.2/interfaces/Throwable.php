<?php

return array (
  'type' => 'interface',
  'name' => 'Throwable',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'Throwable',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '7.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Throwable class (php.net)',
        'url' => 'https://www.php.net/manual/en/class.throwable.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getMessage' => 
    array (
      'name' => 'getMessage',
      'class' => 'Throwable',
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
    'getCode' => 
    array (
      'name' => 'getCode',
      'class' => 'Throwable',
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
    'getFile' => 
    array (
      'name' => 'getFile',
      'class' => 'Throwable',
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
    'getLine' => 
    array (
      'name' => 'getLine',
      'class' => 'Throwable',
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
    'getTrace' => 
    array (
      'name' => 'getTrace',
      'class' => 'Throwable',
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
    'getPrevious' => 
    array (
      'name' => 'getPrevious',
      'class' => 'Throwable',
      'parameters' => 
      array (
      ),
      'return_type' => '?Throwable',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTraceAsString' => 
    array (
      'name' => 'getTraceAsString',
      'class' => 'Throwable',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'Stringable',
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
  ),
  'extension' => 'Core',
  'toString' => 'Interface [ <internal:Core> interface Throwable extends Stringable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [8] {
    Method [ <internal:Core> abstract public method getMessage ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core> abstract public method getCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Core> abstract public method getFile ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core> abstract public method getLine ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:Core> abstract public method getTrace ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Core> abstract public method getPrevious ] {

      - Parameters [0] {
      }
      - Return [ ?Throwable ]
    }

    Method [ <internal:Core> abstract public method getTraceAsString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, inherits Stringable> abstract public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
);
