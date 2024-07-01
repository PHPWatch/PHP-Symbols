<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveDirectoryIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveDirectoryIterator',
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
        'name' => 'RecursiveDirectoryIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.recursivedirectoryiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => 'Iterator',
    2 => 'Traversable',
    3 => 'SeekableIterator',
    4 => 'RecursiveIterator',
  ),
  'constants' => 
  array (
    'CURRENT_MODE_MASK' => 240,
    'CURRENT_AS_PATHNAME' => 32,
    'CURRENT_AS_FILEINFO' => 0,
    'CURRENT_AS_SELF' => 16,
    'KEY_MODE_MASK' => 3840,
    'KEY_AS_PATHNAME' => 0,
    'FOLLOW_SYMLINKS' => 512,
    'KEY_AS_FILENAME' => 256,
    'NEW_CURRENT_AND_KEY' => 256,
    'OTHER_MODE_MASK' => 12288,
    'SKIP_DOTS' => 4096,
    'UNIX_PATHS' => 8192,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RecursiveDirectoryIterator',
      'parameters' => 
      array (
        'directory' => 
        array (
          'position' => 0,
          'name' => 'directory',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => 0,
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
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'RecursiveDirectoryIterator',
      'parameters' => 
      array (
        'allowLinks' => 
        array (
          'position' => 0,
          'name' => 'allowLinks',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
          'type' => 'int',
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
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
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
    'next' => 
    array (
      'name' => 'next',
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
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'DirectoryIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPath' => 
    array (
      'name' => 'getPath',
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
    'isWritable' => 
    array (
      'name' => 'isWritable',
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
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getPathInfo' => 
    array (
      'name' => 'getPathInfo',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'openFile' => 
    array (
      'name' => 'openFile',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'r',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'useIncludePath' => 
        array (
          'position' => 1,
          'name' => 'useIncludePath',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'context' => 
        array (
          'position' => 2,
          'name' => 'context',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
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
    'setFileClass' => 
    array (
      'name' => 'setFileClass',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'SplFileObject',
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
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'SplFileInfo',
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
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveDirectoryIterator extends FilesystemIterator implements Stringable, Iterator, Traversable, SeekableIterator, RecursiveIterator ] {

  - Constants [12] {
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
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [44] {
    Method [ <internal:SPL, overwrites FilesystemIterator, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $directory ]
        Parameter #1 [ <optional> int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO ]
      }
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $allowLinks = false ]
      }
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method getSubPath ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method getSubPathname ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilesystemIterator, prototype Iterator> public method rewind ] {

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
        Parameter #0 [ <required> int $flags ]
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
        Parameter #0 [ <optional> string $suffix = "" ]
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

    Method [ <internal:SPL, inherits DirectoryIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype SeekableIterator> public method seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
    }

    Method [ <internal:SPL, inherits DirectoryIterator, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPath ] {

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

    Method [ <internal:SPL, inherits SplFileInfo> public method isWritable ] {

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
        Parameter #0 [ <optional> ?string $class = null ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPathInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $class = null ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method openFile ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $mode = "r" ]
        Parameter #1 [ <optional> bool $useIncludePath = false ]
        Parameter #2 [ <optional> $context = null ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setFileClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $class = SplFileObject::class ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setInfoClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $class = SplFileInfo::class ]
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method __debugInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplFileInfo> final public method _bad_state_ex ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
