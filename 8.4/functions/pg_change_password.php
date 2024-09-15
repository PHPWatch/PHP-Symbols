<?php

return array (
  'type' => 'function',
  'name' => 'pg_change_password',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_change_password',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_change_password function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-change-password.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_change_password ] {

  - Parameters [3] {
    Parameter #0 [ <required> PgSql\\Connection $connection ]
    Parameter #1 [ <required> string $user ]
    Parameter #2 [ <required> string $password ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
