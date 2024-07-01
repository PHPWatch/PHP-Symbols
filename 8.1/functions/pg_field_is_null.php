<?php

return array (
  'type' => 'function',
  'name' => 'pg_field_is_null',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_field_is_null',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_field_is_null function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-field-is-null.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_field_is_null ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Result $result ]
    Parameter #1 [ <required> $row ]
    Parameter #2 [ <optional> string|int $field = <default> ]
  }
  - Return [ int|false ]
}
',
);
