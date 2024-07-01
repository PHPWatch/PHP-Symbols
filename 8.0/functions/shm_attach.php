<?php

return array (
  'type' => 'function',
  'name' => 'shm_attach',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'shm_attach',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'shm_attach function (php.net)',
        'url' => 'https://www.php.net/manual/function.shm-attach.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'sysvshm',
  'toString' => 'Function [ <internal:sysvshm> function shm_attach ] {

  - Parameters [3] {
    Parameter #0 [ <required> int $key ]
    Parameter #1 [ <optional> ?int $size = null ]
    Parameter #2 [ <optional> int $permissions = 0666 ]
  }
  - Return [ SysvSharedMemory|false ]
}
',
);
