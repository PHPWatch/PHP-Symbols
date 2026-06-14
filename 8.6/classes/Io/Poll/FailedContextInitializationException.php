<?php

return array (
  'type' => 'class',
  'name' => 'Io\\Poll\\FailedContextInitializationException',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Io\\Poll\\FailedContextInitializationException',
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
        'name' => 'Io\\Poll\\FailedContextInitializationException interface (php.net)',
        'url' => 'https://www.php.net/manual/class.io-poll-failedcontextinitializationexception.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Io\\Poll',
  'constants' => 
  array (
    'ERROR_NONE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int ERROR_NONE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_SYSTEM' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ERROR_SYSTEM ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_NOMEM' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ERROR_NOMEM ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_INVALID' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int ERROR_INVALID ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_EXISTS' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int ERROR_EXISTS ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_NOTFOUND' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int ERROR_NOTFOUND ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_TIMEOUT' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int ERROR_TIMEOUT ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_INTERRUPTED' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int ERROR_INTERRUPTED ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_PERMISSION' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int ERROR_PERMISSION ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_TOOBIG' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int ERROR_TOOBIG ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_AGAIN' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int ERROR_AGAIN ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERROR_NOSUPPORT' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int ERROR_NOSUPPORT ] { 11 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Exception',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
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
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'previous' => 
        array (
          'position' => 2,
          'name' => 'previous',
          'type' => '?Throwable',
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
  ),
  'extension' => 'standard',
  'toString' => 'Class [ <internal:standard> class Io\\Poll\\FailedContextInitializationException extends Io\\Poll\\FailedPollOperationException implements Stringable, Throwable ] {

  - Constants [12] {
    Constant [ public int ERROR_NONE ] { 0 }
    Constant [ public int ERROR_SYSTEM ] { 1 }
    Constant [ public int ERROR_NOMEM ] { 2 }
    Constant [ public int ERROR_INVALID ] { 3 }
    Constant [ public int ERROR_EXISTS ] { 4 }
    Constant [ public int ERROR_NOTFOUND ] { 5 }
    Constant [ public int ERROR_TIMEOUT ] { 6 }
    Constant [ public int ERROR_INTERRUPTED ] { 7 }
    Constant [ public int ERROR_PERMISSION ] { 8 }
    Constant [ public int ERROR_TOOBIG ] { 9 }
    Constant [ public int ERROR_AGAIN ] { 10 }
    Constant [ public int ERROR_NOSUPPORT ] { 11 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [4] {
    Property [ protected $message = \'\' ]
    Property [ protected $code = 0 ]
    Property [ protected string $file = \'\' ]
    Property [ protected int $line = 0 ]
  }

  - Methods [10] {
    Method [ <internal:Core, inherits Exception, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $message = "" ]
        Parameter #1 [ <optional> int $code = 0 ]
        Parameter #2 [ <optional> ?Throwable $previous = null ]
      }
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

    Method [ <internal:Core, inherits Exception, prototype Stringable> public method __toString ] {

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
