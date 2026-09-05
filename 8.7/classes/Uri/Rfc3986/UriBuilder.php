<?php

return array (
  'type' => 'class',
  'name' => 'Uri\\Rfc3986\\UriBuilder',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Uri\\Rfc3986\\UriBuilder',
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
        'name' => 'Uri\\Rfc3986\\UriBuilder interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uri-rfc3986-uribuilder.php',
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
    'reset' => 
    array (
      'name' => 'reset',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setScheme' => 
    array (
      'name' => 'setScheme',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setUserInfo' => 
    array (
      'name' => 'setUserInfo',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'parameters' => 
      array (
        'userInfo' => 
        array (
          'position' => 0,
          'name' => 'userInfo',
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
    'setHost' => 
    array (
      'name' => 'setHost',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setPort' => 
    array (
      'name' => 'setPort',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setPath' => 
    array (
      'name' => 'setPath',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setQuery' => 
    array (
      'name' => 'setQuery',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'setFragment' => 
    array (
      'name' => 'setFragment',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
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
    'build' => 
    array (
      'name' => 'build',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'parameters' => 
      array (
        'baseUrl' => 
        array (
          'position' => 0,
          'name' => 'baseUrl',
          'type' => '?Uri\\Rfc3986\\Uri',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Uri\\Rfc3986\\Uri',
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
    'scheme' => 
    array (
      'name' => 'scheme',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'userinfo' => 
    array (
      'name' => 'userinfo',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'host' => 
    array (
      'name' => 'host',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'port' => 
    array (
      'name' => 'port',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?int',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'path' => 
    array (
      'name' => 'path',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => 'string',
      'has_default_value' => true,
      'default_value' => '',
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'fragment' => 
    array (
      'name' => 'fragment',
      'class' => 'Uri\\Rfc3986\\UriBuilder',
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'uri',
  'toString' => 'Class [ <internal:uri> final class Uri\\Rfc3986\\UriBuilder ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [7] {
    Property [ private ?string $scheme = NULL ]
    Property [ private ?string $userinfo = NULL ]
    Property [ private ?string $host = NULL ]
    Property [ private ?int $port = NULL ]
    Property [ private string $path = \'\' ]
    Property [ private ?string $query = NULL ]
    Property [ private ?string $fragment = NULL ]
  }

  - Methods [9] {
    Method [ <internal:uri> public method reset ] {

      - Parameters [0] {
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setScheme ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $scheme ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setUserInfo ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $userInfo ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setHost ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $host ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setPort ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?int $port ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setPath ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $path ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setQuery ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $query ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method setFragment ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?string $fragment ]
      }
      - Return [ static ]
    }

    Method [ <internal:uri> public method build ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?Uri\\Rfc3986\\Uri $baseUrl = null ]
      }
      - Return [ Uri\\Rfc3986\\Uri ]
    }
  }
}
',
  'modifiers' => 32,
  'defaultProperties' => 
  array (
    'scheme' => NULL,
    'userinfo' => NULL,
    'host' => NULL,
    'port' => NULL,
    'path' => '',
    'query' => NULL,
    'fragment' => NULL,
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
  'is_read_only' => false,
);
