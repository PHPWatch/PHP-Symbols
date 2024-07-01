<?php

return array (
  'type' => 'function',
  'name' => 'mb_convert_variables',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_convert_variables',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_convert_variables function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-convert-variables.php',
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
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal:mbstring> function mb_convert_variables ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $to_encoding ]
    Parameter #1 [ <required> array|string $from_encoding ]
    Parameter #2 [ <required> mixed &$var ]
    Parameter #3 [ <optional> mixed &...$vars ]
  }
  - Return [ string|false ]
}
',
);
