<?php

return array (
  'type' => 'class',
  'name' => 'ReflectionProperty',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ReflectionProperty',
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
        'name' => 'ReflectionProperty class (php.net)',
        'url' => 'https://www.php.net/manual/class.reflectionproperty.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Reflector',
  ),
  'constants' => 
  array (
    'IS_STATIC' => 1,
    'IS_PUBLIC' => 256,
    'IS_PROTECTED' => 512,
    'IS_PRIVATE' => 1024,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ReflectionProperty',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'class' => 
    array (
      'name' => 'class',
      'class' => 'ReflectionProperty',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__clone' => 
    array (
      'name' => '__clone',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'export' => 
    array (
      'name' => 'export',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'return' => 
        array (
          'position' => 2,
          'name' => 'return',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'ReflectionProperty',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'ReflectionProperty',
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
    'getValue' => 
    array (
      'name' => 'getValue',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
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
    'setValue' => 
    array (
      'name' => 'setValue',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
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
    'isPublic' => 
    array (
      'name' => 'isPublic',
      'class' => 'ReflectionProperty',
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
    'isPrivate' => 
    array (
      'name' => 'isPrivate',
      'class' => 'ReflectionProperty',
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
    'isProtected' => 
    array (
      'name' => 'isProtected',
      'class' => 'ReflectionProperty',
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
    'isStatic' => 
    array (
      'name' => 'isStatic',
      'class' => 'ReflectionProperty',
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
    'isDefault' => 
    array (
      'name' => 'isDefault',
      'class' => 'ReflectionProperty',
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
    'getModifiers' => 
    array (
      'name' => 'getModifiers',
      'class' => 'ReflectionProperty',
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
    'getDeclaringClass' => 
    array (
      'name' => 'getDeclaringClass',
      'class' => 'ReflectionProperty',
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
    'getDocComment' => 
    array (
      'name' => 'getDocComment',
      'class' => 'ReflectionProperty',
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
    'setAccessible' => 
    array (
      'name' => 'setAccessible',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'visible' => 
        array (
          'position' => 0,
          'name' => 'visible',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:Reflection> class ReflectionProperty implements Reflector ] {

  - Constants [4] {
    Constant [ integer IS_STATIC ] { 1 }
    Constant [ integer IS_PUBLIC ] { 256 }
    Constant [ integer IS_PROTECTED ] { 512 }
    Constant [ integer IS_PRIVATE ] { 1024 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:Reflection> static public method export ] {

      - Parameters [3] {
        Parameter #0 [ <required> $class ]
        Parameter #1 [ <required> $name ]
        Parameter #2 [ <optional> $return ]
      }
    }
  }

  - Properties [2] {
    Property [ <default> public $name ]
    Property [ <default> public $class ]
  }

  - Methods [15] {
    Method [ <internal:Reflection> final private method __clone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $class ]
        Parameter #1 [ <required> $name ]
      }
    }

    Method [ <internal:Reflection> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method getName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method getValue ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $object ]
      }
    }

    Method [ <internal:Reflection> public method setValue ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object ]
        Parameter #1 [ <optional> $value ]
      }
    }

    Method [ <internal:Reflection> public method isPublic ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method isPrivate ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method isProtected ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method isStatic ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method isDefault ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method getModifiers ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method getDeclaringClass ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method getDocComment ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Reflection> public method setAccessible ] {

      - Parameters [1] {
        Parameter #0 [ <required> $visible ]
      }
    }
  }
}
',
);
