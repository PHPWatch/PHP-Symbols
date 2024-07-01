<?php

return array (
  'type' => 'function',
  'name' => 'sem_acquire',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sem_acquire',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sem_acquire function (php.net)',
        'url' => 'https://www.php.net/manual/function.sem-acquire.php',
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
  'extension' => 'sysvsem',
  'toString' => 'Function [ <internal:sysvsem> function sem_acquire ] {

  - Parameters [2] {
    Parameter #0 [ <required> SysvSemaphore $semaphore ]
    Parameter #1 [ <optional> bool $non_blocking = false ]
  }
  - Return [ bool ]
}
',
);
