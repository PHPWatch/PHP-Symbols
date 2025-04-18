<?php

return array (
  'type' => 'interface',
  'name' => 'SplObserver',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'SplObserver',
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
        'name' => 'SplObserver interface (php.net)',
        'url' => 'https://www.php.net/manual/class.splobserver.php',
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
    'update' => 
    array (
      'name' => 'update',
      'class' => 'SplObserver',
      'parameters' => 
      array (
        'subject' => 
        array (
          'position' => 0,
          'name' => 'subject',
          'type' => 'SplSubject',
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
  'toString' => 'Interface [ <internal:SPL> interface SplObserver ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <internal:SPL> abstract public method update ] {

      - Parameters [1] {
        Parameter #0 [ <required> SplSubject $subject ]
      }
    }
  }
}
',
);
