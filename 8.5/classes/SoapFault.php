<?php

return array (
  'type' => 'class',
  'name' => 'SoapFault',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SoapFault',
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
        'name' => 'SoapFault interface (php.net)',
        'url' => 'https://www.php.net/manual/class.soapfault.php',
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
      'class' => 'SoapFault',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => 'array|string|null',
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
          'type' => '?string',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'headerFault' => 
        array (
          'position' => 5,
          'name' => 'headerFault',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lang' => 
        array (
          'position' => 6,
          'name' => 'lang',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'SoapFault',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'Exception',
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
    'getMessage' => 
    array (
      'name' => 'getMessage',
      'class' => 'Exception',
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
    'getCode' => 
    array (
      'name' => 'getCode',
      'class' => 'Exception',
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
    'getFile' => 
    array (
      'name' => 'getFile',
      'class' => 'Exception',
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
    'getLine' => 
    array (
      'name' => 'getLine',
      'class' => 'Exception',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTrace' => 
    array (
      'name' => 'getTrace',
      'class' => 'Exception',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPrevious' => 
    array (
      'name' => 'getPrevious',
      'class' => 'Exception',
      'parameters' => 
      array (
      ),
      'return_type' => '?Throwable',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTraceAsString' => 
    array (
      'name' => 'getTraceAsString',
      'class' => 'Exception',
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
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => 'Throwable',
  ),
  'properties' => 
  array (
    'message' => 
    array (
      'name' => 'message',
      'class' => 'Exception',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'code' => 
    array (
      'name' => 'code',
      'class' => 'Exception',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => 0,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'file' => 
    array (
      'name' => 'file',
      'class' => 'Exception',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'line' => 
    array (
      'name' => 'line',
      'class' => 'Exception',
      'type' => 'int',
      'has_default_value' => true,
      'default_value' => 0,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'faultstring' => 
    array (
      'name' => 'faultstring',
      'class' => 'SoapFault',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'faultcode' => 
    array (
      'name' => 'faultcode',
      'class' => 'SoapFault',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'faultcodens' => 
    array (
      'name' => 'faultcodens',
      'class' => 'SoapFault',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'faultactor' => 
    array (
      'name' => 'faultactor',
      'class' => 'SoapFault',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'detail' => 
    array (
      'name' => 'detail',
      'class' => 'SoapFault',
      'type' => 'mixed',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    '_name' => 
    array (
      'name' => '_name',
      'class' => 'SoapFault',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'headerfault' => 
    array (
      'name' => 'headerfault',
      'class' => 'SoapFault',
      'type' => 'mixed',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lang' => 
    array (
      'name' => 'lang',
      'class' => 'SoapFault',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'soap',
  'toString' => 'Class [ <internal:soap> class SoapFault extends Exception implements Stringable, Throwable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [12] {
    Property [ protected $message = \'\' ]
    Property [ protected $code = 0 ]
    Property [ protected string $file = \'\' ]
    Property [ protected int $line = 0 ]
    Property [ public string $faultstring ]
    Property [ public ?string $faultcode = NULL ]
    Property [ public ?string $faultcodens = NULL ]
    Property [ public ?string $faultactor = NULL ]
    Property [ public mixed $detail = NULL ]
    Property [ public ?string $_name = NULL ]
    Property [ public mixed $headerfault = NULL ]
    Property [ public string $lang = \'\' ]
  }

  - Methods [10] {
    Method [ <internal:soap, overwrites Exception, ctor> public method __construct ] {

      - Parameters [7] {
        Parameter #0 [ <required> array|string|null $code ]
        Parameter #1 [ <required> string $string ]
        Parameter #2 [ <optional> ?string $actor = null ]
        Parameter #3 [ <optional> mixed $details = null ]
        Parameter #4 [ <optional> ?string $name = null ]
        Parameter #5 [ <optional> mixed $headerFault = null ]
        Parameter #6 [ <optional> string $lang = "" ]
      }
    }

    Method [ <internal:soap, overwrites Exception, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, inherits Exception> public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getMessage ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getFile ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getLine ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getTrace ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getPrevious ] {

      - Parameters [0] {
      }
      - Return [ ?Throwable ]
    }

    Method [ <internal:Core, inherits Exception, prototype Throwable> final public method getTraceAsString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'message' => '',
    'code' => 0,
    'file' => '',
    'line' => 0,
    'faultcode' => NULL,
    'faultcodens' => NULL,
    'faultactor' => NULL,
    'detail' => NULL,
    '_name' => NULL,
    'headerfault' => NULL,
    'lang' => '',
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
