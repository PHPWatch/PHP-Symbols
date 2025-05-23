<?php

return array (
  'type' => 'class',
  'name' => 'ZipArchive',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZipArchive',
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
        'name' => 'ZipArchive interface (php.net)',
        'url' => 'https://www.php.net/manual/class.ziparchive.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'CREATE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int CREATE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EXCL' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int EXCL ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CHECKCONS' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int CHECKCONS ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OVERWRITE' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int OVERWRITE ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'RDONLY' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int RDONLY ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_NOCASE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int FL_NOCASE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_NODIR' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int FL_NODIR ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_COMPRESSED' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int FL_COMPRESSED ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_UNCHANGED' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int FL_UNCHANGED ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_RECOMPRESS' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int FL_RECOMPRESS ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENCRYPTED' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int FL_ENCRYPTED ] { 32 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_OVERWRITE' => 
    array (
      'value' => 8192,
      'toString' => 'Constant [ public int FL_OVERWRITE ] { 8192 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_LOCAL' => 
    array (
      'value' => 256,
      'toString' => 'Constant [ public int FL_LOCAL ] { 256 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_CENTRAL' => 
    array (
      'value' => 512,
      'toString' => 'Constant [ public int FL_CENTRAL ] { 512 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENC_GUESS' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int FL_ENC_GUESS ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENC_RAW' => 
    array (
      'value' => 64,
      'toString' => 'Constant [ public int FL_ENC_RAW ] { 64 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENC_STRICT' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int FL_ENC_STRICT ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENC_UTF_8' => 
    array (
      'value' => 2048,
      'toString' => 'Constant [ public int FL_ENC_UTF_8 ] { 2048 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'FL_ENC_CP437' => 
    array (
      'value' => 4096,
      'toString' => 'Constant [ public int FL_ENC_CP437 ] { 4096 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_DEFAULT' => 
    array (
      'value' => -1,
      'toString' => 'Constant [ public int CM_DEFAULT ] { -1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_STORE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int CM_STORE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_SHRINK' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int CM_SHRINK ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_REDUCE_1' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int CM_REDUCE_1 ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_REDUCE_2' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int CM_REDUCE_2 ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_REDUCE_3' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int CM_REDUCE_3 ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_REDUCE_4' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int CM_REDUCE_4 ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_IMPLODE' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int CM_IMPLODE ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_DEFLATE' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int CM_DEFLATE ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_DEFLATE64' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int CM_DEFLATE64 ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_PKWARE_IMPLODE' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int CM_PKWARE_IMPLODE ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_BZIP2' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int CM_BZIP2 ] { 12 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_LZMA' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public int CM_LZMA ] { 14 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_LZMA2' => 
    array (
      'value' => 33,
      'toString' => 'Constant [ public int CM_LZMA2 ] { 33 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_XZ' => 
    array (
      'value' => 95,
      'toString' => 'Constant [ public int CM_XZ ] { 95 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_TERSE' => 
    array (
      'value' => 18,
      'toString' => 'Constant [ public int CM_TERSE ] { 18 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_LZ77' => 
    array (
      'value' => 19,
      'toString' => 'Constant [ public int CM_LZ77 ] { 19 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_WAVPACK' => 
    array (
      'value' => 97,
      'toString' => 'Constant [ public int CM_WAVPACK ] { 97 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CM_PPMD' => 
    array (
      'value' => 98,
      'toString' => 'Constant [ public int CM_PPMD ] { 98 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_OK' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int ER_OK ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_MULTIDISK' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ER_MULTIDISK ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_RENAME' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ER_RENAME ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_CLOSE' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int ER_CLOSE ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_SEEK' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int ER_SEEK ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_READ' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int ER_READ ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_WRITE' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int ER_WRITE ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_CRC' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int ER_CRC ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_ZIPCLOSED' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int ER_ZIPCLOSED ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_NOENT' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int ER_NOENT ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_EXISTS' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int ER_EXISTS ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_OPEN' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int ER_OPEN ] { 11 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_TMPOPEN' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int ER_TMPOPEN ] { 12 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_ZLIB' => 
    array (
      'value' => 13,
      'toString' => 'Constant [ public int ER_ZLIB ] { 13 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_MEMORY' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public int ER_MEMORY ] { 14 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_CHANGED' => 
    array (
      'value' => 15,
      'toString' => 'Constant [ public int ER_CHANGED ] { 15 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_COMPNOTSUPP' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int ER_COMPNOTSUPP ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_EOF' => 
    array (
      'value' => 17,
      'toString' => 'Constant [ public int ER_EOF ] { 17 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_INVAL' => 
    array (
      'value' => 18,
      'toString' => 'Constant [ public int ER_INVAL ] { 18 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_NOZIP' => 
    array (
      'value' => 19,
      'toString' => 'Constant [ public int ER_NOZIP ] { 19 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_INTERNAL' => 
    array (
      'value' => 20,
      'toString' => 'Constant [ public int ER_INTERNAL ] { 20 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_INCONS' => 
    array (
      'value' => 21,
      'toString' => 'Constant [ public int ER_INCONS ] { 21 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_REMOVE' => 
    array (
      'value' => 22,
      'toString' => 'Constant [ public int ER_REMOVE ] { 22 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_DELETED' => 
    array (
      'value' => 23,
      'toString' => 'Constant [ public int ER_DELETED ] { 23 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_ENCRNOTSUPP' => 
    array (
      'value' => 24,
      'toString' => 'Constant [ public int ER_ENCRNOTSUPP ] { 24 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_RDONLY' => 
    array (
      'value' => 25,
      'toString' => 'Constant [ public int ER_RDONLY ] { 25 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_NOPASSWD' => 
    array (
      'value' => 26,
      'toString' => 'Constant [ public int ER_NOPASSWD ] { 26 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_WRONGPASSWD' => 
    array (
      'value' => 27,
      'toString' => 'Constant [ public int ER_WRONGPASSWD ] { 27 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_OPNOTSUPP' => 
    array (
      'value' => 28,
      'toString' => 'Constant [ public int ER_OPNOTSUPP ] { 28 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_INUSE' => 
    array (
      'value' => 29,
      'toString' => 'Constant [ public int ER_INUSE ] { 29 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_TELL' => 
    array (
      'value' => 30,
      'toString' => 'Constant [ public int ER_TELL ] { 30 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_COMPRESSED_DATA' => 
    array (
      'value' => 31,
      'toString' => 'Constant [ public int ER_COMPRESSED_DATA ] { 31 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ER_CANCELLED' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int ER_CANCELLED ] { 32 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_DOS' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int OPSYS_DOS ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_AMIGA' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int OPSYS_AMIGA ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_OPENVMS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int OPSYS_OPENVMS ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_UNIX' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int OPSYS_UNIX ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_VM_CMS' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int OPSYS_VM_CMS ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_ATARI_ST' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int OPSYS_ATARI_ST ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_OS_2' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int OPSYS_OS_2 ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_MACINTOSH' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int OPSYS_MACINTOSH ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_Z_SYSTEM' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int OPSYS_Z_SYSTEM ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_CPM' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int OPSYS_CPM ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_WINDOWS_NTFS' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int OPSYS_WINDOWS_NTFS ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_MVS' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int OPSYS_MVS ] { 11 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_VSE' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int OPSYS_VSE ] { 12 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_ACORN_RISC' => 
    array (
      'value' => 13,
      'toString' => 'Constant [ public int OPSYS_ACORN_RISC ] { 13 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_VFAT' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public int OPSYS_VFAT ] { 14 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_ALTERNATE_MVS' => 
    array (
      'value' => 15,
      'toString' => 'Constant [ public int OPSYS_ALTERNATE_MVS ] { 15 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_BEOS' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int OPSYS_BEOS ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_TANDEM' => 
    array (
      'value' => 17,
      'toString' => 'Constant [ public int OPSYS_TANDEM ] { 17 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_OS_400' => 
    array (
      'value' => 18,
      'toString' => 'Constant [ public int OPSYS_OS_400 ] { 18 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_OS_X' => 
    array (
      'value' => 19,
      'toString' => 'Constant [ public int OPSYS_OS_X ] { 19 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'OPSYS_DEFAULT' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int OPSYS_DEFAULT ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_NONE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int EM_NONE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_TRAD_PKWARE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int EM_TRAD_PKWARE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_AES_128' => 
    array (
      'value' => 257,
      'toString' => 'Constant [ public int EM_AES_128 ] { 257 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_AES_192' => 
    array (
      'value' => 258,
      'toString' => 'Constant [ public int EM_AES_192 ] { 258 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_AES_256' => 
    array (
      'value' => 259,
      'toString' => 'Constant [ public int EM_AES_256 ] { 259 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'EM_UNKNOWN' => 
    array (
      'value' => 65535,
      'toString' => 'Constant [ public int EM_UNKNOWN ] { 65535 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'LIBZIP_VERSION' => 
    array (
      'value' => '1.7.3',
      'toString' => 'Constant [ public string LIBZIP_VERSION ] { 1.7.3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
  ),
  'methods' => 
  array (
    'open' => 
    array (
      'name' => 'open',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'setPassword' => 
    array (
      'name' => 'setPassword',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'password' => 
        array (
          'position' => 0,
          'name' => 'password',
          'type' => 'string',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'ZipArchive',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'ZipArchive',
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
    'getStatusString' => 
    array (
      'name' => 'getStatusString',
      'class' => 'ZipArchive',
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
    'clearError' => 
    array (
      'name' => 'clearError',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addEmptyDir' => 
    array (
      'name' => 'addEmptyDir',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'dirname' => 
        array (
          'position' => 0,
          'name' => 'dirname',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'addFromString' => 
    array (
      'name' => 'addFromString',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'ZipArchive::FL_OVERWRITE',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addFile' => 
    array (
      'name' => 'addFile',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'filepath' => 
        array (
          'position' => 0,
          'name' => 'filepath',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'entryname' => 
        array (
          'position' => 1,
          'name' => 'entryname',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 2,
          'name' => 'start',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 3,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 4,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'ZipArchive::FL_OVERWRITE',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceFile' => 
    array (
      'name' => 'replaceFile',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'filepath' => 
        array (
          'position' => 0,
          'name' => 'filepath',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 2,
          'name' => 'start',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 3,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 4,
          'name' => 'flags',
          'type' => 'int',
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
    'addGlob' => 
    array (
      'name' => 'addGlob',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'array',
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
    'addPattern' => 
    array (
      'name' => 'addPattern',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'path' => 
        array (
          'position' => 1,
          'name' => 'path',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'array',
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
    'renameIndex' => 
    array (
      'name' => 'renameIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_name' => 
        array (
          'position' => 1,
          'name' => 'new_name',
          'type' => 'string',
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
    'renameName' => 
    array (
      'name' => 'renameName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_name' => 
        array (
          'position' => 1,
          'name' => 'new_name',
          'type' => 'string',
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
    'setArchiveComment' => 
    array (
      'name' => 'setArchiveComment',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'comment' => 
        array (
          'position' => 0,
          'name' => 'comment',
          'type' => 'string',
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
    'getArchiveComment' => 
    array (
      'name' => 'getArchiveComment',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
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
    'setCommentIndex' => 
    array (
      'name' => 'setCommentIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'comment' => 
        array (
          'position' => 1,
          'name' => 'comment',
          'type' => 'string',
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
    'setCommentName' => 
    array (
      'name' => 'setCommentName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'comment' => 
        array (
          'position' => 1,
          'name' => 'comment',
          'type' => 'string',
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
    'setMtimeIndex' => 
    array (
      'name' => 'setMtimeIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
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
    'setMtimeName' => 
    array (
      'name' => 'setMtimeName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
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
    'getCommentIndex' => 
    array (
      'name' => 'getCommentIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'getCommentName' => 
    array (
      'name' => 'getCommentName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'deleteIndex' => 
    array (
      'name' => 'deleteIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
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
    'deleteName' => 
    array (
      'name' => 'deleteName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
    'statName' => 
    array (
      'name' => 'statName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'statIndex' => 
    array (
      'name' => 'statIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'locateName' => 
    array (
      'name' => 'locateName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'getNameIndex' => 
    array (
      'name' => 'getNameIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'unchangeArchive' => 
    array (
      'name' => 'unchangeArchive',
      'class' => 'ZipArchive',
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
    'unchangeAll' => 
    array (
      'name' => 'unchangeAll',
      'class' => 'ZipArchive',
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
    'unchangeIndex' => 
    array (
      'name' => 'unchangeIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
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
    'unchangeName' => 
    array (
      'name' => 'unchangeName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
    'extractTo' => 
    array (
      'name' => 'extractTo',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'pathto' => 
        array (
          'position' => 0,
          'name' => 'pathto',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'files' => 
        array (
          'position' => 1,
          'name' => 'files',
          'type' => 'array|string|null',
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
    'getFromName' => 
    array (
      'name' => 'getFromName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'len' => 
        array (
          'position' => 1,
          'name' => 'len',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
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
    'getFromIndex' => 
    array (
      'name' => 'getFromIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'len' => 
        array (
          'position' => 1,
          'name' => 'len',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
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
    'getStreamIndex' => 
    array (
      'name' => 'getStreamIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'getStreamName' => 
    array (
      'name' => 'getStreamName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
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
    'getStream' => 
    array (
      'name' => 'getStream',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
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
    'setExternalAttributesName' => 
    array (
      'name' => 'setExternalAttributesName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opsys' => 
        array (
          'position' => 1,
          'name' => 'opsys',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'attr' => 
        array (
          'position' => 2,
          'name' => 'attr',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
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
    'setExternalAttributesIndex' => 
    array (
      'name' => 'setExternalAttributesIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opsys' => 
        array (
          'position' => 1,
          'name' => 'opsys',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'attr' => 
        array (
          'position' => 2,
          'name' => 'attr',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
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
    'getExternalAttributesName' => 
    array (
      'name' => 'getExternalAttributesName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opsys' => 
        array (
          'position' => 1,
          'name' => 'opsys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'attr' => 
        array (
          'position' => 2,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
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
    'getExternalAttributesIndex' => 
    array (
      'name' => 'getExternalAttributesIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opsys' => 
        array (
          'position' => 1,
          'name' => 'opsys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'attr' => 
        array (
          'position' => 2,
          'name' => 'attr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
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
    'setCompressionName' => 
    array (
      'name' => 'setCompressionName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'method' => 
        array (
          'position' => 1,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compflags' => 
        array (
          'position' => 2,
          'name' => 'compflags',
          'type' => 'int',
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
    'setCompressionIndex' => 
    array (
      'name' => 'setCompressionIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'method' => 
        array (
          'position' => 1,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compflags' => 
        array (
          'position' => 2,
          'name' => 'compflags',
          'type' => 'int',
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
    'setEncryptionName' => 
    array (
      'name' => 'setEncryptionName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'method' => 
        array (
          'position' => 1,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 2,
          'name' => 'password',
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
    'setEncryptionIndex' => 
    array (
      'name' => 'setEncryptionIndex',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'method' => 
        array (
          'position' => 1,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 2,
          'name' => 'password',
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
    'registerProgressCallback' => 
    array (
      'name' => 'registerProgressCallback',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'rate' => 
        array (
          'position' => 0,
          'name' => 'rate',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callback' => 
        array (
          'position' => 1,
          'name' => 'callback',
          'type' => 'callable',
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
    'registerCancelCallback' => 
    array (
      'name' => 'registerCancelCallback',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
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
    'isCompressionMethodSupported' => 
    array (
      'name' => 'isCompressionMethodSupported',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'enc' => 
        array (
          'position' => 1,
          'name' => 'enc',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isEncryptionMethodSupported' => 
    array (
      'name' => 'isEncryptionMethodSupported',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'enc' => 
        array (
          'position' => 1,
          'name' => 'enc',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Countable',
  ),
  'properties' => 
  array (
    'lastId' => 
    array (
      'name' => 'lastId',
      'class' => 'ZipArchive',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'class' => 'ZipArchive',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'statusSys' => 
    array (
      'name' => 'statusSys',
      'class' => 'ZipArchive',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'numFiles' => 
    array (
      'name' => 'numFiles',
      'class' => 'ZipArchive',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'filename' => 
    array (
      'name' => 'filename',
      'class' => 'ZipArchive',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'comment' => 
    array (
      'name' => 'comment',
      'class' => 'ZipArchive',
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
  'extension' => 'zip',
  'toString' => 'Class [ <internal:zip> class ZipArchive implements Countable ] {

  - Constants [99] {
    Constant [ public int CREATE ] { 1 }
    Constant [ public int EXCL ] { 2 }
    Constant [ public int CHECKCONS ] { 4 }
    Constant [ public int OVERWRITE ] { 8 }
    Constant [ public int RDONLY ] { 16 }
    Constant [ public int FL_NOCASE ] { 1 }
    Constant [ public int FL_NODIR ] { 2 }
    Constant [ public int FL_COMPRESSED ] { 4 }
    Constant [ public int FL_UNCHANGED ] { 8 }
    Constant [ public int FL_RECOMPRESS ] { 16 }
    Constant [ public int FL_ENCRYPTED ] { 32 }
    Constant [ public int FL_OVERWRITE ] { 8192 }
    Constant [ public int FL_LOCAL ] { 256 }
    Constant [ public int FL_CENTRAL ] { 512 }
    Constant [ public int FL_ENC_GUESS ] { 0 }
    Constant [ public int FL_ENC_RAW ] { 64 }
    Constant [ public int FL_ENC_STRICT ] { 128 }
    Constant [ public int FL_ENC_UTF_8 ] { 2048 }
    Constant [ public int FL_ENC_CP437 ] { 4096 }
    Constant [ public int CM_DEFAULT ] { -1 }
    Constant [ public int CM_STORE ] { 0 }
    Constant [ public int CM_SHRINK ] { 1 }
    Constant [ public int CM_REDUCE_1 ] { 2 }
    Constant [ public int CM_REDUCE_2 ] { 3 }
    Constant [ public int CM_REDUCE_3 ] { 4 }
    Constant [ public int CM_REDUCE_4 ] { 5 }
    Constant [ public int CM_IMPLODE ] { 6 }
    Constant [ public int CM_DEFLATE ] { 8 }
    Constant [ public int CM_DEFLATE64 ] { 9 }
    Constant [ public int CM_PKWARE_IMPLODE ] { 10 }
    Constant [ public int CM_BZIP2 ] { 12 }
    Constant [ public int CM_LZMA ] { 14 }
    Constant [ public int CM_LZMA2 ] { 33 }
    Constant [ public int CM_XZ ] { 95 }
    Constant [ public int CM_TERSE ] { 18 }
    Constant [ public int CM_LZ77 ] { 19 }
    Constant [ public int CM_WAVPACK ] { 97 }
    Constant [ public int CM_PPMD ] { 98 }
    Constant [ public int ER_OK ] { 0 }
    Constant [ public int ER_MULTIDISK ] { 1 }
    Constant [ public int ER_RENAME ] { 2 }
    Constant [ public int ER_CLOSE ] { 3 }
    Constant [ public int ER_SEEK ] { 4 }
    Constant [ public int ER_READ ] { 5 }
    Constant [ public int ER_WRITE ] { 6 }
    Constant [ public int ER_CRC ] { 7 }
    Constant [ public int ER_ZIPCLOSED ] { 8 }
    Constant [ public int ER_NOENT ] { 9 }
    Constant [ public int ER_EXISTS ] { 10 }
    Constant [ public int ER_OPEN ] { 11 }
    Constant [ public int ER_TMPOPEN ] { 12 }
    Constant [ public int ER_ZLIB ] { 13 }
    Constant [ public int ER_MEMORY ] { 14 }
    Constant [ public int ER_CHANGED ] { 15 }
    Constant [ public int ER_COMPNOTSUPP ] { 16 }
    Constant [ public int ER_EOF ] { 17 }
    Constant [ public int ER_INVAL ] { 18 }
    Constant [ public int ER_NOZIP ] { 19 }
    Constant [ public int ER_INTERNAL ] { 20 }
    Constant [ public int ER_INCONS ] { 21 }
    Constant [ public int ER_REMOVE ] { 22 }
    Constant [ public int ER_DELETED ] { 23 }
    Constant [ public int ER_ENCRNOTSUPP ] { 24 }
    Constant [ public int ER_RDONLY ] { 25 }
    Constant [ public int ER_NOPASSWD ] { 26 }
    Constant [ public int ER_WRONGPASSWD ] { 27 }
    Constant [ public int ER_OPNOTSUPP ] { 28 }
    Constant [ public int ER_INUSE ] { 29 }
    Constant [ public int ER_TELL ] { 30 }
    Constant [ public int ER_COMPRESSED_DATA ] { 31 }
    Constant [ public int ER_CANCELLED ] { 32 }
    Constant [ public int OPSYS_DOS ] { 0 }
    Constant [ public int OPSYS_AMIGA ] { 1 }
    Constant [ public int OPSYS_OPENVMS ] { 2 }
    Constant [ public int OPSYS_UNIX ] { 3 }
    Constant [ public int OPSYS_VM_CMS ] { 4 }
    Constant [ public int OPSYS_ATARI_ST ] { 5 }
    Constant [ public int OPSYS_OS_2 ] { 6 }
    Constant [ public int OPSYS_MACINTOSH ] { 7 }
    Constant [ public int OPSYS_Z_SYSTEM ] { 8 }
    Constant [ public int OPSYS_CPM ] { 9 }
    Constant [ public int OPSYS_WINDOWS_NTFS ] { 10 }
    Constant [ public int OPSYS_MVS ] { 11 }
    Constant [ public int OPSYS_VSE ] { 12 }
    Constant [ public int OPSYS_ACORN_RISC ] { 13 }
    Constant [ public int OPSYS_VFAT ] { 14 }
    Constant [ public int OPSYS_ALTERNATE_MVS ] { 15 }
    Constant [ public int OPSYS_BEOS ] { 16 }
    Constant [ public int OPSYS_TANDEM ] { 17 }
    Constant [ public int OPSYS_OS_400 ] { 18 }
    Constant [ public int OPSYS_OS_X ] { 19 }
    Constant [ public int OPSYS_DEFAULT ] { 3 }
    Constant [ public int EM_NONE ] { 0 }
    Constant [ public int EM_TRAD_PKWARE ] { 1 }
    Constant [ public int EM_AES_128 ] { 257 }
    Constant [ public int EM_AES_192 ] { 258 }
    Constant [ public int EM_AES_256 ] { 259 }
    Constant [ public int EM_UNKNOWN ] { 65535 }
    Constant [ public string LIBZIP_VERSION ] { 1.7.3 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:zip> static public method isCompressionMethodSupported ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $method ]
        Parameter #1 [ <optional> bool $enc = true ]
      }
      - Return [ bool ]
    }

    Method [ <internal:zip> static public method isEncryptionMethodSupported ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $method ]
        Parameter #1 [ <optional> bool $enc = true ]
      }
      - Return [ bool ]
    }
  }

  - Properties [6] {
    Property [ public int $lastId ]
    Property [ public int $status ]
    Property [ public int $statusSys ]
    Property [ public int $numFiles ]
    Property [ public string $filename ]
    Property [ public string $comment ]
  }

  - Methods [48] {
    Method [ <internal:zip> public method open ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ int|bool ]
    }

    Method [ <internal:zip> public method setPassword ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $password ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method close ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:zip> public method getStatusString ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:zip> public method clearError ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:zip> public method addEmptyDir ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $dirname ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method addFromString ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> string $content ]
        Parameter #2 [ <optional> int $flags = ZipArchive::FL_OVERWRITE ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method addFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $filepath ]
        Parameter #1 [ <optional> string $entryname = "" ]
        Parameter #2 [ <optional> int $start = 0 ]
        Parameter #3 [ <optional> int $length = 0 ]
        Parameter #4 [ <optional> int $flags = ZipArchive::FL_OVERWRITE ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method replaceFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $filepath ]
        Parameter #1 [ <required> int $index ]
        Parameter #2 [ <optional> int $start = 0 ]
        Parameter #3 [ <optional> int $length = 0 ]
        Parameter #4 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method addGlob ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $pattern ]
        Parameter #1 [ <optional> int $flags = 0 ]
        Parameter #2 [ <optional> array $options = [] ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:zip> public method addPattern ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $pattern ]
        Parameter #1 [ <optional> string $path = "." ]
        Parameter #2 [ <optional> array $options = [] ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:zip> public method renameIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> string $new_name ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method renameName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> string $new_name ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setArchiveComment ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $comment ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method getArchiveComment ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method setCommentIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> string $comment ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setCommentName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> string $comment ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setMtimeIndex ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> int $timestamp ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setMtimeName ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> int $timestamp ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method getCommentIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method getCommentName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method deleteIndex ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method deleteName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method statName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:zip> public method statIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:zip> public method locateName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:zip> public method getNameIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method unchangeArchive ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method unchangeAll ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method unchangeIndex ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method unchangeName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method extractTo ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $pathto ]
        Parameter #1 [ <optional> array|string|null $files = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method getFromName ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $len = 0 ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method getFromIndex ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> int $len = 0 ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:zip> public method getStreamIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:zip> public method getStreamName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:zip> public method getStream ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
    }

    Method [ <internal:zip> public method setExternalAttributesName ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> int $opsys ]
        Parameter #2 [ <required> int $attr ]
        Parameter #3 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setExternalAttributesIndex ] {

      - Parameters [4] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> int $opsys ]
        Parameter #2 [ <required> int $attr ]
        Parameter #3 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method getExternalAttributesName ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> &$opsys ]
        Parameter #2 [ <required> &$attr ]
        Parameter #3 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method getExternalAttributesIndex ] {

      - Parameters [4] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> &$opsys ]
        Parameter #2 [ <required> &$attr ]
        Parameter #3 [ <optional> int $flags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setCompressionName ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> int $method ]
        Parameter #2 [ <optional> int $compflags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setCompressionIndex ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> int $method ]
        Parameter #2 [ <optional> int $compflags = 0 ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setEncryptionName ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> int $method ]
        Parameter #2 [ <optional> ?string $password = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method setEncryptionIndex ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <required> int $method ]
        Parameter #2 [ <optional> ?string $password = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method registerProgressCallback ] {

      - Parameters [2] {
        Parameter #0 [ <required> float $rate ]
        Parameter #1 [ <required> callable $callback ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:zip> public method registerCancelCallback ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Tentative return [ bool ]
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
