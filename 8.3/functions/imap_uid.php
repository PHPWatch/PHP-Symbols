<?php

return array (
  'type' => 'function',
  'name' => 'imap_uid',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_uid',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_uid function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-uid.php',
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
  'toString' => 'Function [ <internal:imap> function imap_uid ] {

  - Parameters [2] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> int $message_num ]
  }
  - Return [ int|false ]
}
',
);
