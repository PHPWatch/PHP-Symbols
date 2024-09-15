<?php

return array (
  'type' => 'function',
  'name' => 'imap_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'imap_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imap_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.imap-open.php',
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
  'toString' => 'Function [ <internal:imap> function imap_open ] {

  - Parameters [6] {
    Parameter #0 [ <required> string $mailbox ]
    Parameter #1 [ <required> string $user ]
    Parameter #2 [ <required> string $password ]
    Parameter #3 [ <optional> int $flags = 0 ]
    Parameter #4 [ <optional> int $retries = 0 ]
    Parameter #5 [ <optional> array $options = [] ]
  }
  - Return [ IMAP\\Connection|false ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
