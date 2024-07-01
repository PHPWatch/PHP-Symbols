<?php

return array (
  'type' => 'class',
  'name' => 'http\\Client',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Client',
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
        'name' => 'http\\Client class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-client.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'SplSubject',
    1 => 'Countable',
  ),
  'constants' => 
  array (
    'DEBUG_INFO' => 0,
    'DEBUG_IN' => 1,
    'DEBUG_OUT' => 2,
    'DEBUG_HEADER' => 16,
    'DEBUG_BODY' => 32,
    'DEBUG_SSL' => 64,
  ),
  'properties' => 
  array (
    'observers' => 
    array (
      'name' => 'observers',
      'class' => 'http\\Client',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'options' => 
    array (
      'name' => 'options',
      'class' => 'http\\Client',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'history' => 
    array (
      'name' => 'history',
      'class' => 'http\\Client',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => true,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'recordHistory' => 
    array (
      'name' => 'recordHistory',
      'class' => 'http\\Client',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'driver' => 
        array (
          'position' => 0,
          'name' => 'driver',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'persistent_handle_id' => 
        array (
          'position' => 1,
          'name' => 'persistent_handle_id',
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
    'reset' => 
    array (
      'name' => 'reset',
      'class' => 'http\\Client',
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
    'enqueue' => 
    array (
      'name' => 'enqueue',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callable' => 
        array (
          'position' => 1,
          'name' => 'callable',
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
    'dequeue' => 
    array (
      'name' => 'dequeue',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
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
    'requeue' => 
    array (
      'name' => 'requeue',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callable' => 
        array (
          'position' => 1,
          'name' => 'callable',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'http\\Client',
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
    'send' => 
    array (
      'name' => 'send',
      'class' => 'http\\Client',
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
    'once' => 
    array (
      'name' => 'once',
      'class' => 'http\\Client',
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
    'wait' => 
    array (
      'name' => 'wait',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'timeout' => 
        array (
          'position' => 0,
          'name' => 'timeout',
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
    'getResponse' => 
    array (
      'name' => 'getResponse',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
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
    'getHistory' => 
    array (
      'name' => 'getHistory',
      'class' => 'http\\Client',
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
    'configure' => 
    array (
      'name' => 'configure',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'settings' => 
        array (
          'position' => 0,
          'name' => 'settings',
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
    'enablePipelining' => 
    array (
      'name' => 'enablePipelining',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'enable' => 
        array (
          'position' => 0,
          'name' => 'enable',
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
    'enableEvents' => 
    array (
      'name' => 'enableEvents',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'enable' => 
        array (
          'position' => 0,
          'name' => 'enable',
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
    'notify' => 
    array (
      'name' => 'notify',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
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
    'attach' => 
    array (
      'name' => 'attach',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'observer' => 
        array (
          'position' => 0,
          'name' => 'observer',
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
    'detach' => 
    array (
      'name' => 'detach',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'observer' => 
        array (
          'position' => 0,
          'name' => 'observer',
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
    'getObservers' => 
    array (
      'name' => 'getObservers',
      'class' => 'http\\Client',
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
    'getProgressInfo' => 
    array (
      'name' => 'getProgressInfo',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
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
    'getTransferInfo' => 
    array (
      'name' => 'getTransferInfo',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'request' => 
        array (
          'position' => 0,
          'name' => 'request',
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
    'setOptions' => 
    array (
      'name' => 'setOptions',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
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
    'getOptions' => 
    array (
      'name' => 'getOptions',
      'class' => 'http\\Client',
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
    'setSslOptions' => 
    array (
      'name' => 'setSslOptions',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'ssl_option' => 
        array (
          'position' => 0,
          'name' => 'ssl_option',
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
    'addSslOptions' => 
    array (
      'name' => 'addSslOptions',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'ssl_options' => 
        array (
          'position' => 0,
          'name' => 'ssl_options',
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
    'getSslOptions' => 
    array (
      'name' => 'getSslOptions',
      'class' => 'http\\Client',
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
    'setCookies' => 
    array (
      'name' => 'setCookies',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'cookies' => 
        array (
          'position' => 0,
          'name' => 'cookies',
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
    'addCookies' => 
    array (
      'name' => 'addCookies',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'cookies' => 
        array (
          'position' => 0,
          'name' => 'cookies',
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
    'getCookies' => 
    array (
      'name' => 'getCookies',
      'class' => 'http\\Client',
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
    'getAvailableDrivers' => 
    array (
      'name' => 'getAvailableDrivers',
      'class' => 'http\\Client',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAvailableOptions' => 
    array (
      'name' => 'getAvailableOptions',
      'class' => 'http\\Client',
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
    'getAvailableConfiguration' => 
    array (
      'name' => 'getAvailableConfiguration',
      'class' => 'http\\Client',
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
    'setDebug' => 
    array (
      'name' => 'setDebug',
      'class' => 'http\\Client',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
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
  'toString' => 'Class [ <internal:http> class http\\Client implements SplSubject, Countable ] {

  - Constants [6] {
    Constant [ integer DEBUG_INFO ] { 0 }
    Constant [ integer DEBUG_IN ] { 1 }
    Constant [ integer DEBUG_OUT ] { 2 }
    Constant [ integer DEBUG_HEADER ] { 16 }
    Constant [ integer DEBUG_BODY ] { 32 }
    Constant [ integer DEBUG_SSL ] { 64 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:http> static public method getAvailableDrivers ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [4] {
    Property [ <default> private $observers ]
    Property [ <default> protected $options ]
    Property [ <default> protected $history ]
    Property [ <default> public $recordHistory ]
  }

  - Methods [31] {
    Method [ <internal:http, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $driver ]
        Parameter #1 [ <optional> $persistent_handle_id ]
      }
    }

    Method [ <internal:http> public method reset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method enqueue ] {

      - Parameters [2] {
        Parameter #0 [ <required> http\\Client\\Request $request ]
        Parameter #1 [ <optional> $callable ]
      }
    }

    Method [ <internal:http> public method dequeue ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Client\\Request $request ]
      }
    }

    Method [ <internal:http> public method requeue ] {

      - Parameters [2] {
        Parameter #0 [ <required> http\\Client\\Request $request ]
        Parameter #1 [ <optional> $callable ]
      }
    }

    Method [ <internal:http, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method send ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method once ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method wait ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $timeout ]
      }
    }

    Method [ <internal:http> public method getResponse ] {

      - Parameters [1] {
        Parameter #0 [ <optional> http\\Client\\Request or NULL $request ]
      }
    }

    Method [ <internal:http> public method getHistory ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method configure ] {

      - Parameters [1] {
        Parameter #0 [ <required> array or NULL $settings ]
      }
    }

    Method [ <internal, deprecated:http> public method enablePipelining ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $enable ]
      }
    }

    Method [ <internal, deprecated:http> public method enableEvents ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $enable ]
      }
    }

    Method [ <internal:http, prototype SplSubject> public method notify ] {

      - Parameters [1] {
        Parameter #0 [ <optional> http\\Client\\Request or NULL $request ]
      }
    }

    Method [ <internal:http, prototype SplSubject> public method attach ] {

      - Parameters [1] {
        Parameter #0 [ <required> SplObserver $observer ]
      }
    }

    Method [ <internal:http, prototype SplSubject> public method detach ] {

      - Parameters [1] {
        Parameter #0 [ <required> SplObserver $observer ]
      }
    }

    Method [ <internal:http> public method getObservers ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method getProgressInfo ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Client\\Request $request ]
      }
    }

    Method [ <internal:http> public method getTransferInfo ] {

      - Parameters [1] {
        Parameter #0 [ <required> http\\Client\\Request $request ]
      }
    }

    Method [ <internal:http> public method setOptions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:http> public method getOptions ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setSslOptions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $ssl_option ]
      }
    }

    Method [ <internal:http> public method addSslOptions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $ssl_options ]
      }
    }

    Method [ <internal:http> public method getSslOptions ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setCookies ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $cookies ]
      }
    }

    Method [ <internal:http> public method addCookies ] {

      - Parameters [1] {
        Parameter #0 [ <optional> array or NULL $cookies ]
      }
    }

    Method [ <internal:http> public method getCookies ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method getAvailableOptions ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method getAvailableConfiguration ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setDebug ] {

      - Parameters [1] {
        Parameter #0 [ <required> $callback ]
      }
    }
  }
}
',
);
