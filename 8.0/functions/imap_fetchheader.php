<?php

return array (
  'type' => 'function',
  'name' => 'imap_fetchheader',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_fetchheader',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_fetchheader function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-fetchheader.php',
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
  'toString' => 'Function [ <internal:imap> function imap_fetchheader ] {

  - Parameters [3] {
    Parameter #0 [ <required> $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ string|false ]
}
',
);
