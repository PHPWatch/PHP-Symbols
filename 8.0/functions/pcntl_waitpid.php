<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_waitpid',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_waitpid',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_waitpid function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-waitpid.php',
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
    ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pcntl',
  'toString' => 'Function [ <internal:pcntl> function pcntl_waitpid ] {

  - Parameters [4] {
    Parameter #0 [ <required> int $process_id ]
    Parameter #1 [ <required> &$status ]
    Parameter #2 [ <optional> int $flags = 0 ]
    Parameter #3 [ <optional> &$resource_usage = [] ]
  }
  - Return [ int ]
}
',
);
