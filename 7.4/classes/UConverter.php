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
        'name' => 'UConverter class (php.net)',
        'url' => 'https://www.php.net/manual/class.uconverter.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'REASON_UNASSIGNED' => 0,
    'REASON_ILLEGAL' => 1,
    'REASON_IRREGULAR' => 2,
    'REASON_RESET' => 3,
    'REASON_CLOSE' => 4,
    'REASON_CLONE' => 5,
    'UNSUPPORTED_CONVERTER' => -1,
    'SBCS' => 0,
    'DBCS' => 1,
    'MBCS' => 2,
    'LATIN_1' => 3,
    'UTF8' => 4,
    'UTF16_BigEndian' => 5,
    'UTF16_LittleEndian' => 6,
    'UTF32_BigEndian' => 7,
    'UTF32_LittleEndian' => 8,
    'EBCDIC_STATEFUL' => 9,
    'ISO_2022' => 10,
    'LMBCS_1' => 11,
    'LMBCS_2' => 12,
    'LMBCS_3' => 13,
    'LMBCS_4' => 14,
    'LMBCS_5' => 15,
    'LMBCS_6' => 16,
    'LMBCS_8' => 17,
    'LMBCS_11' => 18,
    'LMBCS_16' => 19,
    'LMBCS_17' => 20,
    'LMBCS_18' => 21,
    'LMBCS_19' => 22,
    'LMBCS_LAST' => 22,
    'HZ' => 23,
    'SCSU' => 24,
    'ISCII' => 25,
    'US_ASCII' => 26,
    'UTF7' => 27,
    'BOCU1' => 28,
    'UTF16' => 29,
    'UTF32' => 30,
    'CESU8' => 31,
    'IMAP_MAILBOX' => 32,
  ),
  'properties' => 
  array (
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
