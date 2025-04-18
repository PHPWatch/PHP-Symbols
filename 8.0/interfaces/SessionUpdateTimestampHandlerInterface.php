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
    'validateId' => 
    array (
      'name' => 'validateId',
      'class' => 'SessionUpdateTimestampHandlerInterface',
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
    'updateTimestamp' => 
    array (
      'name' => 'updateTimestamp',
      'class' => 'SessionUpdateTimestampHandlerInterface',
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
  ),
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
        Parameter #0 [ <required> string $id ]
      }
    }

    Method [ <internal:session> abstract public method updateTimestamp ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $id ]
        Parameter #1 [ <required> string $data ]
      }
    }
  }
}
',
);
