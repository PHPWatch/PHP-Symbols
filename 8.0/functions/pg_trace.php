<?php

return array (
  'type' => 'function',
  'name' => 'pg_trace',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_trace',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_trace function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-trace.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_trace ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $filename ]
    Parameter #1 [ <optional> string $mode = "w" ]
    Parameter #2 [ <optional> $connection = null ]
  }
  - Return [ bool ]
}
',
);
