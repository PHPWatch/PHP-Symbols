<?php

return array (
  'type' => 'class',
  'name' => 'Generator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Generator',
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
        'name' => 'Generator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.generator.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'Generator',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'Generator',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'Generator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'Generator',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'Generator',
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
    'send' => 
    array (
      'name' => 'send',
      'class' => 'Generator',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'throw' => 
    array (
      'name' => 'throw',
      'class' => 'Generator',
      'parameters' => 
      array (
        'exception' => 
        array (
          'position' => 0,
          'name' => 'exception',
          'type' => 'Throwable',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getReturn' => 
    array (
      'name' => 'getReturn',
      'class' => 'Generator',
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'Generator',
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
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> <iterateable> final class Generator implements Iterator, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:Core, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Core, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Core, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Core> public method send ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $value ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method throw ] {

      - Parameters [1] {
        Parameter #0 [ <required> Throwable $exception ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method getReturn ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Return [ array ]
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
