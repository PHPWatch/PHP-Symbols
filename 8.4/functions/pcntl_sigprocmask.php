<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_sigprocmask',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_sigprocmask',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_sigprocmask function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-sigprocmask.php',
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
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'pcntl',
  'toString' => 'Function [ <internal:pcntl> function pcntl_sigprocmask ] {

  - Parameters [3] {
    Parameter #0 [ <required> int $mode ]
    Parameter #1 [ <required> array $signals ]
    Parameter #2 [ <optional> &$old_signals = null ]
  }
  - Return [ bool ]
}
',
);
