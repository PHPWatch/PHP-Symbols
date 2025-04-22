<?php

return array (
  'type' => 'class',
  'name' => 'SoapServer',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SoapServer',
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
        'name' => 'SoapServer interface (php.net)',
        'url' => 'https://www.php.net/manual/class.soapserver.php',
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
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'wsdl' => 
        array (
          'position' => 0,
          'name' => 'wsdl',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
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
    'fault' => 
    array (
      'name' => 'fault',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'string' => 
        array (
          'position' => 1,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'actor' => 
        array (
          'position' => 2,
          'name' => 'actor',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'details' => 
        array (
          'position' => 3,
          'name' => 'details',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 4,
          'name' => 'name',
          'type' => 'string',
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
    'addSoapHeader' => 
    array (
      'name' => 'addSoapHeader',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'header' => 
        array (
          'position' => 0,
          'name' => 'header',
          'type' => 'SoapHeader',
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
    'setPersistence' => 
    array (
      'name' => 'setPersistence',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
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
    'setClass' => 
    array (
      'name' => 'setClass',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
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
    'setObject' => 
    array (
      'name' => 'setObject',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => 'object',
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
    'getFunctions' => 
    array (
      'name' => 'getFunctions',
      'class' => 'SoapServer',
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
    'addFunction' => 
    array (
      'name' => 'addFunction',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'functions' => 
        array (
          'position' => 0,
          'name' => 'functions',
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
    'handle' => 
    array (
      'name' => 'handle',
      'class' => 'SoapServer',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
          'type' => '?string',
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
    '__getLastResponse' => 
    array (
      'name' => '__getLastResponse',
      'class' => 'SoapServer',
      'parameters' => 
      array (
      ),
      'return_type' => '?string',
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
    '__soap_fault' => 
    array (
      'name' => '__soap_fault',
      'class' => 'SoapServer',
      'type' => '?SoapFault',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'soap',
  'toString' => 'Class [ <internal:soap> class SoapServer ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ private ?SoapFault $__soap_fault = NULL ]
  }

  - Methods [10] {
    Method [ <internal:soap, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $wsdl ]
        Parameter #1 [ <optional> array $options = [] ]
      }
    }

    Method [ <internal:soap> public method fault ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $code ]
        Parameter #1 [ <required> string $string ]
        Parameter #2 [ <optional> string $actor = "" ]
        Parameter #3 [ <optional> mixed $details = null ]
        Parameter #4 [ <optional> string $name = "" ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method addSoapHeader ] {

      - Parameters [1] {
        Parameter #0 [ <required> SoapHeader $header ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method setPersistence ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $mode ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method setClass ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $class ]
        Parameter #1 [ <optional> mixed ...$args ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method setObject ] {

      - Parameters [1] {
        Parameter #0 [ <required> object $object ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method getFunctions ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:soap> public method addFunction ] {

      - Parameters [1] {
        Parameter #0 [ <required> $functions ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method handle ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $request = null ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:soap> public method __getLastResponse ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    '__soap_fault' => NULL,
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
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
