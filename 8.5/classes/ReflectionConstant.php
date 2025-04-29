<?php

return array (
  'type' => 'class',
  'name' => 'ReflectionConstant',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ReflectionConstant',
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
        'name' => 'ReflectionConstant interface (php.net)',
        'url' => 'https://www.php.net/manual/class.reflectionconstant.php',
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
      'class' => 'ReflectionConstant',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'ReflectionConstant',
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
    'getNamespaceName' => 
    array (
      'name' => 'getNamespaceName',
      'class' => 'ReflectionConstant',
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
    'getShortName' => 
    array (
      'name' => 'getShortName',
      'class' => 'ReflectionConstant',
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
    'getValue' => 
    array (
      'name' => 'getValue',
      'class' => 'ReflectionConstant',
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
    'isDeprecated' => 
    array (
      'name' => 'isDeprecated',
      'class' => 'ReflectionConstant',
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
    'getFileName' => 
    array (
      'name' => 'getFileName',
      'class' => 'ReflectionConstant',
      'parameters' => 
      array (
      ),
      'return_type' => 'string|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getExtension' => 
    array (
      'name' => 'getExtension',
      'class' => 'ReflectionConstant',
      'parameters' => 
      array (
      ),
      'return_type' => '?ReflectionExtension',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getExtensionName' => 
    array (
      'name' => 'getExtensionName',
      'class' => 'ReflectionConstant',
      'parameters' => 
      array (
      ),
      'return_type' => 'string|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'ReflectionConstant',
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
    'getAttributes' => 
    array (
      'name' => 'getAttributes',
      'class' => 'ReflectionConstant',
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
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => 'Reflector',
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ReflectionConstant',
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
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> final class ReflectionConstant implements Stringable, Reflector ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public string $name ]
  }

  - Methods [11] {
    Method [ <internal:Reflection, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
    }

    Method [ <internal:Reflection> public method getName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Reflection> public method getNamespaceName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Reflection> public method getShortName ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Reflection> public method getValue ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:Reflection> public method isDeprecated ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Reflection> public method getFileName ] {

      - Parameters [0] {
      }
      - Return [ string|false ]
    }

    Method [ <internal:Reflection> public method getExtension ] {

      - Parameters [0] {
      }
      - Return [ ?ReflectionExtension ]
    }

    Method [ <internal:Reflection> public method getExtensionName ] {

      - Parameters [0] {
      }
      - Return [ string|false ]
    }

    Method [ <internal:Reflection, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
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
