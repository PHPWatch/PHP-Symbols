<?php

return array (
  'type' => 'function',
  'name' => 'pg_freeresult',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_freeresult',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_freeresult function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-freeresult.php',
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
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_freeresult ] {

  - Parameters [1] {
    Parameter #0 [ <required> PgSql\\Result $result ]
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
          'message' => 'use pg_free_result() instead',
        ),
      ),
    ),
  ),
);
