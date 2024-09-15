<?php

return array (
  'type' => 'function',
  'name' => 'pg_lounlink',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lounlink',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lounlink function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lounlink.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_lounlink ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> $oid = <default> ]
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
          'message' => 'use pg_lo_unlink() instead',
        ),
      ),
    ),
  ),
);
