<?php

return array (
  'type' => 'function',
  'name' => 'preg_match_all',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'preg_match_all',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'preg_match_all function (php.net)',
        'url' => 'https://www.php.net/manual/function.preg-match-all.php',
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
  'extension' => 'pcre',
  'toString' => 'Function [ <internal:pcre> function preg_match_all ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> string $subject ]
    Parameter #2 [ <optional> &$matches = null ]
    Parameter #3 [ <optional> int $flags = 0 ]
    Parameter #4 [ <optional> int $offset = 0 ]
  }
  - Return [ int|false ]
}
',
);
