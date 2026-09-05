<?php

return array (
  'type' => 'function',
  'name' => 'spl_classes',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'spl_classes',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'spl_classes function (php.net)',
        'url' => 'https://www.php.net/manual/function.spl-classes.php',
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
  'extension' => 'SPL',
  'toString' => 'Function [ <internal, deprecated:SPL> function spl_classes ] {

  - Parameters [0] {
  }
  - Return [ array ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'message' => 'use ReflectionExtension::getClassNames() instead',
          'since' => '8.6',
        ),
      ),
    ),
  ),
);
