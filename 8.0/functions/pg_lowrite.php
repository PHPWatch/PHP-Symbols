<?php

return array (
  'type' => 'function',
  'name' => 'pg_lowrite',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pg_lowrite',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pg_lowrite function (php.net)',
        'url' => 'https://www.php.net/manual/function.pg-lowrite.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pgsql',
  'toString' => 'Function [ <internal, deprecated:pgsql> function pg_lowrite ] {

  - Parameters [3] {
    Parameter #0 [ <required> $lob ]
    Parameter #1 [ <required> string $data ]
    Parameter #2 [ <optional> ?int $length = null ]
  }
  - Return [ int|false ]
}
',
);
