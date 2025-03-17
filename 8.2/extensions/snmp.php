<?php

return array (
  'type' => 'extension',
  'name' => 'snmp',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'snmp',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'snmp',
    )),
    'removed' => NULL,
    'version' => '8.2.28',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp extension (php.net)',
        'url' => 'https://www.php.net/manual/book.snmp.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SNMP',
    1 => 'SNMPException',
  ),
  'functions' => 
  array (
    'snmpget' => 'snmpget',
    'snmpgetnext' => 'snmpgetnext',
    'snmpwalk' => 'snmpwalk',
    'snmprealwalk' => 'snmprealwalk',
    'snmpwalkoid' => 'snmpwalkoid',
    'snmpset' => 'snmpset',
    'snmp_get_quick_print' => 'snmp_get_quick_print',
    'snmp_set_quick_print' => 'snmp_set_quick_print',
    'snmp_set_enum_print' => 'snmp_set_enum_print',
    'snmp_set_oid_output_format' => 'snmp_set_oid_output_format',
    'snmp_set_oid_numeric_print' => 'snmp_set_oid_numeric_print',
    'snmp2_get' => 'snmp2_get',
    'snmp2_getnext' => 'snmp2_getnext',
    'snmp2_walk' => 'snmp2_walk',
    'snmp2_real_walk' => 'snmp2_real_walk',
    'snmp2_set' => 'snmp2_set',
    'snmp3_get' => 'snmp3_get',
    'snmp3_getnext' => 'snmp3_getnext',
    'snmp3_walk' => 'snmp3_walk',
    'snmp3_real_walk' => 'snmp3_real_walk',
    'snmp3_set' => 'snmp3_set',
    'snmp_set_valueretrieval' => 'snmp_set_valueretrieval',
    'snmp_get_valueretrieval' => 'snmp_get_valueretrieval',
    'snmp_read_mib' => 'snmp_read_mib',
  ),
  'constants' => 
  array (
    'SNMP_OID_OUTPUT_SUFFIX' => 1,
    'SNMP_OID_OUTPUT_MODULE' => 2,
    'SNMP_OID_OUTPUT_FULL' => 3,
    'SNMP_OID_OUTPUT_NUMERIC' => 4,
    'SNMP_OID_OUTPUT_UCD' => 5,
    'SNMP_OID_OUTPUT_NONE' => 6,
    'SNMP_VALUE_LIBRARY' => 0,
    'SNMP_VALUE_PLAIN' => 1,
    'SNMP_VALUE_OBJECT' => 2,
    'SNMP_BIT_STR' => 3,
    'SNMP_OCTET_STR' => 4,
    'SNMP_OPAQUE' => 68,
    'SNMP_NULL' => 5,
    'SNMP_OBJECT_ID' => 6,
    'SNMP_IPADDRESS' => 64,
    'SNMP_COUNTER' => 66,
    'SNMP_UNSIGNED' => 66,
    'SNMP_TIMETICKS' => 67,
    'SNMP_UINTEGER' => 71,
    'SNMP_INTEGER' => 2,
    'SNMP_COUNTER64' => 70,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
