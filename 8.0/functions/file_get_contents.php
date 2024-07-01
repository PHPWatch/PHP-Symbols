<?php

return array (
  'type' => 'function',
  'name' => 'file_get_contents',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'file_get_contents',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'file_get_contents function (php.net)',
        'url' => 'https://www.php.net/manual/function.file-get-contents.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal:standard> function file_get_contents ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $filename ]
    Parameter #1 [ <optional> bool $use_include_path = false ]
    Parameter #2 [ <optional> $context = null ]
    Parameter #3 [ <optional> int $offset = 0 ]
    Parameter #4 [ <optional> ?int $length = null ]
  }
  - Return [ string|false ]
}
',
);
