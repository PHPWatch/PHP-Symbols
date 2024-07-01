<?php

return array (
  'type' => 'function',
  'name' => 'preg_split',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'preg_split',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'preg_split function (php.net)',
        'url' => 'https://www.php.net/manual/function.preg-split.php',
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
  'extension' => 'pcre',
  'toString' => 'Function [ <internal:pcre> function preg_split ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> string $subject ]
    Parameter #2 [ <optional> int $limit = -1 ]
    Parameter #3 [ <optional> int $flags = 0 ]
  }
  - Return [ array|false ]
}
',
);
