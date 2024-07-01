<?php

return array (
  'type' => 'function',
  'name' => 'pg_lo_write',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lo_write',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lo_write function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lo-write.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_lo_write ] {

  - Parameters [3] {
    Parameter #0 [ <required> $lob ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <optional> ?int $length = null ]
  }
  - Return [ int|false ]
}
',
);
