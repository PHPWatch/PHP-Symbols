<?php

return array (
  'type' => 'function',
  'name' => 'pg_clientencoding',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_clientencoding',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_clientencoding function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-clientencoding.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_clientencoding ] {

  - Parameters [1] {
    Parameter #0 [ <optional> ?PgSql\\Connection $connection = null ]
  }
  - Return [ string ]
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
          'message' => 'use pg_client_encoding() instead',
        ),
      ),
    ),
  ),
);
