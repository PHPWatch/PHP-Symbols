<?php

return array (
  'type' => 'function',
  'name' => 'pg_setclientencoding',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_setclientencoding',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_setclientencoding function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-setclientencoding.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_setclientencoding ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> string $encoding = <default> ]
  }
  - Return [ int ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.0',
          'message' => 'use pg_set_client_encoding() instead',
        ),
      ),
    ),
  ),
);
