<?php

return array (
  'type' => 'class',
  'name' => 'Pcntl\\QosClass',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Pcntl\\QosClass',
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
        'name' => 'Pcntl\\QosClass class (php.net)',
        'url' => 'https://www.php.net/manual/class.pcntl-qosclass.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'constants' => 
  array (
    'UserInteractive' => 
    \Pcntl\QosClass::UserInteractive,
    'UserInitiated' => 
    \Pcntl\QosClass::UserInitiated,
    'Default' => 
    \Pcntl\QosClass::Default,
    'Utility' => 
    \Pcntl\QosClass::Utility,
    'Background' => 
    \Pcntl\QosClass::Background,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'Pcntl\\QosClass',
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
      'class' => 'Pcntl\\QosClass',
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
  'toString' => 'Enum [ <internal:pcntl> enum Pcntl\\QosClass implements UnitEnum ] {

  - Enum cases [5] {
    Case UserInteractive
    Case UserInitiated
    Case Default
    Case Utility
    Case Background
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:pcntl, prototype UnitEnum> static public method cases ] {

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
