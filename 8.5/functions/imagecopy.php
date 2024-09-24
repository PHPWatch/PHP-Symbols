<?php

return array (
  'type' => 'function',
  'name' => 'imagecopy',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imagecopy',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagecopy function (php.net)',
        'url' => 'https://www.php.net/manual/function.imagecopy.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'gd',
  'toString' => 'Function [ <internal:gd> function imagecopy ] {

  - Parameters [8] {
    Parameter #0 [ <required> GdImage $dst_image ]
    Parameter #1 [ <required> GdImage $src_image ]
    Parameter #2 [ <required> int $dst_x ]
    Parameter #3 [ <required> int $dst_y ]
    Parameter #4 [ <required> int $src_x ]
    Parameter #5 [ <required> int $src_y ]
    Parameter #6 [ <required> int $src_width ]
    Parameter #7 [ <required> int $src_height ]
  }
  - Return [ bool ]
}
',
);
