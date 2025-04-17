<?php

return array (
  'type' => 'class',
  'name' => 'Random\\IntervalBoundary',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Random\\IntervalBoundary',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Random\\IntervalBoundary class (php.net)',
        'url' => 'https://www.php.net/manual/class.random-intervalboundary.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'constants' => 
  array (
    'ClosedOpen' => 
    \Random\IntervalBoundary::ClosedOpen,
    'ClosedClosed' => 
    \Random\IntervalBoundary::ClosedClosed,
    'OpenClosed' => 
    \Random\IntervalBoundary::OpenClosed,
    'OpenOpen' => 
    \Random\IntervalBoundary::OpenOpen,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'Random\\IntervalBoundary',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    'cases' => 
    array (
      'name' => 'cases',
      'class' => 'Random\\IntervalBoundary',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'random',
  'toString' => 'Enum [ <internal:random> enum Random\\IntervalBoundary implements UnitEnum ] {

  - Enum cases [4] {
    Case ClosedOpen
    Case ClosedClosed
    Case OpenClosed
    Case OpenOpen
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:random, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }

  - Properties [1] {
    Property [ public protected(set) readonly string $name ]
  }

  - Methods [0] {
  }
}
',
);
