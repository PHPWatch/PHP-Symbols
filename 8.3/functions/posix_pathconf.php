<?php

return array (
  'type' => 'function',
  'name' => 'posix_pathconf',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'posix_pathconf',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'posix_pathconf function (php.net)',
        'url' => 'https://www.php.net/manual/function.posix-pathconf.php',
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
  'extension' => 'posix',
  'toString' => 'Function [ <internal:posix> function posix_pathconf ] {

  - Parameters [2] {
    Parameter #0 [ <required> string $path ]
    Parameter #1 [ <required> int $name ]
  }
  - Return [ int|false ]
}
',
);
