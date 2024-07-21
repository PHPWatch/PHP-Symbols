<?php

return array (
  'type' => 'class',
  'name' => '_ZendTestClass',
  'meta' => 
  array (
    'type' => 'class',
    'name' => '_ZendTestClass',
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
        'name' => '_ZendTestClass class (php.net)',
        'url' => 'https://www.php.net/manual/class._zendtestclass.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => '_ZendTestInterface',
  ),
  'constants' => 
  array (
    'DUMMY' => 0,
    'TYPED_CLASS_CONST1' => 
    array (
    ),
    'TYPED_CLASS_CONST2' => 42,
    'TYPED_CLASS_CONST3' => 1,
    'ZEND_TEST_DEPRECATED' => 42,
    'ZEND_TEST_DEPRECATED_ATTR' => 42,
  ),
  'properties' => 
  array (
    '_StaticProp' => 
    array (
      'name' => '_StaticProp',
      'class' => '_ZendTestClass',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'staticIntProp' => 
    array (
      'name' => 'staticIntProp',
      'class' => '_ZendTestClass',
      'type' => 'int',
      'has_default_value' => true,
      'default_value' => 123,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'intProp' => 
    array (
      'name' => 'intProp',
      'class' => '_ZendTestClass',
      'type' => 'int',
      'has_default_value' => true,
      'default_value' => 123,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'classProp' => 
    array (
      'name' => 'classProp',
      'class' => '_ZendTestClass',
      'type' => '?stdClass',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'classUnionProp' => 
    array (
      'name' => 'classUnionProp',
      'class' => '_ZendTestClass',
      'type' => 'stdClass|Iterator|null',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'classIntersectionProp' => 
    array (
      'name' => 'classIntersectionProp',
      'class' => '_ZendTestClass',
      'type' => 'Traversable&Countable',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'readonlyProp' => 
    array (
      'name' => 'readonlyProp',
      'class' => '_ZendTestClass',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'dnfProperty' => 
    array (
      'name' => 'dnfProperty',
      'class' => '_ZendTestClass',
      'type' => 'Iterator|(Traversable&Countable)',
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
    'is_object' => 
    array (
      'name' => 'is_object',
      'class' => '_ZendTestClass',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => '_ZendTestClass',
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
    'returnsStatic' => 
    array (
      'name' => 'returnsStatic',
      'class' => '_ZendTestClass',
      'parameters' => 
      array (
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'returnsThrowable' => 
    array (
      'name' => 'returnsThrowable',
      'class' => '_ZendTestClass',
      'parameters' => 
      array (
      ),
      'return_type' => 'Throwable',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'variadicTest' => 
    array (
      'name' => 'variadicTest',
      'class' => '_ZendTestClass',
      'parameters' => 
      array (
        'elements' => 
        array (
          'position' => 0,
          'name' => 'elements',
          'type' => 'Iterator|string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'takesUnionType' => 
    array (
      'name' => 'takesUnionType',
      'class' => '_ZendTestClass',
      'parameters' => 
      array (
        'arg' => 
        array (
          'position' => 0,
          'name' => 'arg',
          'type' => 'stdclass|Iterator',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zend_test> class _ZendTestClass implements Stringable, _ZendTestInterface ] {

  - Constants [6] {
    /**
         * "Lorem ipsum"
         * @see https://www.php.net
         * @since 8.2
         */
    Constant [ public int DUMMY ] { 0 }
    Constant [ public mixed TYPED_CLASS_CONST1 ] { Array }
    Constant [ public array|int TYPED_CLASS_CONST2 ] { 42 }
    Constant [ public string|int TYPED_CLASS_CONST3 ] { 1 }
    Constant [ public int ZEND_TEST_DEPRECATED ] { 42 }
    Constant [ public int ZEND_TEST_DEPRECATED_ATTR ] { 42 }
  }

  - Static properties [2] {
    Property [ public static $_StaticProp = NULL ]
    Property [ public static int $staticIntProp = 123 ]
  }

  - Static methods [2] {
    Method [ <internal:zend_test> static public method is_object ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:zend_test> static public method variadicTest ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Iterator|string ...$elements ]
      }
      - Return [ static ]
    }
  }

  - Properties [6] {
    Property [ public int $intProp = 123 ]
    Property [ public ?stdClass $classProp = NULL ]
    Property [ public stdClass|Iterator|null $classUnionProp = NULL ]
    Property [ public Traversable&Countable $classIntersectionProp ]
    Property [ public readonly int $readonlyProp ]
    Property [ public Iterator|(Traversable&Countable) $dnfProperty ]
  }

  - Methods [4] {
    Method [ <internal, deprecated:zend_test, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:zend_test> public method returnsStatic ] {

      - Parameters [0] {
      }
      - Return [ static ]
    }

    Method [ <internal:zend_test> public method returnsThrowable ] {

      - Parameters [0] {
      }
      - Return [ Throwable ]
    }

    Method [ <internal:zend_test> public method takesUnionType ] {

      - Parameters [1] {
        Parameter #0 [ <required> stdclass|Iterator $arg ]
      }
      - Return [ void ]
    }
  }
}
',
);
