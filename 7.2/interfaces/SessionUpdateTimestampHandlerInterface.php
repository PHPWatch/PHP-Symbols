<?php

return array (
  'type' => 'interface',
  'name' => 'SessionUpdateTimestampHandlerInterface',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'SessionUpdateTimestampHandlerInterface',
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
        'name' => 'SessionUpdateTimestampHandlerInterface interface (php.net)',
        'url' => 'https://www.php.net/manual/class.sessionupdatetimestamphandlerinterface.php',
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
    'validateId' => 
    array (
      'name' => 'validateId',
      'class' => 'SessionUpdateTimestampHandlerInterface',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
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
    'updateTimestamp' => 
    array (
      'name' => 'updateTimestamp',
      'class' => 'SessionUpdateTimestampHandlerInterface',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'val' => 
        array (
          'position' => 1,
          'name' => 'val',
          'type' => NULL,
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'session',
  'toString' => 'Interface [ <internal:session> interface SessionUpdateTimestampHandlerInterface ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:session> abstract public method validateId ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:session> abstract public method updateTimestamp ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $val ]
      }
    }
  }
}
',
);
