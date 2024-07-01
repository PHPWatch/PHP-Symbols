<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_setpriority',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_setpriority',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_setpriority function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-setpriority.php',
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
  'toString' => 'Function [ <internal:pcntl> function pcntl_setpriority ] {

  - Parameters [3] {
    Parameter #0 [ <required> int $priority ]
    Parameter #1 [ <optional> ?int $process_id = null ]
    Parameter #2 [ <optional> int $mode = PRIO_PROCESS ]
  }
  - Return [ bool ]
}
',
);
