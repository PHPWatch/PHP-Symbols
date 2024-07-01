<?php

return array (
  'type' => 'function',
  'name' => 'mb_ereg_replace_callback',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_ereg_replace_callback',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_ereg_replace_callback function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-ereg-replace-callback.php',
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
    'nullable' => true,
  ),
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal:mbstring> function mb_ereg_replace_callback ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> callable $callback ]
    Parameter #2 [ <required> string $string ]
    Parameter #3 [ <optional> ?string $options = null ]
  }
  - Return [ string|false|null ]
}
',
);
