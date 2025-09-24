<?php

return array (
  'type' => 'class',
  'name' => 'Uri\\WhatWg\\Url',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Uri\\WhatWg\\Url',
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
        'name' => 'Uri\\WhatWg\\Url interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uri-whatwg-url.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Uri\\WhatWg',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'baseUrl' => 
        array (
          'position' => 1,
          'name' => 'baseUrl',
          'type' => '?Uri\\WhatWg\\Url',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'errors' => 
        array (
          'position' => 2,
          'name' => 'errors',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?static',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'baseUrl' => 
        array (
          'position' => 1,
          'name' => 'baseUrl',
          'type' => '?Uri\\WhatWg\\Url',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'softErrors' => 
        array (
          'position' => 2,
          'name' => 'softErrors',
          'type' => NULL,
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
    'getScheme' => 
    array (
      'name' => 'getScheme',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withScheme' => 
    array (
      'name' => 'withScheme',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'scheme' => 
        array (
          'position' => 0,
          'name' => 'scheme',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getUsername' => 
    array (
      'name' => 'getUsername',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withUsername' => 
    array (
      'name' => 'withUsername',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'username' => 
        array (
          'position' => 0,
          'name' => 'username',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPassword' => 
    array (
      'name' => 'getPassword',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withPassword' => 
    array (
      'name' => 'withPassword',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'password' => 
        array (
          'position' => 0,
          'name' => 'password',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAsciiHost' => 
    array (
      'name' => 'getAsciiHost',
      'class' => 'Uri\\WhatWg\\Url',
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
    'getUnicodeHost' => 
    array (
      'name' => 'getUnicodeHost',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withHost' => 
    array (
      'name' => 'withHost',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'host' => 
        array (
          'position' => 0,
          'name' => 'host',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
      ),
      'return_type' => '?int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'withPort' => 
    array (
      'name' => 'withPort',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'port' => 
        array (
          'position' => 0,
          'name' => 'port',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPath' => 
    array (
      'name' => 'getPath',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withPath' => 
    array (
      'name' => 'withPath',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'path' => 
        array (
          'position' => 0,
          'name' => 'path',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getQuery' => 
    array (
      'name' => 'getQuery',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withQuery' => 
    array (
      'name' => 'withQuery',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFragment' => 
    array (
      'name' => 'getFragment',
      'class' => 'Uri\\WhatWg\\Url',
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
    'withFragment' => 
    array (
      'name' => 'withFragment',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'fragment' => 
        array (
          'position' => 0,
          'name' => 'fragment',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'equals' => 
    array (
      'name' => 'equals',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'url' => 
        array (
          'position' => 0,
          'name' => 'url',
          'type' => 'Uri\\WhatWg\\Url',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'comparisonMode' => 
        array (
          'position' => 1,
          'name' => 'comparisonMode',
          'type' => 'Uri\\UriComparisonMode',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Uri\\UriComparisonMode::ExcludeFragment',
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toAsciiString' => 
    array (
      'name' => 'toAsciiString',
      'class' => 'Uri\\WhatWg\\Url',
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
    'toUnicodeString' => 
    array (
      'name' => 'toUnicodeString',
      'class' => 'Uri\\WhatWg\\Url',
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
    'resolve' => 
    array (
      'name' => 'resolve',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'softErrors' => 
        array (
          'position' => 1,
          'name' => 'softErrors',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'Uri\\WhatWg\\Url',
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
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'Uri\\WhatWg\\Url',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'Uri\\WhatWg\\Url',
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'uri',
  'toString' => 'Class [ <internal:uri> final readonly class Uri\\WhatWg\\Url ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:uri> static public method parse ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> ?Uri\\WhatWg\\Url $baseUrl = null ]
        Parameter #2 [ <optional> &$errors = null ]
      }
      - Return [ ?static ]
    }
  }

  - Properties [0] {
  }

  - Methods [25] {
    Method [ <internal:uri, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> ?Uri\\WhatWg\\Url $baseUrl = null ]
        Parameter #2 [ <optional> &$softErrors = null ]
      }
    }

    Method [ <internal:uri> public method getScheme ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method withScheme ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $scheme ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getUsername ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withUsername ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $username ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getPassword ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withPassword ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $password ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getAsciiHost ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getUnicodeHost ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withHost ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $host ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getPort ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:uri> public method withPort ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?int $port ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getPath ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method withPath ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $path ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getQuery ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withQuery ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $query ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getFragment ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withFragment ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $fragment ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method equals ] {

      - Parameters [2] {
        Parameter #0 [ <required> Uri\\WhatWg\\Url $url ]
        Parameter #1 [ <optional> Uri\\UriComparisonMode $comparisonMode = Uri\\UriComparisonMode::ExcludeFragment ]
      }
      - Return [ bool ]
    }

    Method [ <internal:uri> public method toAsciiString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method toUnicodeString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method resolve ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> &$softErrors = null ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:uri> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:uri> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
  'modifiers' => 65568,
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
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => true,
);
