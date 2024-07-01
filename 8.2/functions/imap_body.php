<?php

return array (
  'type' => 'function',
  'name' => 'imap_body',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_body',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_body function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-body.php',
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
  'toString' => 'Function [ <internal:imap> function imap_body ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> int $message_num ]
    Parameter #2 [ <optional> int $flags = 0 ]
  }
  - Return [ string|false ]
}
',
);
