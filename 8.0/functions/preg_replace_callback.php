<?php

return array (
  'type' => 'function',
  'name' => 'preg_replace_callback',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'preg_replace_callback',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'preg_replace_callback function (php.net)',
        'url' => 'https://www.php.net/manual/function.preg-replace-callback.php',
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
    'nullable' => true,
  ),
  'extension' => 'pcre',
  'toString' => 'Function [ <internal:pcre> function preg_replace_callback ] {

  - Parameters [6] {
    Parameter #0 [ <required> array|string $pattern ]
    Parameter #1 [ <required> callable $callback ]
    Parameter #2 [ <required> array|string $subject ]
    Parameter #3 [ <optional> int $limit = -1 ]
    Parameter #4 [ <optional> &$count = null ]
    Parameter #5 [ <optional> int $flags = 0 ]
  }
  - Return [ array|string|null ]
}
',
);
