<?php

return array (
  'type' => 'interface',
  'name' => 'MongoCursorInterface',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoCursorInterface',
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
        'name' => 'MongoCursorInterface interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongocursorinterface.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'batchSize' => 
    array (
      'name' => 'batchSize',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
        'number' => 
        array (
          'position' => 0,
          'name' => 'number',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'info' => 
    array (
      'name' => 'info',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'dead' => 
    array (
      'name' => 'dead',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'timeout' => 
    array (
      'name' => 'timeout',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
        'timeoutMS' => 
        array (
          'position' => 0,
          'name' => 'timeoutMS',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getReadPreference' => 
    array (
      'name' => 'getReadPreference',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setReadPreference' => 
    array (
      'name' => 'setReadPreference',
      'class' => 'MongoCursorInterface',
      'parameters' => 
      array (
        'read_preference' => 
        array (
          'position' => 0,
          'name' => 'read_preference',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tags' => 
        array (
          'position' => 1,
          'name' => 'tags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'Iterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'Iterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'key' => 
    array (
      'name' => 'key',
      'class' => 'Iterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'Iterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'Iterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'toString' => 'Interface [ <internal:mongo> interface MongoCursorInterface extends Iterator, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [11] {
    Method [ <internal:mongo> abstract public method batchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $number ]
      }
    }

    Method [ <internal:mongo> abstract public method info ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> abstract public method dead ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> abstract public method timeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeoutMS ]
      }
    }

    Method [ <internal:mongo> abstract public method getReadPreference ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongo> abstract public method setReadPreference ] {

      - Parameters [2] {
        Parameter #0 [ <required> $read_preference ]
        Parameter #1 [ <optional> array $tags ]
      }
    }

    Method [ <internal:Core, inherits Iterator> abstract public method current ] {
    }

    Method [ <internal:Core, inherits Iterator> abstract public method next ] {
    }

    Method [ <internal:Core, inherits Iterator> abstract public method key ] {
    }

    Method [ <internal:Core, inherits Iterator> abstract public method valid ] {
    }

    Method [ <internal:Core, inherits Iterator> abstract public method rewind ] {
    }
  }
}
',
);
