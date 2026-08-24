<?php

return array (
  'type' => 'enum',
  'name' => 'Snmp\\OidOutput',
  'meta' => 
  array (
    'type' => 'enum',
    'name' => 'Snmp\\OidOutput',
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
        'name' => 'Snmp\\OidOutput interface (php.net)',
        'url' => 'https://www.php.net/manual/class.snmp-oidoutput.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Snmp',
  'constants' => 
  array (
    'Suffix' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput Suffix ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Module' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput Module ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Full' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput Full ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Numeric' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput Numeric ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Ucd' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput Ucd ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'None' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\OidOutput None ] { Object }
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
      'class' => 'Snmp\\OidOutput',
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
      'class' => 'Snmp\\OidOutput',
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
  'extension' => 'snmp',
  'toString' => 'Enum [ <internal:snmp> enum Snmp\\OidOutput implements UnitEnum ] {

  - Enum cases [6] {
    Case Suffix
    Case Module
    Case Full
    Case Numeric
    Case Ucd
    Case None
  }

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:snmp, prototype UnitEnum> static public method cases ] {

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
