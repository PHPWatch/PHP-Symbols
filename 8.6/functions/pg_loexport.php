<?php

return array (
  'type' => 'function',
  'name' => 'pg_loexport',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_loexport',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_loexport function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-loexport.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_loexport ] {

  - Parameters [3] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $oid = <default> ]
    Parameter #2 [ <optional> $filename = <default> ]
  }
  - Return [ bool ]
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
          'message' => 'use pg_lo_export() instead',
        ),
      ),
    ),
  ),
);
