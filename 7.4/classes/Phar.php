<?php

return array (
  'type' => 'class',
  'name' => 'Phar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Phar',
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
        'name' => 'Phar class (php.net)',
        'url' => 'https://www.php.net/manual/class.phar.php',
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
    0 => 'RecursiveIterator',
    1 => 'SeekableIterator',
    2 => 'Traversable',
    3 => 'Iterator',
    4 => 'Countable',
    5 => 'ArrayAccess',
  ),
  'constants' => 
  array (
    'CURRENT_MODE_MASK' => 
    array (
      'value' => 240,
      'toString' => 'Constant [ public int CURRENT_MODE_MASK ] { 240 }
',
      'visibility' => 1,
    ),
    'CURRENT_AS_PATHNAME' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int CURRENT_AS_PATHNAME ] { 32 }
',
      'visibility' => 1,
    ),
    'CURRENT_AS_FILEINFO' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int CURRENT_AS_FILEINFO ] { 0 }
',
      'visibility' => 1,
    ),
    'CURRENT_AS_SELF' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int CURRENT_AS_SELF ] { 16 }
',
      'visibility' => 1,
    ),
    'KEY_MODE_MASK' => 
    array (
      'value' => 3840,
      'toString' => 'Constant [ public int KEY_MODE_MASK ] { 3840 }
',
      'visibility' => 1,
    ),
    'KEY_AS_PATHNAME' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int KEY_AS_PATHNAME ] { 0 }
',
      'visibility' => 1,
    ),
    'FOLLOW_SYMLINKS' => 
    array (
      'value' => 512,
      'toString' => 'Constant [ public int FOLLOW_SYMLINKS ] { 512 }
',
      'visibility' => 1,
    ),
    'KEY_AS_FILENAME' => 
    array (
      'value' => 256,
      'toString' => 'Constant [ public int KEY_AS_FILENAME ] { 256 }
',
      'visibility' => 1,
    ),
    'NEW_CURRENT_AND_KEY' => 
    array (
      'value' => 256,
      'toString' => 'Constant [ public int NEW_CURRENT_AND_KEY ] { 256 }
',
      'visibility' => 1,
    ),
    'OTHER_MODE_MASK' => 
    array (
      'value' => 12288,
      'toString' => 'Constant [ public int OTHER_MODE_MASK ] { 12288 }
',
      'visibility' => 1,
    ),
    'SKIP_DOTS' => 
    array (
      'value' => 4096,
      'toString' => 'Constant [ public int SKIP_DOTS ] { 4096 }
',
      'visibility' => 1,
    ),
    'UNIX_PATHS' => 
    array (
      'value' => 8192,
      'toString' => 'Constant [ public int UNIX_PATHS ] { 8192 }
',
      'visibility' => 1,
    ),
    'BZ2' => 
    array (
      'value' => 8192,
      'toString' => 'Constant [ public int BZ2 ] { 8192 }
',
      'visibility' => 1,
    ),
    'GZ' => 
    array (
      'value' => 4096,
      'toString' => 'Constant [ public int GZ ] { 4096 }
',
      'visibility' => 1,
    ),
    'NONE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int NONE ] { 0 }
',
      'visibility' => 1,
    ),
    'PHAR' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int PHAR ] { 1 }
',
      'visibility' => 1,
    ),
    'TAR' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int TAR ] { 2 }
',
      'visibility' => 1,
    ),
    'ZIP' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int ZIP ] { 3 }
',
      'visibility' => 1,
    ),
    'COMPRESSED' => 
    array (
      'value' => 61440,
      'toString' => 'Constant [ public int COMPRESSED ] { 61440 }
',
      'visibility' => 1,
    ),
    'PHP' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int PHP ] { 0 }
',
      'visibility' => 1,
    ),
    'PHPS' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int PHPS ] { 1 }
',
      'visibility' => 1,
    ),
    'MD5' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int MD5 ] { 1 }
',
      'visibility' => 1,
    ),
    'OPENSSL' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int OPENSSL ] { 16 }
',
      'visibility' => 1,
    ),
    'SHA1' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int SHA1 ] { 2 }
',
      'visibility' => 1,
    ),
    'SHA256' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int SHA256 ] { 3 }
',
      'visibility' => 1,
    ),
    'SHA512' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int SHA512 ] { 4 }
',
      'visibility' => 1,
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
      'class' => 'Phar',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alias' => 
        array (
          'position' => 2,
          'name' => 'alias',
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
    '__destruct' => 
    array (
      'name' => '__destruct',
      'class' => 'Phar',
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
    'addEmptyDir' => 
    array (
      'name' => 'addEmptyDir',
      'class' => 'Phar',
      'parameters' => 
      array (
        'dirname' => 
        array (
          'position' => 0,
          'name' => 'dirname',
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
    'addFile' => 
    array (
      'name' => 'addFile',
      'class' => 'Phar',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'localname' => 
        array (
          'position' => 1,
          'name' => 'localname',
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
    'addFromString' => 
    array (
      'name' => 'addFromString',
      'class' => 'Phar',
      'parameters' => 
      array (
        'localname' => 
        array (
          'position' => 0,
          'name' => 'localname',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contents' => 
        array (
          'position' => 1,
          'name' => 'contents',
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
    'buildFromDirectory' => 
    array (
      'name' => 'buildFromDirectory',
      'class' => 'Phar',
      'parameters' => 
      array (
        'base_dir' => 
        array (
          'position' => 0,
          'name' => 'base_dir',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'regex' => 
        array (
          'position' => 1,
          'name' => 'regex',
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
    'buildFromIterator' => 
    array (
      'name' => 'buildFromIterator',
      'class' => 'Phar',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'base_directory' => 
        array (
          'position' => 1,
          'name' => 'base_directory',
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
    'compressFiles' => 
    array (
      'name' => 'compressFiles',
      'class' => 'Phar',
      'parameters' => 
      array (
        'compression_type' => 
        array (
          'position' => 0,
          'name' => 'compression_type',
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
    'decompressFiles' => 
    array (
      'name' => 'decompressFiles',
      'class' => 'Phar',
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
    'compress' => 
    array (
      'name' => 'compress',
      'class' => 'Phar',
      'parameters' => 
      array (
        'compression_type' => 
        array (
          'position' => 0,
          'name' => 'compression_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'file_ext' => 
        array (
          'position' => 1,
          'name' => 'file_ext',
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
    'decompress' => 
    array (
      'name' => 'decompress',
      'class' => 'Phar',
      'parameters' => 
      array (
        'file_ext' => 
        array (
          'position' => 0,
          'name' => 'file_ext',
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
    'convertToExecutable' => 
    array (
      'name' => 'convertToExecutable',
      'class' => 'Phar',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compression_type' => 
        array (
          'position' => 1,
          'name' => 'compression_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'file_ext' => 
        array (
          'position' => 2,
          'name' => 'file_ext',
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
    'convertToData' => 
    array (
      'name' => 'convertToData',
      'class' => 'Phar',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compression_type' => 
        array (
          'position' => 1,
          'name' => 'compression_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'file_ext' => 
        array (
          'position' => 2,
          'name' => 'file_ext',
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
    'copy' => 
    array (
      'name' => 'copy',
      'class' => 'Phar',
      'parameters' => 
      array (
        'newfile' => 
        array (
          'position' => 0,
          'name' => 'newfile',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'oldfile' => 
        array (
          'position' => 1,
          'name' => 'oldfile',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'Phar',
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
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'Phar',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
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
    'delMetadata' => 
    array (
      'name' => 'delMetadata',
      'class' => 'Phar',
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
    'extractTo' => 
    array (
      'name' => 'extractTo',
      'class' => 'Phar',
      'parameters' => 
      array (
        'pathto' => 
        array (
          'position' => 0,
          'name' => 'pathto',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'files' => 
        array (
          'position' => 1,
          'name' => 'files',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'overwrite' => 
        array (
          'position' => 2,
          'name' => 'overwrite',
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
    'getAlias' => 
    array (
      'name' => 'getAlias',
      'class' => 'Phar',
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
    'getPath' => 
    array (
      'name' => 'getPath',
      'class' => 'Phar',
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
    'getMetadata' => 
    array (
      'name' => 'getMetadata',
      'class' => 'Phar',
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
    'getModified' => 
    array (
      'name' => 'getModified',
      'class' => 'Phar',
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
    'getSignature' => 
    array (
      'name' => 'getSignature',
      'class' => 'Phar',
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
    'getStub' => 
    array (
      'name' => 'getStub',
      'class' => 'Phar',
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
    'getVersion' => 
    array (
      'name' => 'getVersion',
      'class' => 'Phar',
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
    'hasMetadata' => 
    array (
      'name' => 'hasMetadata',
      'class' => 'Phar',
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
    'isBuffering' => 
    array (
      'name' => 'isBuffering',
      'class' => 'Phar',
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
    'isCompressed' => 
    array (
      'name' => 'isCompressed',
      'class' => 'Phar',
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
    'isFileFormat' => 
    array (
      'name' => 'isFileFormat',
      'class' => 'Phar',
      'parameters' => 
      array (
        'fileformat' => 
        array (
          'position' => 0,
          'name' => 'fileformat',
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
    'isWritable' => 
    array (
      'name' => 'isWritable',
      'class' => 'Phar',
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
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'Phar',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
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
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'Phar',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
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
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'Phar',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'Phar',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
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
    'setAlias' => 
    array (
      'name' => 'setAlias',
      'class' => 'Phar',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
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
    'setDefaultStub' => 
    array (
      'name' => 'setDefaultStub',
      'class' => 'Phar',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'webindex' => 
        array (
          'position' => 1,
          'name' => 'webindex',
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
    'setMetadata' => 
    array (
      'name' => 'setMetadata',
      'class' => 'Phar',
      'parameters' => 
      array (
        'metadata' => 
        array (
          'position' => 0,
          'name' => 'metadata',
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
    'setSignatureAlgorithm' => 
    array (
      'name' => 'setSignatureAlgorithm',
      'class' => 'Phar',
      'parameters' => 
      array (
        'algorithm' => 
        array (
          'position' => 0,
          'name' => 'algorithm',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'privatekey' => 
        array (
          'position' => 1,
          'name' => 'privatekey',
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
    'setStub' => 
    array (
      'name' => 'setStub',
      'class' => 'Phar',
      'parameters' => 
      array (
        'newstub' => 
        array (
          'position' => 0,
          'name' => 'newstub',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'maxlen' => 
        array (
          'position' => 1,
          'name' => 'maxlen',
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
    'startBuffering' => 
    array (
      'name' => 'startBuffering',
      'class' => 'Phar',
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
    'stopBuffering' => 
    array (
      'name' => 'stopBuffering',
      'class' => 'Phar',
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
    'apiVersion' => 
    array (
      'name' => 'apiVersion',
      'class' => 'Phar',
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
    'canCompress' => 
    array (
      'name' => 'canCompress',
      'class' => 'Phar',
      'parameters' => 
      array (
        'method' => 
        array (
          'position' => 0,
          'name' => 'method',
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
    'canWrite' => 
    array (
      'name' => 'canWrite',
      'class' => 'Phar',
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
    'createDefaultStub' => 
    array (
      'name' => 'createDefaultStub',
      'class' => 'Phar',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'webindex' => 
        array (
          'position' => 1,
          'name' => 'webindex',
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
    'getSupportedCompression' => 
    array (
      'name' => 'getSupportedCompression',
      'class' => 'Phar',
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
    'getSupportedSignatures' => 
    array (
      'name' => 'getSupportedSignatures',
      'class' => 'Phar',
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
    'interceptFileFuncs' => 
    array (
      'name' => 'interceptFileFuncs',
      'class' => 'Phar',
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
    'isValidPharFilename' => 
    array (
      'name' => 'isValidPharFilename',
      'class' => 'Phar',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'executable' => 
        array (
          'position' => 1,
          'name' => 'executable',
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
    'loadPhar' => 
    array (
      'name' => 'loadPhar',
      'class' => 'Phar',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alias' => 
        array (
          'position' => 1,
          'name' => 'alias',
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
    'mapPhar' => 
    array (
      'name' => 'mapPhar',
      'class' => 'Phar',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
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
    'running' => 
    array (
      'name' => 'running',
      'class' => 'Phar',
      'parameters' => 
      array (
        'retphar' => 
        array (
          'position' => 0,
          'name' => 'retphar',
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
    'mount' => 
    array (
      'name' => 'mount',
      'class' => 'Phar',
      'parameters' => 
      array (
        'inphar' => 
        array (
          'position' => 0,
          'name' => 'inphar',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'externalfile' => 
        array (
          'position' => 1,
          'name' => 'externalfile',
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
    'mungServer' => 
    array (
      'name' => 'mungServer',
      'class' => 'Phar',
      'parameters' => 
      array (
        'munglist' => 
        array (
          'position' => 0,
          'name' => 'munglist',
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
    'unlinkArchive' => 
    array (
      'name' => 'unlinkArchive',
      'class' => 'Phar',
      'parameters' => 
      array (
        'archive' => 
        array (
          'position' => 0,
          'name' => 'archive',
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
    'webPhar' => 
    array (
      'name' => 'webPhar',
      'class' => 'Phar',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'f404' => 
        array (
          'position' => 2,
          'name' => 'f404',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mimetypes' => 
        array (
          'position' => 3,
          'name' => 'mimetypes',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rewrites' => 
        array (
          'position' => 4,
          'name' => 'rewrites',
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
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'RecursiveDirectoryIterator',
      'parameters' => 
      array (
        'allow_links' => 
        array (
          'position' => 0,
          'name' => 'allow_links',
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
    'getChildren' => 
    array (
      'name' => 'getChildren',
      'class' => 'RecursiveDirectoryIterator',
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
    'getSubPath' => 
    array (
      'name' => 'getSubPath',
      'class' => 'RecursiveDirectoryIterator',
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
    'getSubPathname' => 
    array (
      'name' => 'getSubPathname',
      'class' => 'RecursiveDirectoryIterator',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'FilesystemIterator',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'FilesystemIterator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'FilesystemIterator',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'FilesystemIterator',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'FilesystemIterator',
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
    'setFlags' => 
    array (
      'name' => 'setFlags',
      'class' => 'FilesystemIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'getFilename' => 
    array (
      'name' => 'getFilename',
      'class' => 'DirectoryIterator',
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
    'getExtension' => 
    array (
      'name' => 'getExtension',
      'class' => 'DirectoryIterator',
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
    'getBasename' => 
    array (
      'name' => 'getBasename',
      'class' => 'DirectoryIterator',
      'parameters' => 
      array (
        'suffix' => 
        array (
          'position' => 0,
          'name' => 'suffix',
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
    'isDot' => 
    array (
      'name' => 'isDot',
      'class' => 'DirectoryIterator',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'DirectoryIterator',
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
    'seek' => 
    array (
      'name' => 'seek',
      'class' => 'DirectoryIterator',
      'parameters' => 
      array (
        'position' => 
        array (
          'position' => 0,
          'name' => 'position',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'DirectoryIterator',
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
    'getPathname' => 
    array (
      'name' => 'getPathname',
      'class' => 'SplFileInfo',
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
    'getPerms' => 
    array (
      'name' => 'getPerms',
      'class' => 'SplFileInfo',
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
    'getInode' => 
    array (
      'name' => 'getInode',
      'class' => 'SplFileInfo',
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
    'getSize' => 
    array (
      'name' => 'getSize',
      'class' => 'SplFileInfo',
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
    'getOwner' => 
    array (
      'name' => 'getOwner',
      'class' => 'SplFileInfo',
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
    'getGroup' => 
    array (
      'name' => 'getGroup',
      'class' => 'SplFileInfo',
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
    'getATime' => 
    array (
      'name' => 'getATime',
      'class' => 'SplFileInfo',
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
    'getMTime' => 
    array (
      'name' => 'getMTime',
      'class' => 'SplFileInfo',
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
    'getCTime' => 
    array (
      'name' => 'getCTime',
      'class' => 'SplFileInfo',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'SplFileInfo',
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
    'isReadable' => 
    array (
      'name' => 'isReadable',
      'class' => 'SplFileInfo',
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
    'isExecutable' => 
    array (
      'name' => 'isExecutable',
      'class' => 'SplFileInfo',
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
    'isFile' => 
    array (
      'name' => 'isFile',
      'class' => 'SplFileInfo',
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
    'isDir' => 
    array (
      'name' => 'isDir',
      'class' => 'SplFileInfo',
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
    'isLink' => 
    array (
      'name' => 'isLink',
      'class' => 'SplFileInfo',
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
    'getLinkTarget' => 
    array (
      'name' => 'getLinkTarget',
      'class' => 'SplFileInfo',
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
    'getRealPath' => 
    array (
      'name' => 'getRealPath',
      'class' => 'SplFileInfo',
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
    'getFileInfo' => 
    array (
      'name' => 'getFileInfo',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
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
    'getPathInfo' => 
    array (
      'name' => 'getPathInfo',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
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
    'openFile' => 
    array (
      'name' => 'openFile',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'open_mode' => 
        array (
          'position' => 0,
          'name' => 'open_mode',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'use_include_path' => 
        array (
          'position' => 1,
          'name' => 'use_include_path',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'context' => 
        array (
          'position' => 2,
          'name' => 'context',
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
    'setFileClass' => 
    array (
      'name' => 'setFileClass',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
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
    'setInfoClass' => 
    array (
      'name' => 'setInfoClass',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'SplFileInfo',
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
    '_bad_state_ex' => 
    array (
      'name' => '_bad_state_ex',
      'class' => 'SplFileInfo',
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
  'is_read_only' => false,
  'extension' => 'Phar',
  'toString' => 'Class [ <internal:Phar> <iterateable> class Phar extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Countable, ArrayAccess ] {

  - Constants [26] {
    Constant [ public int CURRENT_MODE_MASK ] { 240 }
    Constant [ public int CURRENT_AS_PATHNAME ] { 32 }
    Constant [ public int CURRENT_AS_FILEINFO ] { 0 }
    Constant [ public int CURRENT_AS_SELF ] { 16 }
    Constant [ public int KEY_MODE_MASK ] { 3840 }
    Constant [ public int KEY_AS_PATHNAME ] { 0 }
    Constant [ public int FOLLOW_SYMLINKS ] { 512 }
    Constant [ public int KEY_AS_FILENAME ] { 256 }
    Constant [ public int NEW_CURRENT_AND_KEY ] { 256 }
    Constant [ public int OTHER_MODE_MASK ] { 12288 }
    Constant [ public int SKIP_DOTS ] { 4096 }
    Constant [ public int UNIX_PATHS ] { 8192 }
    Constant [ public int BZ2 ] { 8192 }
    Constant [ public int GZ ] { 4096 }
    Constant [ public int NONE ] { 0 }
    Constant [ public int PHAR ] { 1 }
    Constant [ public int TAR ] { 2 }
    Constant [ public int ZIP ] { 3 }
    Constant [ public int COMPRESSED ] { 61440 }
    Constant [ public int PHP ] { 0 }
    Constant [ public int PHPS ] { 1 }
    Constant [ public int MD5 ] { 1 }
    Constant [ public int OPENSSL ] { 16 }
    Constant [ public int SHA1 ] { 2 }
    Constant [ public int SHA256 ] { 3 }
    Constant [ public int SHA512 ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [15] {
    Method [ <internal:Phar> final static public method apiVersion ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> final static public method canCompress ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $method ]
      }
    }

    Method [ <internal:Phar> final static public method canWrite ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> final static public method createDefaultStub ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $index ]
        Parameter #1 [ <optional> $webindex ]
      }
    }

    Method [ <internal:Phar> final static public method getSupportedCompression ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> final static public method getSupportedSignatures ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> final static public method interceptFileFuncs ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> final static public method isValidPharFilename ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $executable ]
      }
    }

    Method [ <internal:Phar> final static public method loadPhar ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $alias ]
      }
    }

    Method [ <internal:Phar> final static public method mapPhar ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $alias ]
        Parameter #1 [ <optional> $offset ]
      }
    }

    Method [ <internal:Phar> final static public method running ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $retphar ]
      }
    }

    Method [ <internal:Phar> final static public method mount ] {

      - Parameters [2] {
        Parameter #0 [ <required> $inphar ]
        Parameter #1 [ <required> $externalfile ]
      }
    }

    Method [ <internal:Phar> final static public method mungServer ] {

      - Parameters [1] {
        Parameter #0 [ <required> $munglist ]
      }
    }

    Method [ <internal:Phar> final static public method unlinkArchive ] {

      - Parameters [1] {
        Parameter #0 [ <required> $archive ]
      }
    }

    Method [ <internal:Phar> final static public method webPhar ] {

      - Parameters [5] {
        Parameter #0 [ <optional> $alias ]
        Parameter #1 [ <optional> $index ]
        Parameter #2 [ <optional> $f404 ]
        Parameter #3 [ <optional> $mimetypes ]
        Parameter #4 [ <optional> $rewrites ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [82] {
    Method [ <internal:Phar, overwrites RecursiveDirectoryIterator, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
        Parameter #2 [ <optional> $alias ]
      }
    }

    Method [ <internal:Phar, dtor> public method __destruct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method addEmptyDir ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $dirname ]
      }
    }

    Method [ <internal:Phar> public method addFile ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $localname ]
      }
    }

    Method [ <internal:Phar> public method addFromString ] {

      - Parameters [2] {
        Parameter #0 [ <required> $localname ]
        Parameter #1 [ <optional> $contents ]
      }
    }

    Method [ <internal:Phar> public method buildFromDirectory ] {

      - Parameters [2] {
        Parameter #0 [ <required> $base_dir ]
        Parameter #1 [ <optional> $regex ]
      }
    }

    Method [ <internal:Phar> public method buildFromIterator ] {

      - Parameters [2] {
        Parameter #0 [ <required> $iterator ]
        Parameter #1 [ <optional> $base_directory ]
      }
    }

    Method [ <internal:Phar> public method compressFiles ] {

      - Parameters [1] {
        Parameter #0 [ <required> $compression_type ]
      }
    }

    Method [ <internal:Phar> public method decompressFiles ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method compress ] {

      - Parameters [2] {
        Parameter #0 [ <required> $compression_type ]
        Parameter #1 [ <optional> $file_ext ]
      }
    }

    Method [ <internal:Phar> public method decompress ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $file_ext ]
      }
    }

    Method [ <internal:Phar> public method convertToExecutable ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $format ]
        Parameter #1 [ <optional> $compression_type ]
        Parameter #2 [ <optional> $file_ext ]
      }
    }

    Method [ <internal:Phar> public method convertToData ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $format ]
        Parameter #1 [ <optional> $compression_type ]
        Parameter #2 [ <optional> $file_ext ]
      }
    }

    Method [ <internal:Phar> public method copy ] {

      - Parameters [2] {
        Parameter #0 [ <required> $newfile ]
        Parameter #1 [ <required> $oldfile ]
      }
    }

    Method [ <internal:Phar, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method delete ] {

      - Parameters [1] {
        Parameter #0 [ <required> $entry ]
      }
    }

    Method [ <internal:Phar> public method delMetadata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method extractTo ] {

      - Parameters [3] {
        Parameter #0 [ <required> $pathto ]
        Parameter #1 [ <optional> $files ]
        Parameter #2 [ <optional> $overwrite ]
      }
    }

    Method [ <internal:Phar> public method getAlias ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar, overwrites SplFileInfo, prototype SplFileInfo> public method getPath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method getMetadata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method getModified ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method getSignature ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method getStub ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method getVersion ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method hasMetadata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method isBuffering ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method isCompressed ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method isFileFormat ] {

      - Parameters [1] {
        Parameter #0 [ <required> $fileformat ]
      }
    }

    Method [ <internal:Phar, overwrites SplFileInfo, prototype SplFileInfo> public method isWritable ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $entry ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $entry ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $entry ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $entry ]
      }
    }

    Method [ <internal:Phar> public method setAlias ] {

      - Parameters [1] {
        Parameter #0 [ <required> $alias ]
      }
    }

    Method [ <internal:Phar> public method setDefaultStub ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $index ]
        Parameter #1 [ <optional> $webindex ]
      }
    }

    Method [ <internal:Phar> public method setMetadata ] {

      - Parameters [1] {
        Parameter #0 [ <required> $metadata ]
      }
    }

    Method [ <internal:Phar> public method setSignatureAlgorithm ] {

      - Parameters [2] {
        Parameter #0 [ <required> $algorithm ]
        Parameter #1 [ <optional> $privatekey ]
      }
    }

    Method [ <internal:Phar> public method setStub ] {

      - Parameters [2] {
        Parameter #0 [ <required> $newstub ]
        Parameter #1 [ <optional> $maxlen ]
      }
    }

    Method [ <internal:Phar> public method startBuffering ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method stopBuffering ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits RecursiveDirectoryIterator, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $allow_links ]
      }
    }

    Method [ <internal:SPL, inherits RecursiveDirectoryIterator, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits RecursiveDirectoryIterator> public method getSubPath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits RecursiveDirectoryIterator> public method getSubPathname ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator> public method getFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SplFileInfo> public method getFilename ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SplFileInfo> public method getExtension ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SplFileInfo> public method getBasename ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $suffix ]
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator> public method isDot ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SeekableIterator> public method seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $position ]
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SplFileInfo> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPathname ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPerms ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getInode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getSize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getOwner ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getGroup ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getATime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getMTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getCTime ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isReadable ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isExecutable ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isFile ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isDir ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isLink ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getLinkTarget ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getRealPath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getFileInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $class_name ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPathInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $class_name ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method openFile ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $open_mode ]
        Parameter #1 [ <optional> $use_include_path ]
        Parameter #2 [ <optional> $context ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setFileClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $class_name ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setInfoClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $class_name ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method __debugInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> final public method _bad_state_ex ] {
    }
  }
}
',
);
