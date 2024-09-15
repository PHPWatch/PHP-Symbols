<?php

return array (
  'type' => 'function',
  'name' => 'pg_locreate',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_locreate',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_locreate function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-locreate.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_locreate ] {

  - Parameters [2] {
    Parameter #0 [ <optional> $connection = <default> ]
    Parameter #1 [ <optional> $oid = <default> ]
  }
  - Return [ string|int|false ]
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
          'message' => 'use pg_lo_create() instead',
        ),
      ),
    ),
  ),
);
