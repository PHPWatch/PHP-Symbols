<?php

return array (
  'type' => 'function',
  'name' => 'mb_send_mail',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mb_send_mail',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mb_send_mail function (php.net)',
        'url' => 'https://www.php.net/manual/function.mb-send-mail.php',
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
  'extension' => 'mbstring',
  'toString' => 'Function [ <internal:mbstring> function mb_send_mail ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $to ]
    Parameter #1 [ <required> string $subject ]
    Parameter #2 [ <required> string $message ]
    Parameter #3 [ <optional> array|string $additional_headers = [] ]
    Parameter #4 [ <optional> ?string $additional_params = null ]
  }
  - Return [ bool ]
}
',
);
