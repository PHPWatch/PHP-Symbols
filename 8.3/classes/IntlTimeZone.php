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
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'DISPLAY_SHORT' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int DISPLAY_SHORT ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_LONG' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int DISPLAY_LONG ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_SHORT_GENERIC' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int DISPLAY_SHORT_GENERIC ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_LONG_GENERIC' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int DISPLAY_LONG_GENERIC ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_SHORT_GMT' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int DISPLAY_SHORT_GMT ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_LONG_GMT' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int DISPLAY_LONG_GMT ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_SHORT_COMMONLY_USED' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int DISPLAY_SHORT_COMMONLY_USED ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DISPLAY_GENERIC_LOCATION' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int DISPLAY_GENERIC_LOCATION ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'TYPE_ANY' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int TYPE_ANY ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'TYPE_CANONICAL' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int TYPE_CANONICAL ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'TYPE_CANONICAL_LOCATION' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int TYPE_CANONICAL_LOCATION ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
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
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'countEquivalentIDs' => 
    array (
      'name' => 'countEquivalentIDs',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
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
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createTimeZone' => 
    array (
      'name' => 'createTimeZone',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'region' => 
        array (
          'position' => 1,
          'name' => 'region',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rawOffset' => 
        array (
          'position' => 2,
          'name' => 'rawOffset',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
        'timezone' => 
        array (
          'position' => 0,
          'name' => 'timezone',
          'type' => 'DateTimeZone',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'isSystemId' => 
        array (
          'position' => 1,
          'name' => 'isSystemId',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
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
        'dst' => 
        array (
          'position' => 0,
          'name' => 'dst',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'style' => 
        array (
          'position' => 1,
          'name' => 'style',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlTimeZone::DISPLAY_LONG',
        ),
        'locale' => 
        array (
          'position' => 2,
          'name' => 'locale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => false,
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
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'local' => 
        array (
          'position' => 1,
          'name' => 'local',
          'type' => 'bool',
          'is_optional' => false,
          'has_default_value' => false,
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
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => false,
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
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getWindowsID' => 
    array (
      'name' => 'getWindowsID',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIDForWindowsID' => 
    array (
      'name' => 'getIDForWindowsID',
      'class' => 'IntlTimeZone',
      'parameters' => 
      array (
        'timezoneId' => 
        array (
          'position' => 0,
          'name' => 'timezoneId',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'region' => 
        array (
          'position' => 1,
          'name' => 'region',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
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
        'other' => 
        array (
          'position' => 0,
          'name' => 'other',
          'type' => 'IntlTimeZone',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => false,
  'is_read_only' => false,
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class IntlTimeZone ] {

  - Constants [11] {
    Constant [ public int DISPLAY_SHORT ] { 1 }
    Constant [ public int DISPLAY_LONG ] { 2 }
    Constant [ public int DISPLAY_SHORT_GENERIC ] { 3 }
    Constant [ public int DISPLAY_LONG_GENERIC ] { 4 }
    Constant [ public int DISPLAY_SHORT_GMT ] { 5 }
    Constant [ public int DISPLAY_LONG_GMT ] { 6 }
    Constant [ public int DISPLAY_SHORT_COMMONLY_USED ] { 7 }
    Constant [ public int DISPLAY_GENERIC_LOCATION ] { 8 }
    Constant [ public int TYPE_ANY ] { 0 }
    Constant [ public int TYPE_CANONICAL ] { 1 }
    Constant [ public int TYPE_CANONICAL_LOCATION ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [14] {
    Method [ <internal:intl> static public method countEquivalentIDs ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezoneId ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:intl> static public method createDefault ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlTimeZone ]
    }

    Method [ <internal:intl> static public method createEnumeration ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $countryOrRawOffset = null ]
      }
      - Tentative return [ IntlIterator|false ]
    }

    Method [ <internal:intl> static public method createTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezoneId ]
      }
      - Tentative return [ ?IntlTimeZone ]
    }

    Method [ <internal:intl> static public method createTimeZoneIDEnumeration ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $type ]
        Parameter #1 [ <optional> ?string $region = null ]
        Parameter #2 [ <optional> ?int $rawOffset = null ]
      }
      - Tentative return [ IntlIterator|false ]
    }

    Method [ <internal:intl> static public method fromDateTimeZone ] {

      - Parameters [1] {
        Parameter #0 [ <required> DateTimeZone $timezone ]
      }
      - Tentative return [ ?IntlTimeZone ]
    }

    Method [ <internal:intl> static public method getCanonicalID ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $timezoneId ]
        Parameter #1 [ <optional> &$isSystemId = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getEquivalentID ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $timezoneId ]
        Parameter #1 [ <required> int $offset ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getGMT ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlTimeZone ]
    }

    Method [ <internal:intl> static public method getRegion ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezoneId ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getTZDataVersion ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getUnknown ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlTimeZone ]
    }

    Method [ <internal:intl> static public method getWindowsID ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $timezoneId ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getIDForWindowsID ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $timezoneId ]
        Parameter #1 [ <optional> ?string $region = null ]
      }
      - Tentative return [ string|false ]
    }
  }

  - Properties [0] {
  }

  - Methods [11] {
    Method [ <internal:intl, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getDisplayName ] {

      - Parameters [3] {
        Parameter #0 [ <optional> bool $dst = false ]
        Parameter #1 [ <optional> int $style = IntlTimeZone::DISPLAY_LONG ]
        Parameter #2 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getDSTSavings ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getID ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getOffset ] {

      - Parameters [4] {
        Parameter #0 [ <required> float $timestamp ]
        Parameter #1 [ <required> bool $local ]
        Parameter #2 [ <required> &$rawOffset ]
        Parameter #3 [ <required> &$dstOffset ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method getRawOffset ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method hasSameRules ] {

      - Parameters [1] {
        Parameter #0 [ <required> IntlTimeZone $other ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> public method toDateTimeZone ] {

      - Parameters [0] {
      }
      - Tentative return [ DateTimeZone|false ]
    }

    Method [ <internal:intl> public method useDaylightTime ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }
  }
}
',
);
