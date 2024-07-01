<?php

return array (
  'type' => 'function',
  'name' => 'imap_mail',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_mail',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_mail function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-mail.php',
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
  'toString' => 'Function [ <internal:imap> function imap_mail ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $to ]
    Parameter #1 [ <required> string $subject ]
    Parameter #2 [ <required> string $message ]
    Parameter #3 [ <optional> ?string $additional_headers = null ]
    Parameter #4 [ <optional> ?string $cc = null ]
    Parameter #5 [ <optional> ?string $bcc = null ]
    Parameter #6 [ <optional> ?string $return_path = null ]
  }
  - Return [ bool ]
}
',
);
