<?php

return array (
  'type' => 'function',
  'name' => 'session_set_save_handler',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'session_set_save_handler',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'session_set_save_handler function (php.net)',
        'url' => 'https://www.php.net/manual/function.session-set-save-handler.php',
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
  'extension' => 'session',
  'toString' => 'Function [ <internal:session> function session_set_save_handler ] {

  - Parameters [9] {
    Parameter #0 [ <required> $open ]
    Parameter #1 [ <optional> $close = <default> ]
    Parameter #2 [ <optional> callable $read = <default> ]
    Parameter #3 [ <optional> callable $write = <default> ]
    Parameter #4 [ <optional> callable $destroy = <default> ]
    Parameter #5 [ <optional> callable $gc = <default> ]
    Parameter #6 [ <optional> ?callable $create_sid = null ]
    Parameter #7 [ <optional> ?callable $validate_sid = null ]
    Parameter #8 [ <optional> ?callable $update_timestamp = null ]
  }
  - Return [ bool ]
}
',
);
