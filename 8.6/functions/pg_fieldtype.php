<?php

return array (
  'type' => 'function',
  'name' => 'pg_fieldtype',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_fieldtype',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_fieldtype function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-fieldtype.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_fieldtype ] {

  - Parameters [2] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> int $field ]
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
          'message' => 'use pg_field_type() instead',
        ),
      ),
    ),
  ),
);
