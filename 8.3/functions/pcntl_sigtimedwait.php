<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_sigtimedwait',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_sigtimedwait',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_sigtimedwait function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-sigtimedwait.php',
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
  'extension' => 'pcntl',
  'toString' => 'Function [ <internal:pcntl> function pcntl_sigtimedwait ] {

  - Parameters [4] {
    Parameter #0 [ <required> array $signals ]
    Parameter #1 [ <optional> &$info = [] ]
    Parameter #2 [ <optional> int $seconds = 0 ]
    Parameter #3 [ <optional> int $nanoseconds = 0 ]
  }
  - Return [ int|false ]
}
',
);
