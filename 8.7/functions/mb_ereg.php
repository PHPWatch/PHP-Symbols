<?php

return array (
  'type' => 'function',
  'name' => 'mb_ereg',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_ereg',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_ereg function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-ereg.php',
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
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal, deprecated:mbstring> function mb_ereg ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> string $string ]
    Parameter #2 [ <optional> &$matches = null ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.6',
          'message' => 'because the underlying library is no longer maintained',
        ),
      ),
    ),
  ),
);
