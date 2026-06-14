<?php

return array (
  'type' => 'class',
  'name' => 'Io\\Poll\\Event',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Io\\Poll\\Event',
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
        'name' => 'Io\\Poll\\Event interface (php.net)',
        'url' => 'https://www.php.net/manual/class.io-poll-event.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Io\\Poll',
  'constants' => 
  array (
    'Read' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event Read ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Write' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event Write ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Error' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event Error ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'HangUp' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event HangUp ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'ReadHangUp' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event ReadHangUp ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'OneShot' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event OneShot ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'EdgeTriggered' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Io\\Poll\\Event EdgeTriggered ] { Object }
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
      'class' => 'Io\\Poll\\Event',
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
      'class' => 'Io\\Poll\\Event',
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
  'toString' => 'Enum [ <internal:standard> enum Io\\Poll\\Event implements UnitEnum ] {

  - Enum cases [7] {
    Case Read
    Case Write
    Case Error
    Case HangUp
    Case ReadHangUp
    Case OneShot
    Case EdgeTriggered
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
