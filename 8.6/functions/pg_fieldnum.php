<?php

return array (
  'type' => 'function',
  'name' => 'pg_fieldnum',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fieldnum',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fieldnum function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fieldnum.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_fieldnum ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> string $field ]
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
          'message' => 'use pg_field_num() instead',
        ),
      ),
    ),
  ),
);
