<?php

return array (
  'type' => 'class',
  'name' => 'Closure',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Closure',
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
        'name' => 'Closure class (php.net)',
        'url' => 'https://www.php.net/manual/class.closure.php',
      ),
    ),
  ),
  'modifiers' => 32,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Closure',
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
    'bind' => 
    array (
      'name' => 'bind',
      'class' => 'Closure',
      'parameters' => 
      array (
        'closure' => 
        array (
          'position' => 0,
          'name' => 'closure',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newthis' => 
        array (
          'position' => 1,
          'name' => 'newthis',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newscope' => 
        array (
          'position' => 2,
          'name' => 'newscope',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bindTo' => 
    array (
      'name' => 'bindTo',
      'class' => 'Closure',
      'parameters' => 
      array (
        'newthis' => 
        array (
          'position' => 0,
          'name' => 'newthis',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newscope' => 
        array (
          'position' => 1,
          'name' => 'newscope',
          'type' => NULL,
          'is_optional' => true,
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
    'call' => 
    array (
      'name' => 'call',
      'class' => 'Closure',
      'parameters' => 
      array (
        'newthis' => 
        array (
          'position' => 0,
          'name' => 'newthis',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'parameters' => 
        array (
          'position' => 1,
          'name' => 'parameters',
          'type' => NULL,
          'is_optional' => true,
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
    'fromCallable' => 
    array (
      'name' => 'fromCallable',
      'class' => 'Closure',
      'parameters' => 
      array (
        'callable' => 
        array (
          'position' => 0,
          'name' => 'callable',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__invoke' => 
    array (
      'name' => '__invoke',
      'class' => 'Closure',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> final class Closure ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:Core> static public method bind ] {

      - Parameters [3] {
        Parameter #0 [ <required> $closure ]
        Parameter #1 [ <required> $newthis ]
        Parameter #2 [ <optional> $newscope ]
      }
    }

    Method [ <internal:Core> static public method fromCallable ] {

      - Parameters [1] {
        Parameter #0 [ <required> $callable ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:Core, ctor> private method __construct ] {
    }

    Method [ <internal:Core> public method bindTo ] {

      - Parameters [2] {
        Parameter #0 [ <required> $newthis ]
        Parameter #1 [ <optional> $newscope ]
      }
    }

    Method [ <internal:Core> public method call ] {

      - Parameters [2] {
        Parameter #0 [ <required> $newthis ]
        Parameter #1 [ <optional> ...$parameters ]
      }
    }
  }
}
',
);
