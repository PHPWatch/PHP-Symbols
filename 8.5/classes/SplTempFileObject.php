<?php

return array (
  'type' => 'class',
  'name' => 'SplTempFileObject',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SplTempFileObject',
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
        'name' => 'SplTempFileObject class (php.net)',
        'url' => 'https://www.php.net/manual/class.spltempfileobject.php',
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
    0 => 'SeekableIterator',
    1 => 'Iterator',
    2 => 'Traversable',
    3 => 'RecursiveIterator',
    4 => 'Stringable',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'SplTempFileObject',
      'parameters' => 
      array (
        'maxMemory' => 
        array (
          'position' => 0,
          'name' => 'maxMemory',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'SplFileObject',
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
    'eof' => 
    array (
      'name' => 'eof',
      'class' => 'SplFileObject',
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
      'class' => 'SplFileObject',
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
    'fgets' => 
    array (
      'name' => 'fgets',
      'class' => 'SplFileObject',
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
    'fread' => 
    array (
      'name' => 'fread',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'length' => 
        array (
          'position' => 0,
          'name' => 'length',
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
    'fgetcsv' => 
    array (
      'name' => 'fgetcsv',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'separator' => 
        array (
          'position' => 0,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'enclosure' => 
        array (
          'position' => 1,
          'name' => 'enclosure',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'escape' => 
        array (
          'position' => 2,
          'name' => 'escape',
          'type' => 'string',
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
    'fputcsv' => 
    array (
      'name' => 'fputcsv',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'fields' => 
        array (
          'position' => 0,
          'name' => 'fields',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'separator' => 
        array (
          'position' => 1,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'enclosure' => 
        array (
          'position' => 2,
          'name' => 'enclosure',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'escape' => 
        array (
          'position' => 3,
          'name' => 'escape',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'eol' => 
        array (
          'position' => 4,
          'name' => 'eol',
          'type' => 'string',
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
    'setCsvControl' => 
    array (
      'name' => 'setCsvControl',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'separator' => 
        array (
          'position' => 0,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'enclosure' => 
        array (
          'position' => 1,
          'name' => 'enclosure',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'escape' => 
        array (
          'position' => 2,
          'name' => 'escape',
          'type' => 'string',
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
    'getCsvControl' => 
    array (
      'name' => 'getCsvControl',
      'class' => 'SplFileObject',
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
    'flock' => 
    array (
      'name' => 'flock',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'operation' => 
        array (
          'position' => 0,
          'name' => 'operation',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'wouldBlock' => 
        array (
          'position' => 1,
          'name' => 'wouldBlock',
          'type' => NULL,
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
    'fflush' => 
    array (
      'name' => 'fflush',
      'class' => 'SplFileObject',
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
    'ftell' => 
    array (
      'name' => 'ftell',
      'class' => 'SplFileObject',
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
    'fseek' => 
    array (
      'name' => 'fseek',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'whence' => 
        array (
          'position' => 1,
          'name' => 'whence',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'SEEK_SET',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fgetc' => 
    array (
      'name' => 'fgetc',
      'class' => 'SplFileObject',
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
    'fpassthru' => 
    array (
      'name' => 'fpassthru',
      'class' => 'SplFileObject',
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
    'fscanf' => 
    array (
      'name' => 'fscanf',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'vars' => 
        array (
          'position' => 1,
          'name' => 'vars',
          'type' => 'mixed',
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
    'fwrite' => 
    array (
      'name' => 'fwrite',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => '?int',
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
    'fstat' => 
    array (
      'name' => 'fstat',
      'class' => 'SplFileObject',
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
    'ftruncate' => 
    array (
      'name' => 'ftruncate',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'size' => 
        array (
          'position' => 0,
          'name' => 'size',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'SplFileObject',
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
      'class' => 'SplFileObject',
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
      'class' => 'SplFileObject',
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
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'SplFileObject',
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
    'setMaxLineLen' => 
    array (
      'name' => 'setMaxLineLen',
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'maxLength' => 
        array (
          'position' => 0,
          'name' => 'maxLength',
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
    'getMaxLineLen' => 
    array (
      'name' => 'getMaxLineLen',
      'class' => 'SplFileObject',
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
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'SplFileObject',
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
    'getChildren' => 
    array (
      'name' => 'getChildren',
      'class' => 'SplFileObject',
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
      'class' => 'SplFileObject',
      'parameters' => 
      array (
        'line' => 
        array (
          'position' => 0,
          'name' => 'line',
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
    'getCurrentLine' => 
    array (
      'name' => 'getCurrentLine',
      'class' => 'SplFileObject',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'SplFileObject',
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
    'getFilename' => 
    array (
      'name' => 'getFilename',
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
    'getExtension' => 
    array (
      'name' => 'getExtension',
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
    'getBasename' => 
    array (
      'name' => 'getBasename',
      'class' => 'SplFileInfo',
      'parameters' => 
      array (
        'suffix' => 
        array (
          'position' => 0,
          'name' => 'suffix',
          'type' => 'string',
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
      'return_type' => 'void',
      'has_return_type' => true,
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class SplTempFileObject extends SplFileObject implements SeekableIterator, Iterator, Traversable, RecursiveIterator, Stringable ] {

  - Constants [4] {
    Constant [ public int DROP_NEW_LINE ] { 1 }
    Constant [ public int READ_AHEAD ] { 2 }
    Constant [ public int SKIP_EMPTY ] { 4 }
    Constant [ public int READ_CSV ] { 8 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [61] {
    Method [ <internal:SPL, overwrites SplFileObject, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $maxMemory = 2 * 1024 * 1024 ]
      }
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method eof ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fgets ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fread ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $length ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fgetcsv ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $separator = "," ]
        Parameter #1 [ <optional> string $enclosure = "\\"" ]
        Parameter #2 [ <optional> string $escape = "\\\\" ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fputcsv ] {

      - Parameters [5] {
        Parameter #0 [ <required> array $fields ]
        Parameter #1 [ <optional> string $separator = "," ]
        Parameter #2 [ <optional> string $enclosure = "\\"" ]
        Parameter #3 [ <optional> string $escape = "\\\\" ]
        Parameter #4 [ <optional> string $eol = "\\n" ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method setCsvControl ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $separator = "," ]
        Parameter #1 [ <optional> string $enclosure = "\\"" ]
        Parameter #2 [ <optional> string $escape = "\\\\" ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method getCsvControl ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method flock ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $operation ]
        Parameter #1 [ <optional> &$wouldBlock = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fflush ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method ftell ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fseek ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $offset ]
        Parameter #1 [ <optional> int $whence = SEEK_SET ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fgetc ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fpassthru ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fscanf ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $format ]
        Parameter #1 [ <optional> mixed &...$vars ]
      }
      - Tentative return [ array|int|null ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fwrite ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> ?int $length = null ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method fstat ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method ftruncate ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $size ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ array|string|false ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method getFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method setMaxLineLen ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $maxLength ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method getMaxLineLen ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ false ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ null ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype SeekableIterator> public method seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $line ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileObject> public method getCurrentLine ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileObject, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPath ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getFilename ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getExtension ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getBasename ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $suffix = "" ]
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPathname ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPerms ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getInode ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getSize ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getOwner ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getGroup ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getATime ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getMTime ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getCTime ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getType ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isWritable ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isReadable ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isExecutable ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isFile ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isDir ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method isLink ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getLinkTarget ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getRealPath ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getFileInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $class = null ]
      }
      - Tentative return [ SplFileInfo ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method getPathInfo ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $class = null ]
      }
      - Tentative return [ ?SplFileInfo ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method openFile ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $mode = "r" ]
        Parameter #1 [ <optional> bool $useIncludePath = false ]
        Parameter #2 [ <optional> $context = null ]
      }
      - Tentative return [ SplFileObject ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setFileClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $class = SplFileObject::class ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method setInfoClass ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $class = SplFileInfo::class ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits SplFileInfo> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal, deprecated:SPL, inherits SplFileInfo> final public method _bad_state_ex ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
);
