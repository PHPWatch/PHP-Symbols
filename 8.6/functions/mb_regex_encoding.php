<?php

return array (
  'type' => 'function',
  'name' => 'mb_regex_encoding',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_regex_encoding',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_regex_encoding function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-regex-encoding.php',
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
    'nullable' => false,
  ),
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal, deprecated:mbstring> function mb_regex_encoding ] {

  - Parameters [1] {
    Parameter #0 [ <optional> ?string $encoding = null ]
  }
  - Return [ string|bool ]
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
