<?php

return array (
  'type' => 'class',
  'name' => 'UConverter',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'UConverter',
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
        'name' => 'UConverter interface (php.net)',
        'url' => 'https://www.php.net/manual/class.uconverter.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'REASON_UNASSIGNED' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public integer REASON_UNASSIGNED ] { 0 }
',
      'visibility' => 256,
    ),
    'REASON_ILLEGAL' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public integer REASON_ILLEGAL ] { 1 }
',
      'visibility' => 256,
    ),
    'REASON_IRREGULAR' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public integer REASON_IRREGULAR ] { 2 }
',
      'visibility' => 256,
    ),
    'REASON_RESET' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public integer REASON_RESET ] { 3 }
',
      'visibility' => 256,
    ),
    'REASON_CLOSE' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public integer REASON_CLOSE ] { 4 }
',
      'visibility' => 256,
    ),
    'REASON_CLONE' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public integer REASON_CLONE ] { 5 }
',
      'visibility' => 256,
    ),
    'UNSUPPORTED_CONVERTER' => 
    array (
      'value' => -1,
      'toString' => 'Constant [ public integer UNSUPPORTED_CONVERTER ] { -1 }
',
      'visibility' => 256,
    ),
    'SBCS' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public integer SBCS ] { 0 }
',
      'visibility' => 256,
    ),
    'DBCS' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public integer DBCS ] { 1 }
',
      'visibility' => 256,
    ),
    'MBCS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public integer MBCS ] { 2 }
',
      'visibility' => 256,
    ),
    'LATIN_1' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public integer LATIN_1 ] { 3 }
',
      'visibility' => 256,
    ),
    'UTF8' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public integer UTF8 ] { 4 }
',
      'visibility' => 256,
    ),
    'UTF16_BigEndian' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public integer UTF16_BigEndian ] { 5 }
',
      'visibility' => 256,
    ),
    'UTF16_LittleEndian' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public integer UTF16_LittleEndian ] { 6 }
',
      'visibility' => 256,
    ),
    'UTF32_BigEndian' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public integer UTF32_BigEndian ] { 7 }
',
      'visibility' => 256,
    ),
    'UTF32_LittleEndian' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public integer UTF32_LittleEndian ] { 8 }
',
      'visibility' => 256,
    ),
    'EBCDIC_STATEFUL' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public integer EBCDIC_STATEFUL ] { 9 }
',
      'visibility' => 256,
    ),
    'ISO_2022' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public integer ISO_2022 ] { 10 }
',
      'visibility' => 256,
    ),
    'LMBCS_1' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public integer LMBCS_1 ] { 11 }
',
      'visibility' => 256,
    ),
    'LMBCS_2' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public integer LMBCS_2 ] { 12 }
',
      'visibility' => 256,
    ),
    'LMBCS_3' => 
    array (
      'value' => 13,
      'toString' => 'Constant [ public integer LMBCS_3 ] { 13 }
',
      'visibility' => 256,
    ),
    'LMBCS_4' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public integer LMBCS_4 ] { 14 }
',
      'visibility' => 256,
    ),
    'LMBCS_5' => 
    array (
      'value' => 15,
      'toString' => 'Constant [ public integer LMBCS_5 ] { 15 }
',
      'visibility' => 256,
    ),
    'LMBCS_6' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public integer LMBCS_6 ] { 16 }
',
      'visibility' => 256,
    ),
    'LMBCS_8' => 
    array (
      'value' => 17,
      'toString' => 'Constant [ public integer LMBCS_8 ] { 17 }
',
      'visibility' => 256,
    ),
    'LMBCS_11' => 
    array (
      'value' => 18,
      'toString' => 'Constant [ public integer LMBCS_11 ] { 18 }
',
      'visibility' => 256,
    ),
    'LMBCS_16' => 
    array (
      'value' => 19,
      'toString' => 'Constant [ public integer LMBCS_16 ] { 19 }
',
      'visibility' => 256,
    ),
    'LMBCS_17' => 
    array (
      'value' => 20,
      'toString' => 'Constant [ public integer LMBCS_17 ] { 20 }
',
      'visibility' => 256,
    ),
    'LMBCS_18' => 
    array (
      'value' => 21,
      'toString' => 'Constant [ public integer LMBCS_18 ] { 21 }
',
      'visibility' => 256,
    ),
    'LMBCS_19' => 
    array (
      'value' => 22,
      'toString' => 'Constant [ public integer LMBCS_19 ] { 22 }
',
      'visibility' => 256,
    ),
    'LMBCS_LAST' => 
    array (
      'value' => 22,
      'toString' => 'Constant [ public integer LMBCS_LAST ] { 22 }
',
      'visibility' => 256,
    ),
    'HZ' => 
    array (
      'value' => 23,
      'toString' => 'Constant [ public integer HZ ] { 23 }
',
      'visibility' => 256,
    ),
    'SCSU' => 
    array (
      'value' => 24,
      'toString' => 'Constant [ public integer SCSU ] { 24 }
',
      'visibility' => 256,
    ),
    'ISCII' => 
    array (
      'value' => 25,
      'toString' => 'Constant [ public integer ISCII ] { 25 }
',
      'visibility' => 256,
    ),
    'US_ASCII' => 
    array (
      'value' => 26,
      'toString' => 'Constant [ public integer US_ASCII ] { 26 }
',
      'visibility' => 256,
    ),
    'UTF7' => 
    array (
      'value' => 27,
      'toString' => 'Constant [ public integer UTF7 ] { 27 }
',
      'visibility' => 256,
    ),
    'BOCU1' => 
    array (
      'value' => 28,
      'toString' => 'Constant [ public integer BOCU1 ] { 28 }
',
      'visibility' => 256,
    ),
    'UTF16' => 
    array (
      'value' => 29,
      'toString' => 'Constant [ public integer UTF16 ] { 29 }
',
      'visibility' => 256,
    ),
    'UTF32' => 
    array (
      'value' => 30,
      'toString' => 'Constant [ public integer UTF32 ] { 30 }
',
      'visibility' => 256,
    ),
    'CESU8' => 
    array (
      'value' => 31,
      'toString' => 'Constant [ public integer CESU8 ] { 31 }
',
      'visibility' => 256,
    ),
    'IMAP_MAILBOX' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public integer IMAP_MAILBOX ] { 32 }
',
      'visibility' => 256,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'destination_encoding' => 
        array (
          'position' => 0,
          'name' => 'destination_encoding',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'source_encoding' => 
        array (
          'position' => 1,
          'name' => 'source_encoding',
          'type' => NULL,
          'is_optional' => true,
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
    'setSourceEncoding' => 
    array (
      'name' => 'setSourceEncoding',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'encoding' => 
        array (
          'position' => 0,
          'name' => 'encoding',
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
    'setDestinationEncoding' => 
    array (
      'name' => 'setDestinationEncoding',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'encoding' => 
        array (
          'position' => 0,
          'name' => 'encoding',
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
    'getSourceEncoding' => 
    array (
      'name' => 'getSourceEncoding',
      'class' => 'UConverter',
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
    'getDestinationEncoding' => 
    array (
      'name' => 'getDestinationEncoding',
      'class' => 'UConverter',
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
    'getSourceType' => 
    array (
      'name' => 'getSourceType',
      'class' => 'UConverter',
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
    'getDestinationType' => 
    array (
      'name' => 'getDestinationType',
      'class' => 'UConverter',
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
    'getSubstChars' => 
    array (
      'name' => 'getSubstChars',
      'class' => 'UConverter',
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
    'setSubstChars' => 
    array (
      'name' => 'setSubstChars',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'chars' => 
        array (
          'position' => 0,
          'name' => 'chars',
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
    'toUCallback' => 
    array (
      'name' => 'toUCallback',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'reason' => 
        array (
          'position' => 0,
          'name' => 'reason',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'source' => 
        array (
          'position' => 1,
          'name' => 'source',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'codeUnits' => 
        array (
          'position' => 2,
          'name' => 'codeUnits',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 3,
          'name' => 'error',
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
    'fromUCallback' => 
    array (
      'name' => 'fromUCallback',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'reason' => 
        array (
          'position' => 0,
          'name' => 'reason',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'source' => 
        array (
          'position' => 1,
          'name' => 'source',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'codePoint' => 
        array (
          'position' => 2,
          'name' => 'codePoint',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error' => 
        array (
          'position' => 3,
          'name' => 'error',
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
    'convert' => 
    array (
      'name' => 'convert',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'str' => 
        array (
          'position' => 0,
          'name' => 'str',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'reverse' => 
        array (
          'position' => 1,
          'name' => 'reverse',
          'type' => NULL,
          'is_optional' => true,
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
    'transcode' => 
    array (
      'name' => 'transcode',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'str' => 
        array (
          'position' => 0,
          'name' => 'str',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'toEncoding' => 
        array (
          'position' => 1,
          'name' => 'toEncoding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fromEncoding' => 
        array (
          'position' => 2,
          'name' => 'fromEncoding',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => 'array',
          'is_optional' => true,
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
      'class' => 'UConverter',
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
      'class' => 'UConverter',
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
    'reasonText' => 
    array (
      'name' => 'reasonText',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'reason' => 
        array (
          'position' => 0,
          'name' => 'reason',
          'type' => NULL,
          'is_optional' => true,
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
    'getAvailable' => 
    array (
      'name' => 'getAvailable',
      'class' => 'UConverter',
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
    'getAliases' => 
    array (
      'name' => 'getAliases',
      'class' => 'UConverter',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
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
    'getStandards' => 
    array (
      'name' => 'getStandards',
      'class' => 'UConverter',
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> class UConverter ] {

  - Constants [41] {
    Constant [ public integer REASON_UNASSIGNED ] { 0 }
    Constant [ public integer REASON_ILLEGAL ] { 1 }
    Constant [ public integer REASON_IRREGULAR ] { 2 }
    Constant [ public integer REASON_RESET ] { 3 }
    Constant [ public integer REASON_CLOSE ] { 4 }
    Constant [ public integer REASON_CLONE ] { 5 }
    Constant [ public integer UNSUPPORTED_CONVERTER ] { -1 }
    Constant [ public integer SBCS ] { 0 }
    Constant [ public integer DBCS ] { 1 }
    Constant [ public integer MBCS ] { 2 }
    Constant [ public integer LATIN_1 ] { 3 }
    Constant [ public integer UTF8 ] { 4 }
    Constant [ public integer UTF16_BigEndian ] { 5 }
    Constant [ public integer UTF16_LittleEndian ] { 6 }
    Constant [ public integer UTF32_BigEndian ] { 7 }
    Constant [ public integer UTF32_LittleEndian ] { 8 }
    Constant [ public integer EBCDIC_STATEFUL ] { 9 }
    Constant [ public integer ISO_2022 ] { 10 }
    Constant [ public integer LMBCS_1 ] { 11 }
    Constant [ public integer LMBCS_2 ] { 12 }
    Constant [ public integer LMBCS_3 ] { 13 }
    Constant [ public integer LMBCS_4 ] { 14 }
    Constant [ public integer LMBCS_5 ] { 15 }
    Constant [ public integer LMBCS_6 ] { 16 }
    Constant [ public integer LMBCS_8 ] { 17 }
    Constant [ public integer LMBCS_11 ] { 18 }
    Constant [ public integer LMBCS_16 ] { 19 }
    Constant [ public integer LMBCS_17 ] { 20 }
    Constant [ public integer LMBCS_18 ] { 21 }
    Constant [ public integer LMBCS_19 ] { 22 }
    Constant [ public integer LMBCS_LAST ] { 22 }
    Constant [ public integer HZ ] { 23 }
    Constant [ public integer SCSU ] { 24 }
    Constant [ public integer ISCII ] { 25 }
    Constant [ public integer US_ASCII ] { 26 }
    Constant [ public integer UTF7 ] { 27 }
    Constant [ public integer BOCU1 ] { 28 }
    Constant [ public integer UTF16 ] { 29 }
    Constant [ public integer UTF32 ] { 30 }
    Constant [ public integer CESU8 ] { 31 }
    Constant [ public integer IMAP_MAILBOX ] { 32 }
  }

  - Static properties [0] {
  }

  - Static methods [5] {
    Method [ <internal:intl> static public method transcode ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str ]
        Parameter #1 [ <required> $toEncoding ]
        Parameter #2 [ <required> $fromEncoding ]
        Parameter #3 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:intl> static public method reasonText ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $reason ]
      }
    }

    Method [ <internal:intl> static public method getAvailable ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> static public method getAliases ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:intl> static public method getStandards ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [14] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $destination_encoding ]
        Parameter #1 [ <optional> $source_encoding ]
      }
    }

    Method [ <internal:intl> public method setSourceEncoding ] {

      - Parameters [1] {
        Parameter #0 [ <required> $encoding ]
      }
    }

    Method [ <internal:intl> public method setDestinationEncoding ] {

      - Parameters [1] {
        Parameter #0 [ <required> $encoding ]
      }
    }

    Method [ <internal:intl> public method getSourceEncoding ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getDestinationEncoding ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getSourceType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getDestinationType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getSubstChars ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method setSubstChars ] {

      - Parameters [1] {
        Parameter #0 [ <required> $chars ]
      }
    }

    Method [ <internal:intl> public method toUCallback ] {

      - Parameters [4] {
        Parameter #0 [ <required> $reason ]
        Parameter #1 [ <required> $source ]
        Parameter #2 [ <required> $codeUnits ]
        Parameter #3 [ <required> &$error ]
      }
    }

    Method [ <internal:intl> public method fromUCallback ] {

      - Parameters [4] {
        Parameter #0 [ <required> $reason ]
        Parameter #1 [ <required> $source ]
        Parameter #2 [ <required> $codePoint ]
        Parameter #3 [ <required> &$error ]
      }
    }

    Method [ <internal:intl> public method convert ] {

      - Parameters [2] {
        Parameter #0 [ <required> $str ]
        Parameter #1 [ <optional> $reverse ]
      }
    }

    Method [ <internal:intl> public method getErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getErrorMessage ] {

      - Parameters [0] {
      }
    }
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
