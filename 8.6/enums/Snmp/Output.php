<?php

return array (
  'type' => 'enum',
  'name' => 'Snmp\\Output',
  'meta' => 
  array (
    'type' => 'enum',
    'name' => 'Snmp\\Output',
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
        'name' => 'Snmp\\Output interface (php.net)',
        'url' => 'https://www.php.net/manual/class.snmp-output.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Snmp',
  'constants' => 
  array (
    'NumericIndex' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output NumericIndex ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'EnumPrint' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output EnumPrint ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'EscapeQuotes' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output EscapeQuotes ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'QuickPrint' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output QuickPrint ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'NumericTimeticks' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output NumericTimeticks ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'HexText' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output HexText ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'DontPrintUnits' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output DontPrintUnits ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'ExtendedIndex' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Snmp\\Output ExtendedIndex ] { Object }
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
      'class' => 'Snmp\\Output',
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
      'class' => 'Snmp\\Output',
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
  'toString' => 'Enum [ <internal:snmp> enum Snmp\\Output implements UnitEnum ] {

  - Enum cases [8] {
    Case NumericIndex
    Case EnumPrint
    Case EscapeQuotes
    Case QuickPrint
    Case NumericTimeticks
    Case HexText
    Case DontPrintUnits
    Case ExtendedIndex
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
