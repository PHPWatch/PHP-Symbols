<?php

return array (
  'type' => 'function',
  'name' => 'pg_lo_seek',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lo_seek',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lo_seek function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lo-seek.php',
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
    ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal:pgsql> function pg_lo_seek ] {

  - Parameters [3] {
    Parameter #0 [ <required> $lob ]
    Parameter #1 [ <required> int $offset ]
    Parameter #2 [ <optional> int $whence = SEEK_CUR ]
  }
  - Return [ bool ]
}
',
);
