<?php

return array (
  'type' => 'class',
  'name' => 'Uri\\Rfc3986\\Uri',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Uri\\Rfc3986\\Uri',
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
        'name' => 'Uri\\Rfc3986\\Uri interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uri-rfc3986-uri.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Uri\\Rfc3986',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'Uri\\Rfc3986\\Uri',
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
          'type' => '?Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
          'type' => '?Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawScheme' => 
    array (
      'name' => 'getRawScheme',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'withScheme' => 
    array (
      'name' => 'withScheme',
      'class' => 'Uri\\Rfc3986\\Uri',
      'parameters' => 
      array (
        'scheme' => 
        array (
          'position' => 0,
          'name' => 'scheme',
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
    'getUserInfo' => 
    array (
      'name' => 'getUserInfo',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawUserInfo' => 
    array (
      'name' => 'getRawUserInfo',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'withUserInfo' => 
    array (
      'name' => 'withUserInfo',
      'class' => 'Uri\\Rfc3986\\Uri',
      'parameters' => 
      array (
        'userinfo' => 
        array (
          'position' => 0,
          'name' => 'userinfo',
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
    'getUsername' => 
    array (
      'name' => 'getUsername',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawUsername' => 
    array (
      'name' => 'getRawUsername',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getPassword' => 
    array (
      'name' => 'getPassword',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawPassword' => 
    array (
      'name' => 'getRawPassword',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawHost' => 
    array (
      'name' => 'getRawHost',
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawPath' => 
    array (
      'name' => 'getRawPath',
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawQuery' => 
    array (
      'name' => 'getRawQuery',
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'getRawFragment' => 
    array (
      'name' => 'getRawFragment',
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
      'parameters' => 
      array (
        'uri' => 
        array (
          'position' => 0,
          'name' => 'uri',
          'type' => 'Uri\\Rfc3986\\Uri',
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
    'toString' => 
    array (
      'name' => 'toString',
      'class' => 'Uri\\Rfc3986\\Uri',
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
    'toRawString' => 
    array (
      'name' => 'toRawString',
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
      'class' => 'Uri\\Rfc3986\\Uri',
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
  'toString' => 'Class [ <internal:uri> final readonly class Uri\\Rfc3986\\Uri ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:uri> static public method parse ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> ?Uri\\Rfc3986\\Uri $baseUrl = null ]
      }
      - Return [ ?static ]
    }
  }

  - Properties [0] {
  }

  - Methods [32] {
    Method [ <internal:uri, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $uri ]
        Parameter #1 [ <optional> ?Uri\\Rfc3986\\Uri $baseUrl = null ]
      }
    }

    Method [ <internal:uri> public method getScheme ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getRawScheme ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withScheme ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $scheme ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getUserInfo ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getRawUserInfo ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method withUserInfo ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $userinfo ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method getUsername ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getRawUsername ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getPassword ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getRawPassword ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getHost ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:uri> public method getRawHost ] {

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

    Method [ <internal:uri> public method getRawPath ] {

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

    Method [ <internal:uri> public method getRawQuery ] {

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

    Method [ <internal:uri> public method getRawFragment ] {

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
        Parameter #0 [ <required> Uri\\Rfc3986\\Uri $uri ]
        Parameter #1 [ <optional> Uri\\UriComparisonMode $comparisonMode = Uri\\UriComparisonMode::ExcludeFragment ]
      }
      - Return [ bool ]
    }

    Method [ <internal:uri> public method toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method toRawString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:uri> public method resolve ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $uri ]
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
