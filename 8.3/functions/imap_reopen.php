<?php

return array (
  'type' => 'function',
  'name' => 'imap_reopen',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_reopen',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_reopen function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-reopen.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'imap',
  'toString' => 'Function [ <internal:imap> function imap_reopen ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $mailbox ]
    Parameter #2 [ <optional> int $flags = 0 ]
    Parameter #3 [ <optional> int $retries = 0 ]
  }
  - Return [ bool ]
}
',
);
