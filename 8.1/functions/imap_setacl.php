<?php

return array (
  'type' => 'function',
  'name' => 'imap_setacl',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_setacl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_setacl function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-setacl.php',
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
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_setacl ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $mailbox ]
    Parameter #2 [ <required> string $user_id ]
    Parameter #3 [ <required> string $rights ]
  }
  - Return [ bool ]
}
',
);
