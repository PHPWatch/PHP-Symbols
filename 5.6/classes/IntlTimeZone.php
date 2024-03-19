<?php

return array (
  'type' => 'class',
  'name' => 'IntlTimeZone',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlTimeZone',
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
        'name' => 'IntlTimeZone class (php.net)',
        'url' => 'https://www.php.net/manual/class.intltimezone.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'DISPLAY_SHORT' => 1,
    'DISPLAY_LONG' => 2,
    'DISPLAY_SHORT_GENERIC' => 3,
    'DISPLAY_LONG_GENERIC' => 4,
    'DISPLAY_SHORT_GMT' => 5,
    'DISPLAY_LONG_GMT' => 6,
    'DISPLAY_SHORT_COMMONLY_USED' => 7,
    'DISPLAY_GENERIC_LOCATION' => 8,
    'TYPE_ANY' => 0,
    'TYPE_CANONICAL' => 1,
    'TYPE_CANONICAL_LOCATION' => 2,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'createTimeZone' => 
    array (
      'name' => 'createTimeZone',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromDateTimeZone' => 
    array (
      'name' => 'fromDateTimeZone',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createDefault' => 
    array (
      'name' => 'createDefault',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getGMT' => 
    array (
      'name' => 'getGMT',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getUnknown' => 
    array (
      'name' => 'getUnknown',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createEnumeration' => 
    array (
      'name' => 'createEnumeration',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'countryOrRawOffset' => 
        array (
          'position' => 0,
          'name' => 'countryOrRawOffset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'countEquivalentIDs' => 
    array (
      'name' => 'countEquivalentIDs',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createTimeZoneIDEnumeration' => 
    array (
      'name' => 'createTimeZoneIDEnumeration',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneType' => 
        array (
          'position' => 0,
          'name' => 'zoneType',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'region' => 
        array (
          'position' => 1,
          'name' => 'region',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rawOffset' => 
        array (
          'position' => 2,
          'name' => 'rawOffset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCanonicalID' => 
    array (
      'name' => 'getCanonicalID',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isSystemID' => 
        array (
          'position' => 1,
          'name' => 'isSystemID',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRegion' => 
    array (
      'name' => 'getRegion',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTZDataVersion' => 
    array (
      'name' => 'getTZDataVersion',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getEquivalentID' => 
    array (
      'name' => 'getEquivalentID',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'zoneId' => 
        array (
          'position' => 0,
          'name' => 'zoneId',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getID' => 
    array (
      'name' => 'getID',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'useDaylightTime' => 
    array (
      'name' => 'useDaylightTime',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getOffset' => 
    array (
      'name' => 'getOffset',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'date' => 
        array (
          'position' => 0,
          'name' => 'date',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'local' => 
        array (
          'position' => 1,
          'name' => 'local',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rawOffset' => 
        array (
          'position' => 2,
          'name' => 'rawOffset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dstOffset' => 
        array (
          'position' => 3,
          'name' => 'dstOffset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRawOffset' => 
    array (
      'name' => 'getRawOffset',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasSameRules' => 
    array (
      'name' => 'hasSameRules',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'otherTimeZone' => 
        array (
          'position' => 0,
          'name' => 'otherTimeZone',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayName' => 
    array (
      'name' => 'getDisplayName',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'isDaylight' => 
        array (
          'position' => 0,
          'name' => 'isDaylight',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'style' => 
        array (
          'position' => 1,
          'name' => 'style',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 2,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDSTSavings' => 
    array (
      'name' => 'getDSTSavings',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toDateTimeZone' => 
    array (
      'name' => 'toDateTimeZone',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
