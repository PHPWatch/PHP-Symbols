<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_getpriority',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_getpriority',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_getpriority function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-getpriority.php',
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
  'extension' => 'pcntl',
  'toString' => 'Function [ <internal:pcntl> function pcntl_getpriority ] {

  - Parameters [2] {
    Parameter #0 [ <optional> ?int $process_id = null ]
    Parameter #1 [ <optional> int $mode = PRIO_PROCESS ]
  }
  - Return [ int|false ]
}
',
);
