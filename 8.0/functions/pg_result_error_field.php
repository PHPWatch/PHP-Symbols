<?php

return array (
  'type' => 'function',
  'name' => 'pg_result_error_field',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_result_error_field',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_result_error_field function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-result-error-field.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => true,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_result_error_field ] {

  - Parameters [2] {
    Parameter #0 [ <required> $result ]
    Parameter #1 [ <required> int $field_code ]
  }
  - Return [ string|false|null ]
}
',
);
