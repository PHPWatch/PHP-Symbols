<?php

return array (
  'type' => 'function',
  'name' => 'mb_eregi_replace',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_eregi_replace',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_eregi_replace function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-eregi-replace.php',
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
    'nullable' => true,
  ),
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal, deprecated:mbstring> function mb_eregi_replace ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $pattern ]
    Parameter #1 [ <required> string $replacement ]
    Parameter #2 [ <required> string $string ]
    Parameter #3 [ <optional> ?string $options = null ]
  }
  - Return [ string|false|null ]
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
