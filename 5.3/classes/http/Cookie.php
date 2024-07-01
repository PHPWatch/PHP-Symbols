<?php

return array (
  'type' => 'class',
  'name' => 'http\\Cookie',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Cookie',
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
        'name' => 'http\\Cookie class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-cookie.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'PARSE_RAW' => 1,
    'SECURE' => 16,
    'HTTPONLY' => 32,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'cookie_string' => 
        array (
          'position' => 0,
          'name' => 'cookie_string',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'parser_flags' => 
        array (
          'position' => 1,
          'name' => 'parser_flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'allowed_extras' => 
        array (
          'position' => 2,
          'name' => 'allowed_extras',
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
      'class' => 'http\\Cookie',
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
      'class' => 'http\\Cookie',
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
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'cookies' => 
        array (
          'position' => 0,
          'name' => 'cookies',
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
    'getCookie' => 
    array (
      'name' => 'getCookie',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
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
    'setCookie' => 
    array (
      'name' => 'setCookie',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'cookie_name' => 
        array (
          'position' => 0,
          'name' => 'cookie_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'cookie_value' => 
        array (
          'position' => 1,
          'name' => 'cookie_value',
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
    'addCookie' => 
    array (
      'name' => 'addCookie',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'cookie_name' => 
        array (
          'position' => 0,
          'name' => 'cookie_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'cookie_value' => 
        array (
          'position' => 1,
          'name' => 'cookie_value',
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
    'getExtras' => 
    array (
      'name' => 'getExtras',
      'class' => 'http\\Cookie',
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
    'setExtras' => 
    array (
      'name' => 'setExtras',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'extras' => 
        array (
          'position' => 0,
          'name' => 'extras',
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
    'addExtras' => 
    array (
      'name' => 'addExtras',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'extras' => 
        array (
          'position' => 0,
          'name' => 'extras',
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
    'getExtra' => 
    array (
      'name' => 'getExtra',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
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
    'setExtra' => 
    array (
      'name' => 'setExtra',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'extra_name' => 
        array (
          'position' => 0,
          'name' => 'extra_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_value' => 
        array (
          'position' => 1,
          'name' => 'extra_value',
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
    'addExtra' => 
    array (
      'name' => 'addExtra',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'extra_name' => 
        array (
          'position' => 0,
          'name' => 'extra_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_value' => 
        array (
          'position' => 1,
          'name' => 'extra_value',
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
    'getDomain' => 
    array (
      'name' => 'getDomain',
      'class' => 'http\\Cookie',
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
    'setDomain' => 
    array (
      'name' => 'setDomain',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'getPath' => 
    array (
      'name' => 'getPath',
      'class' => 'http\\Cookie',
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
    'setPath' => 
    array (
      'name' => 'setPath',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'getExpires' => 
    array (
      'name' => 'getExpires',
      'class' => 'http\\Cookie',
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
    'setExpires' => 
    array (
      'name' => 'setExpires',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'getMaxAge' => 
    array (
      'name' => 'getMaxAge',
      'class' => 'http\\Cookie',
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
    'setMaxAge' => 
    array (
      'name' => 'setMaxAge',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'http\\Cookie',
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
    'setFlags' => 
    array (
      'name' => 'setFlags',
      'class' => 'http\\Cookie',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'http\\Cookie',
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
    'toString' => 
    array (
      'name' => 'toString',
      'class' => 'http\\Cookie',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'http\\Cookie',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> class http\\Cookie ] {

  - Constants [3] {
    Constant [ integer PARSE_RAW ] { 1 }
    Constant [ integer SECURE ] { 16 }
    Constant [ integer HTTPONLY ] { 32 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [26] {
    Method [ <internal:http, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $cookie_string ]
        Parameter #1 [ <optional> $parser_flags ]
        Parameter #2 [ <optional> $allowed_extras ]
      }
    }

    Method [ <internal:http> public method getCookies ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setCookies ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $cookies ]
      }
    }

    Method [ <internal:http> public method addCookies ] {

      - Parameters [1] {
        Parameter #0 [ <required> $cookies ]
      }
    }

    Method [ <internal:http> public method getCookie ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:http> public method setCookie ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cookie_name ]
        Parameter #1 [ <optional> $cookie_value ]
      }
    }

    Method [ <internal:http> public method addCookie ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cookie_name ]
        Parameter #1 [ <required> $cookie_value ]
      }
    }

    Method [ <internal:http> public method getExtras ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setExtras ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $extras ]
      }
    }

    Method [ <internal:http> public method addExtras ] {

      - Parameters [1] {
        Parameter #0 [ <required> $extras ]
      }
    }

    Method [ <internal:http> public method getExtra ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:http> public method setExtra ] {

      - Parameters [2] {
        Parameter #0 [ <required> $extra_name ]
        Parameter #1 [ <optional> $extra_value ]
      }
    }

    Method [ <internal:http> public method addExtra ] {

      - Parameters [2] {
        Parameter #0 [ <required> $extra_name ]
        Parameter #1 [ <required> $extra_value ]
      }
    }

    Method [ <internal:http> public method getDomain ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setDomain ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $value ]
      }
    }

    Method [ <internal:http> public method getPath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setPath ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $value ]
      }
    }

    Method [ <internal:http> public method getExpires ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setExpires ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $value ]
      }
    }

    Method [ <internal:http> public method getMaxAge ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setMaxAge ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $value ]
      }
    }

    Method [ <internal:http> public method getFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $value ]
      }
    }

    Method [ <internal:http> public method toArray ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method __toString ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
