<?php

return array (
  'type' => 'class',
  'name' => 'ErrorException',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ErrorException',
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
        'name' => 'ErrorException class (php.net)',
        'url' => 'https://www.php.net/manual/class.errorexception.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Throwable',
    1 => 'Stringable',
  ),
  'constants' => 
  array (
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
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
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
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'severity' => 
    array (
      'name' => 'severity',
      'class' => 'ErrorException',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => 1,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ErrorException',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'code' => 
        array (
          'position' => 1,
          'name' => 'code',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'severity' => 
        array (
          'position' => 2,
          'name' => 'severity',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'E_ERROR',
        ),
        'filename' => 
        array (
          'position' => 3,
          'name' => 'filename',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'line' => 
        array (
          'position' => 4,
          'name' => 'line',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'previous' => 
        array (
          'position' => 5,
          'name' => 'previous',
          'type' => '?Throwable',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
    'getSeverity' => 
    array (
      'name' => 'getSeverity',
      'class' => 'ErrorException',
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
    '__toString' => 
    array (
      'name' => '__toString',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:Core> class ErrorException extends Exception implements Throwable, Stringable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [5] {
    Property [ protected $message = \'\' ]
    Property [ protected $code = 0 ]
    Property [ protected $file = NULL ]
    Property [ protected $line = NULL ]
    Property [ protected $severity = 1 ]
  }

  - Methods [11] {
    Method [ <internal:Core, overwrites Exception, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <optional> string $message = "" ]
        Parameter #1 [ <optional> int $code = 0 ]
        Parameter #2 [ <optional> int $severity = E_ERROR ]
        Parameter #3 [ <optional> ?string $filename = null ]
        Parameter #4 [ <optional> ?int $line = null ]
        Parameter #5 [ <optional> ?Throwable $previous = null ]
      }
    }

    Method [ <internal:Core> final public method getSeverity ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:Core, inherits Exception> public method __wakeup ] {

      - Parameters [0] {
      }
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

    Method [ <internal:Core, inherits Exception, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
',
);
