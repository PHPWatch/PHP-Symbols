<?php

return array (
  'type' => 'function',
  'name' => 'imagecrop',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagecrop',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagecrop function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagecrop.php',
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
  'extension' => 'gd',
  'toString' => 'Function [ <internal:gd> function imagecrop ] {

  - Parameters [2] {
    Parameter #0 [ <required> GdImage $image ]
    Parameter #1 [ <required> array $rectangle ]
  }
  - Return [ GdImage|false ]
}
',
);
