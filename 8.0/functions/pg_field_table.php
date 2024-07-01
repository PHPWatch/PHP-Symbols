<?php

return array (
  'type' => 'function',
  'name' => 'pg_field_table',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_field_table',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_field_table function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-field-table.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_field_table ] {

  - Parameters [3] {
    Parameter #0 [ <required> $result ]
    Parameter #1 [ <required> int $field ]
    Parameter #2 [ <optional> bool $oid_only = false ]
  }
  - Return [ string|int|false ]
}
',
);
