<?php

return array (
  'type' => 'function',
  'name' => 'pg_set_error_verbosity',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_set_error_verbosity',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_set_error_verbosity function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-set-error-verbosity.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_set_error_verbosity ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> int $verbosity = <default> ]
  }
  - Return [ int|false ]
}
',
);
