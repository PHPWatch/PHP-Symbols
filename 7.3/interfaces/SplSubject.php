<?php

return array (
  'type' => 'interface',
  'name' => 'SplSubject',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'SplSubject',
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
        'name' => 'SplSubject interface (php.net)',
        'url' => 'https://www.php.net/manual/class.splsubject.php',
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
    'attach' => 
    array (
      'name' => 'attach',
      'class' => 'SplSubject',
      'parameters' => 
      array (
        'SplObserver' => 
        array (
          'position' => 0,
          'name' => 'SplObserver',
          'type' => 'SplObserver',
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
    'detach' => 
    array (
      'name' => 'detach',
      'class' => 'SplSubject',
      'parameters' => 
      array (
        'SplObserver' => 
        array (
          'position' => 0,
          'name' => 'SplObserver',
          'type' => 'SplObserver',
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
    'notify' => 
    array (
      'name' => 'notify',
      'class' => 'SplSubject',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'SPL',
  'toString' => 'Interface [ <internal:SPL> interface SplSubject ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:SPL> abstract public method attach ] {

      - Parameters [1] {
        Parameter #0 [ <required> SplObserver $SplObserver ]
      }
    }

    Method [ <internal:SPL> abstract public method detach ] {

      - Parameters [1] {
        Parameter #0 [ <required> SplObserver $SplObserver ]
      }
    }

    Method [ <internal:SPL> abstract public method notify ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
