<?php

return array (
  'type' => 'enum',
  'name' => 'StreamErrorStore',
  'meta' => 
  array (
    'type' => 'enum',
    'name' => 'StreamErrorStore',
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
        'name' => 'StreamErrorStore interface (php.net)',
        'url' => 'https://www.php.net/manual/class.streamerrorstore.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'Auto' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public StreamErrorStore Auto ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'None' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public StreamErrorStore None ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'NonTerminating' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public StreamErrorStore NonTerminating ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Terminating' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public StreamErrorStore Terminating ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'All' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public StreamErrorStore All ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
  ),
  'methods' => 
  array (
    'cases' => 
    array (
      'name' => 'cases',
      'class' => 'StreamErrorStore',
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
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'StreamErrorStore',
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
  'extension' => 'standard',
  'toString' => 'Enum [ <internal:standard> enum StreamErrorStore implements UnitEnum ] {

  - Enum cases [5] {
    Case Auto
    Case None
    Case NonTerminating
    Case Terminating
    Case All
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:standard, prototype UnitEnum> static public method cases ] {

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
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => false,
  'is_read_only' => false,
);
