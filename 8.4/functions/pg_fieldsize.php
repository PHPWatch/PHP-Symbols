<?php

return array (
  'type' => 'function',
  'name' => 'pg_fieldsize',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fieldsize',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fieldsize function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fieldsize.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_fieldsize ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> int $field ]
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
          'message' => 'use pg_field_size() instead',
        ),
      ),
    ),
  ),
);
