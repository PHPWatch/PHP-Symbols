<?php

return array (
  'type' => 'function',
  'name' => 'pg_copy_to',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_copy_to',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_copy_to function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-copy-to.php',
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
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_copy_to ] {

  - Parameters [4] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <required> string $table_name ]
    Parameter #2 [ <optional> string $separator = "\\t" ]
    Parameter #3 [ <optional> string $null_as = "\\\\\\\\N" ]
  }
  - Return [ array|false ]
}
',
);
