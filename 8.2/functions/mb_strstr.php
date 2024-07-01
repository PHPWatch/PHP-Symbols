<?php

return array (
  'type' => 'function',
  'name' => 'mb_strstr',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_strstr',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_strstr function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-strstr.php',
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
  'toString' => 'Function [ <internal:mbstring> function mb_strstr ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $haystack ]
    Parameter #1 [ <required> string $needle ]
    Parameter #2 [ <optional> bool $before_needle = false ]
    Parameter #3 [ <optional> ?string $encoding = null ]
  }
  - Return [ string|false ]
}
',
);
