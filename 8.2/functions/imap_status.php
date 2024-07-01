<?php

return array (
  'type' => 'function',
  'name' => 'imap_status',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_status',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_status function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-status.php',
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
  'toString' => 'Function [ <internal:imap> function imap_status ] {

  - Parameters [3] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $mailbox ]
    Parameter #2 [ <required> int $flags ]
  }
  - Return [ stdClass|false ]
}
',
);
