<?php

return array (
  'type' => 'function',
  'name' => 'imap_scan',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_scan',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_scan function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-scan.php',
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
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_scan ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $reference ]
    Parameter #2 [ <required> string $pattern ]
    Parameter #3 [ <required> string $content ]
  }
  - Return [ array|false ]
}
',
);
