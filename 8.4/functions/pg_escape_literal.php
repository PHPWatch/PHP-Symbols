<?php

return array (
  'type' => 'function',
  'name' => 'pg_escape_literal',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_escape_literal',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_escape_literal function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-escape-literal.php',
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
  'toString' => 'Function [ <internal:pgsql> function pg_escape_literal ] {

  - Parameters [2] {
    Parameter #0 [ <required> $connection ]
    Parameter #1 [ <optional> string $string = <default> ]
  }
  - Return [ string|false ]
}
',
);
