<?php

return array (
  'type' => 'function',
  'name' => 'oci_bind_array_by_name',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'oci_bind_array_by_name',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'oci_bind_array_by_name function (php.net)',
        'url' => 'https://www.php.net/manual/function.oci-bind-array-by-name.php',
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
  'extension' => 'oci8',
  'toString' => 'Function [ <internal:oci8> function oci_bind_array_by_name ] {

  - Parameters [6] {
    Parameter #0 [ <required> $statement ]
    Parameter #1 [ <required> string $param ]
    Parameter #2 [ <required> &$var ]
    Parameter #3 [ <required> int $max_array_length ]
    Parameter #4 [ <optional> int $max_item_length = -1 ]
    Parameter #5 [ <optional> int $type = SQLT_AFC ]
  }
  - Return [ bool ]
}
',
);
