<?php

return array (
  'type' => 'function',
  'name' => 'mb_strpos',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_strpos',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_strpos function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-strpos.php',
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
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal:mbstring> function mb_strpos ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $haystack ]
    Parameter #1 [ <required> string $needle ]
    Parameter #2 [ <optional> int $offset = 0 ]
    Parameter #3 [ <optional> ?string $encoding = null ]
  }
  - Return [ int|false ]
}
',
);
