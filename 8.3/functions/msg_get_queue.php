<?php

return array (
  'type' => 'function',
  'name' => 'msg_get_queue',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'msg_get_queue',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'msg_get_queue function (php.net)',
        'url' => 'https://www.php.net/manual/function.msg-get-queue.php',
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
  'extension' => 'sysvmsg',
  'toString' => 'Function [ <internal:sysvmsg> function msg_get_queue ] {

  - Parameters [2] {
    Parameter #0 [ <required> int $key ]
    Parameter #1 [ <optional> int $permissions = 0666 ]
  }
  - Return [ SysvMessageQueue|false ]
}
',
);
