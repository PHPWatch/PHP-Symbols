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
  'modifiers' => 0,
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
    0 => 'Stringable',
    1 => 'Reflector',
  ),
  'constants' => 
  array (
    'IS_STATIC' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int IS_STATIC ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'IS_READONLY' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int IS_READONLY ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'IS_PUBLIC' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int IS_PUBLIC ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'IS_PROTECTED' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int IS_PROTECTED ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'IS_PRIVATE' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int IS_PRIVATE ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ReflectionProperty',
      'type' => 'string',
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
      'type' => 'string',
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
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
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
          'type' => 'object|string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'property' => 
        array (
          'position' => 1,
          'name' => 'property',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'ReflectionProperty',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'ReflectionProperty',
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
          'type' => '?object',
          'is_optional' => true,
          'has_default_value' => true,
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
    'setValue' => 
    array (
      'name' => 'setValue',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'objectOrValue' => 
        array (
          'position' => 0,
          'name' => 'objectOrValue',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'mixed',
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
    'isInitialized' => 
    array (
      'name' => 'isInitialized',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => '?object',
          'is_optional' => true,
          'has_default_value' => true,
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
    'isPublic' => 
    array (
      'name' => 'isPublic',
      'class' => 'ReflectionProperty',
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
    'isPrivate' => 
    array (
      'name' => 'isPrivate',
      'class' => 'ReflectionProperty',
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
    'isProtected' => 
    array (
      'name' => 'isProtected',
      'class' => 'ReflectionProperty',
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
    'isStatic' => 
    array (
      'name' => 'isStatic',
      'class' => 'ReflectionProperty',
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
    'isReadOnly' => 
    array (
      'name' => 'isReadOnly',
      'class' => 'ReflectionProperty',
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
    'isDefault' => 
    array (
      'name' => 'isDefault',
      'class' => 'ReflectionProperty',
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
    'isPromoted' => 
    array (
      'name' => 'isPromoted',
      'class' => 'ReflectionProperty',
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
    'getModifiers' => 
    array (
      'name' => 'getModifiers',
      'class' => 'ReflectionProperty',
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
    'getDeclaringClass' => 
    array (
      'name' => 'getDeclaringClass',
      'class' => 'ReflectionProperty',
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
    'getDocComment' => 
    array (
      'name' => 'getDocComment',
      'class' => 'ReflectionProperty',
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
    'setAccessible' => 
    array (
      'name' => 'setAccessible',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'accessible' => 
        array (
          'position' => 0,
          'name' => 'accessible',
          'type' => 'bool',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'ReflectionProperty',
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
    'hasType' => 
    array (
      'name' => 'hasType',
      'class' => 'ReflectionProperty',
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
    'hasDefaultValue' => 
    array (
      'name' => 'hasDefaultValue',
      'class' => 'ReflectionProperty',
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
    'getDefaultValue' => 
    array (
      'name' => 'getDefaultValue',
      'class' => 'ReflectionProperty',
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
    'getAttributes' => 
    array (
      'name' => 'getAttributes',
      'class' => 'ReflectionProperty',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> class ReflectionProperty implements Stringable, Reflector ] {

  - Constants [5] {
    Constant [ public int IS_STATIC ] { 16 }
    Constant [ public int IS_READONLY ] { 128 }
    Constant [ public int IS_PUBLIC ] { 1 }
    Constant [ public int IS_PROTECTED ] { 2 }
    Constant [ public int IS_PRIVATE ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ public string $name ]
    Property [ public string $class ]
  }

  - Methods [23] {
    Method [ <internal:Reflection> private method __clone ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Reflection, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> object|string $class ]
        Parameter #1 [ <required> string $property ]
      }
    }

    Method [ <internal:Reflection, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Reflection> public method getName ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:Reflection> public method getValue ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?object $object = null ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:Reflection> public method setValue ] {

      - Parameters [2] {
        Parameter #0 [ <required> mixed $objectOrValue ]
        Parameter #1 [ <optional> mixed $value = <default> ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:Reflection> public method isInitialized ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?object $object = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isPublic ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isPrivate ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isProtected ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isStatic ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isReadOnly ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Reflection> public method isDefault ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method isPromoted ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Reflection> public method getModifiers ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:Reflection> public method getDeclaringClass ] {

      - Parameters [0] {
      }
      - Tentative return [ ReflectionClass ]
    }

    Method [ <internal:Reflection> public method getDocComment ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:Reflection> public method setAccessible ] {

      - Parameters [1] {
        Parameter #0 [ <required> bool $accessible ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:Reflection> public method getType ] {

      - Parameters [0] {
      }
      - Tentative return [ ?ReflectionType ]
    }

    Method [ <internal:Reflection> public method hasType ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:Reflection> public method hasDefaultValue ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Reflection> public method getDefaultValue ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:Reflection> public method getAttributes ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $name = null ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Return [ array ]
    }
  }
}
',
);
