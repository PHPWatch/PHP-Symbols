<?php

return array (
  'type' => 'function',
  'name' => 'preg_grep',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'preg_grep',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'preg_grep function (php.net)',
        'url' => 'https://www.php.net/manual/function.preg-grep.php',
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
  'extension' => 'pcre',
  'toString' => 'Function [ <internal:pcre> function preg_grep ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> array $array ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ array|false ]
}
',
);
