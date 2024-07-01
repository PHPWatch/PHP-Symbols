<?php

return array (
  'type' => 'function',
  'name' => 'imap_setflag_full',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_setflag_full',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_setflag_full function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-setflag-full.php',
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
  'toString' => 'Function [ <internal:imap> function imap_setflag_full ] {

  - Parameters [4] {
    Parameter #0 [ <required> IMAP\\Connection $imap ]
    Parameter #1 [ <required> string $sequence ]
    Parameter #2 [ <required> string $flag ]
    Parameter #3 [ <optional> int $options = 0 ]
  }
  - Return [ bool ]
}
',
);
