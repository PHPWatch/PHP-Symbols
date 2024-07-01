<?php

return array (
  'type' => 'function',
  'name' => 'pg_loimport',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_loimport',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_loimport function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-loimport.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_loimport ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $filename = <default> ]
    Parameter #2 [ <optional> $oid = <default> ]
  }
  - Return [ string|int|false ]
}
',
);
