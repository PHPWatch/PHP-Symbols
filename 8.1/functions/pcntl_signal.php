<?php

return array (
  'type' => 'function',
  'name' => 'pcntl_signal',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'pcntl_signal',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl_signal function (php.net)',
        'url' => 'https://www.php.net/manual/function.pcntl-signal.php',
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
  'toString' => 'Function [ <internal:pcntl> function pcntl_signal ] {

  - Parameters [3] {
    Parameter #0 [ <required> int $signal ]
    Parameter #1 [ <required> $handler ]
    Parameter #2 [ <optional> bool $restart_syscalls = true ]
  }
  - Return [ bool ]
}
',
);
