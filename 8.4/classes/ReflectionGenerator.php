<?php

return array (
  'type' => 'class',
  'name' => 'ReflectionGenerator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ReflectionGenerator',
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
        'name' => 'ReflectionGenerator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.reflectiongenerator.php',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ReflectionGenerator',
      'parameters' => 
      array (
        'generator' => 
        array (
          'position' => 0,
          'name' => 'generator',
          'type' => 'Generator',
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
    'getExecutingLine' => 
    array (
      'name' => 'getExecutingLine',
      'class' => 'ReflectionGenerator',
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
    'getExecutingFile' => 
    array (
      'name' => 'getExecutingFile',
      'class' => 'ReflectionGenerator',
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
    'getTrace' => 
    array (
      'name' => 'getTrace',
      'class' => 'ReflectionGenerator',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'DEBUG_BACKTRACE_PROVIDE_OBJECT',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFunction' => 
    array (
      'name' => 'getFunction',
      'class' => 'ReflectionGenerator',
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
    'getThis' => 
    array (
      'name' => 'getThis',
      'class' => 'ReflectionGenerator',
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
    'getExecutingGenerator' => 
    array (
      'name' => 'getExecutingGenerator',
      'class' => 'ReflectionGenerator',
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
    'isClosed' => 
    array (
      'name' => 'isClosed',
      'class' => 'ReflectionGenerator',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> final class ReflectionGenerator ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [8] {
    Method [ <internal:Reflection, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> Generator $generator ]
      }
    }

    Method [ <internal:Reflection> public method getExecutingLine ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:Reflection> public method getExecutingFile ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:Reflection> public method getTrace ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT ]
      }
      - Tentative return [ array ]
    }

    Method [ <internal:Reflection> public method getFunction ] {

      - Parameters [0] {
      }
      - Tentative return [ ReflectionFunctionAbstract ]
    }

    Method [ <internal:Reflection> public method getThis ] {

      - Parameters [0] {
      }
      - Tentative return [ ?object ]
    }

    Method [ <internal:Reflection> public method getExecutingGenerator ] {

      - Parameters [0] {
      }
      - Tentative return [ Generator ]
    }

    Method [ <internal:Reflection> public method isClosed ] {

      - Parameters [0] {
      }
      - Return [ bool ]
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
