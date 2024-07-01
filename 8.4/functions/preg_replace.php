<?php

return array (
  'type' => 'function',
  'name' => 'preg_replace',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'preg_replace',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'preg_replace function (php.net)',
        'url' => 'https://www.php.net/manual/function.preg-replace.php',
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
    'nullable' => true,
  ),
  'extension' => 'pcre',
  'toString' => 'Function [ <internal:pcre> function preg_replace ] {

  - Parameters [5] {
    Parameter #0 [ <required> array|string $pattern ]
    Parameter #1 [ <required> array|string $replacement ]
    Parameter #2 [ <required> array|string $subject ]
    Parameter #3 [ <optional> int $limit = -1 ]
    Parameter #4 [ <optional> &$count = null ]
  }
  - Return [ array|string|null ]
}
',
);
