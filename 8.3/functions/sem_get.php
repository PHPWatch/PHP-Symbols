<?php

return array (
  'type' => 'function',
  'name' => 'sem_get',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'sem_get',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sem_get function (php.net)',
        'url' => 'https://www.php.net/manual/function.sem-get.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'sysvsem',
  'toString' => 'Function [ <internal:sysvsem> function sem_get ] {

  - Parameters [4] {
    Parameter #0 [ <required> int $key ]
    Parameter #1 [ <optional> int $max_acquire = 1 ]
    Parameter #2 [ <optional> int $permissions = 0666 ]
    Parameter #3 [ <optional> bool $auto_release = true ]
  }
  - Return [ SysvSemaphore|false ]
}
',
);
