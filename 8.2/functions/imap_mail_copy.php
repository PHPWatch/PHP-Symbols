<?php

return array (
  'type' => 'function',
  'name' => 'imap_mail_copy',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_mail_copy',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_mail_copy function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-mail-copy.php',
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
  'toString' => 'Function [ <internal:imap> function imap_mail_copy ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $message_nums ]
    Parameter #2 [ <required> string $mailbox ]
    Parameter #3 [ <optional> int $flags = 0 ]
  }
  - Return [ bool ]
}
',
);
