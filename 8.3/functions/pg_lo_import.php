<?php

return array (
  'type' => 'function',
  'name' => 'pg_lo_import',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lo_import',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lo_import function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lo-import.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_lo_import ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $filename = <default> ]
    Parameter #2 [ <optional> $oid = <default> ]
  }
  - Return [ string|int|false ]
}
',
);
