<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_waitid',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_waitid',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_waitid function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-waitid.php',
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
  'extension' => 'pcntl',
  'toString' => 'Function [ <internal:pcntl> function pcntl_waitid ] {

  - Parameters [5] {
    Parameter #0 [ <optional> int $idtype = P_ALL ]
    Parameter #1 [ <optional> ?int $id = null ]
    Parameter #2 [ <optional> &$info = [] ]
    Parameter #3 [ <optional> int $flags = WEXITED ]
    Parameter #4 [ <optional> &$resource_usage = [] ]
  }
  - Return [ bool ]
}
',
);
