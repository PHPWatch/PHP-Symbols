<?php

return array (
  'type' => 'class',
  'name' => 'PharData',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'PharData',
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
        'name' => 'PharData class (php.net)',
        'url' => 'https://www.php.net/manual/class.phardata.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'RecursiveIterator',
    1 => 'SeekableIterator',
    2 => 'Traversable',
    3 => 'Iterator',
    4 => 'Stringable',
    5 => 'Countable',
    6 => 'ArrayAccess',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
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
          'default_value' => 12288,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alias' => 
        array (
          'position' => 2,
          'name' => 'alias',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 3,
          'name' => 'format',
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
    '__destruct' => 
    array (
      'name' => '__destruct',
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
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
    'addFromString' => 
    array (
      'name' => 'addFromString',
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'contents' => 
        array (
          'position' => 1,
          'name' => 'contents',
          'type' => 'string',
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
    'buildFromDirectory' => 
    array (
      'name' => 'buildFromDirectory',
      'class' => 'PharData',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
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
    'buildFromIterator' => 
    array (
      'name' => 'buildFromIterator',
      'class' => 'PharData',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Traversable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'baseDirectory' => 
        array (
          'position' => 1,
          'name' => 'baseDirectory',
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
    'compressFiles' => 
    array (
      'name' => 'compressFiles',
      'class' => 'PharData',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
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
    'decompressFiles' => 
    array (
      'name' => 'decompressFiles',
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extension' => 
        array (
          'position' => 1,
          'name' => 'extension',
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
    'decompress' => 
    array (
      'name' => 'decompress',
      'class' => 'PharData',
      'parameters' => 
      array (
        'extension' => 
        array (
          'position' => 0,
          'name' => 'extension',
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
    'convertToExecutable' => 
    array (
      'name' => 'convertToExecutable',
      'class' => 'PharData',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compression' => 
        array (
          'position' => 1,
          'name' => 'compression',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extension' => 
        array (
          'position' => 2,
          'name' => 'extension',
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
    'convertToData' => 
    array (
      'name' => 'convertToData',
      'class' => 'PharData',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compression' => 
        array (
          'position' => 1,
          'name' => 'compression',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extension' => 
        array (
          'position' => 2,
          'name' => 'extension',
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
    'copy' => 
    array (
      'name' => 'copy',
      'class' => 'PharData',
      'parameters' => 
      array (
        'from' => 
        array (
          'position' => 0,
          'name' => 'from',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'to' => 
        array (
          'position' => 1,
          'name' => 'to',
          'type' => 'string',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'PharData',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'COUNT_NORMAL',
        ),
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
          'type' => 'string',
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
    'delMetadata' => 
    array (
      'name' => 'delMetadata',
      'class' => 'PharData',
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
      'class' => 'PharData',
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
        'files' => 
        array (
          'position' => 1,
          'name' => 'files',
          'type' => 'array|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'overwrite' => 
        array (
          'position' => 2,
          'name' => 'overwrite',
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
    'getAlias' => 
    array (
      'name' => 'getAlias',
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'unserializeOptions' => 
        array (
          'position' => 0,
          'name' => 'unserializeOptions',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
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
    'getModified' => 
    array (
      'name' => 'getModified',
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'format' => 
        array (
          'position' => 0,
          'name' => 'format',
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
    'isWritable' => 
    array (
      'name' => 'isWritable',
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
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
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
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
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'PharData',
      'parameters' => 
      array (
        'localName' => 
        array (
          'position' => 0,
          'name' => 'localName',
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
    'setAlias' => 
    array (
      'name' => 'setAlias',
      'class' => 'PharData',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => 'string',
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
    'setDefaultStub' => 
    array (
      'name' => 'setDefaultStub',
      'class' => 'PharData',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'webIndex' => 
        array (
          'position' => 1,
          'name' => 'webIndex',
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
    'setMetadata' => 
    array (
      'name' => 'setMetadata',
      'class' => 'PharData',
      'parameters' => 
      array (
        'metadata' => 
        array (
          'position' => 0,
          'name' => 'metadata',
          'type' => 'mixed',
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
    'setSignatureAlgorithm' => 
    array (
      'name' => 'setSignatureAlgorithm',
      'class' => 'PharData',
      'parameters' => 
      array (
        'algo' => 
        array (
          'position' => 0,
          'name' => 'algo',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'privateKey' => 
        array (
          'position' => 1,
          'name' => 'privateKey',
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
    'setStub' => 
    array (
      'name' => 'setStub',
      'class' => 'PharData',
      'parameters' => 
      array (
        'stub' => 
        array (
          'position' => 0,
          'name' => 'stub',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => 'int',
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
    'startBuffering' => 
    array (
      'name' => 'startBuffering',
      'class' => 'PharData',
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
      'class' => 'PharData',
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
      'class' => 'PharData',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'canCompress' => 
    array (
      'name' => 'canCompress',
      'class' => 'PharData',
      'parameters' => 
      array (
        'compression' => 
        array (
          'position' => 0,
          'name' => 'compression',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'canWrite' => 
    array (
      'name' => 'canWrite',
      'class' => 'PharData',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createDefaultStub' => 
    array (
      'name' => 'createDefaultStub',
      'class' => 'PharData',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'webIndex' => 
        array (
          'position' => 1,
          'name' => 'webIndex',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getSupportedCompression' => 
    array (
      'name' => 'getSupportedCompression',
      'class' => 'PharData',
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
    'getSupportedSignatures' => 
    array (
      'name' => 'getSupportedSignatures',
      'class' => 'PharData',
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
    'interceptFileFuncs' => 
    array (
      'name' => 'interceptFileFuncs',
      'class' => 'PharData',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isValidPharFilename' => 
    array (
      'name' => 'isValidPharFilename',
      'class' => 'PharData',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'executable' => 
        array (
          'position' => 1,
          'name' => 'executable',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
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
    'loadPhar' => 
    array (
      'name' => 'loadPhar',
      'class' => 'PharData',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'alias' => 
        array (
          'position' => 1,
          'name' => 'alias',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
    'mapPhar' => 
    array (
      'name' => 'mapPhar',
      'class' => 'PharData',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'running' => 
    array (
      'name' => 'running',
      'class' => 'PharData',
      'parameters' => 
      array (
        'returnPhar' => 
        array (
          'position' => 0,
          'name' => 'returnPhar',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mount' => 
    array (
      'name' => 'mount',
      'class' => 'PharData',
      'parameters' => 
      array (
        'pharPath' => 
        array (
          'position' => 0,
          'name' => 'pharPath',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'externalPath' => 
        array (
          'position' => 1,
          'name' => 'externalPath',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mungServer' => 
    array (
      'name' => 'mungServer',
      'class' => 'PharData',
      'parameters' => 
      array (
        'variables' => 
        array (
          'position' => 0,
          'name' => 'variables',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unlinkArchive' => 
    array (
      'name' => 'unlinkArchive',
      'class' => 'PharData',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'webPhar' => 
    array (
      'name' => 'webPhar',
      'class' => 'PharData',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fileNotFoundScript' => 
        array (
          'position' => 2,
          'name' => 'fileNotFoundScript',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mimeTypes' => 
        array (
          'position' => 3,
          'name' => 'mimeTypes',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rewrite' => 
        array (
          'position' => 4,
          'name' => 'rewrite',
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
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
  'toString' => 'Class [ <internal:Phar> <iterateable> class PharData extends RecursiveDirectoryIterator implements RecursiveIterator, SeekableIterator, Traversable, Iterator, Stringable, Countable, ArrayAccess ] {

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

  - Static methods [15] {
    Method [ <internal:Phar> final static public method apiVersion ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Phar> final static public method canCompress ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $compression = 0 ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method canWrite ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method createDefaultStub ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $index = null ]
        Parameter #1 [ <optional> ?string $webIndex = null ]
      }
      - Return [ string ]
    }

    Method [ <internal:Phar> final static public method getSupportedCompression ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Phar> final static public method getSupportedSignatures ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Phar> final static public method interceptFileFuncs ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Phar> final static public method isValidPharFilename ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> bool $executable = true ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method loadPhar ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> ?string $alias = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method mapPhar ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $alias = null ]
        Parameter #1 [ <optional> int $offset = 0 ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method running ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $returnPhar = true ]
      }
      - Return [ string ]
    }

    Method [ <internal:Phar> final static public method mount ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $pharPath ]
        Parameter #1 [ <required> string $externalPath ]
      }
      - Return [ void ]
    }

    Method [ <internal:Phar> final static public method mungServer ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $variables ]
      }
      - Return [ void ]
    }

    Method [ <internal:Phar> final static public method unlinkArchive ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $filename ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Phar> final static public method webPhar ] {

      - Parameters [5] {
        Parameter #0 [ <optional> ?string $alias = null ]
        Parameter #1 [ <optional> ?string $index = null ]
        Parameter #2 [ <optional> ?string $fileNotFoundScript = null ]
        Parameter #3 [ <optional> array $mimeTypes = [] ]
        Parameter #4 [ <optional> ?callable $rewrite = null ]
      }
      - Return [ void ]
    }
  }

  - Properties [0] {
  }

  - Methods [82] {
    Method [ <internal:Phar, overwrites RecursiveDirectoryIterator, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS ]
        Parameter #2 [ <optional> ?string $alias = null ]
        Parameter #3 [ <optional> int $format = 0 ]
      }
    }

    Method [ <internal:Phar> public method __destruct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method addEmptyDir ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $directory ]
      }
    }

    Method [ <internal:Phar> public method addFile ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> ?string $localName = null ]
      }
    }

    Method [ <internal:Phar> public method addFromString ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $localName ]
        Parameter #1 [ <required> string $contents ]
      }
    }

    Method [ <internal:Phar> public method buildFromDirectory ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $directory ]
        Parameter #1 [ <optional> string $pattern = "" ]
      }
    }

    Method [ <internal:Phar> public method buildFromIterator ] {

      - Parameters [2] {
        Parameter #0 [ <required> Traversable $iterator ]
        Parameter #1 [ <optional> ?string $baseDirectory = null ]
      }
    }

    Method [ <internal:Phar> public method compressFiles ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $compression ]
      }
    }

    Method [ <internal:Phar> public method decompressFiles ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method compress ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $compression ]
        Parameter #1 [ <optional> ?string $extension = null ]
      }
    }

    Method [ <internal:Phar> public method decompress ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $extension = null ]
      }
    }

    Method [ <internal:Phar> public method convertToExecutable ] {

      - Parameters [3] {
        Parameter #0 [ <optional> ?int $format = null ]
        Parameter #1 [ <optional> ?int $compression = null ]
        Parameter #2 [ <optional> ?string $extension = null ]
      }
    }

    Method [ <internal:Phar> public method convertToData ] {

      - Parameters [3] {
        Parameter #0 [ <optional> ?int $format = null ]
        Parameter #1 [ <optional> ?int $compression = null ]
        Parameter #2 [ <optional> ?string $extension = null ]
      }
    }

    Method [ <internal:Phar> public method copy ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $from ]
        Parameter #1 [ <required> string $to ]
      }
    }

    Method [ <internal:Phar, prototype Countable> public method count ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $mode = COUNT_NORMAL ]
      }
    }

    Method [ <internal:Phar> public method delete ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $localName ]
      }
    }

    Method [ <internal:Phar> public method delMetadata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar> public method extractTo ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $directory ]
        Parameter #1 [ <optional> array|string|null $files = null ]
        Parameter #2 [ <optional> bool $overwrite = false ]
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

      - Parameters [1] {
        Parameter #0 [ <optional> array $unserializeOptions = [] ]
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
        Parameter #0 [ <required> int $format ]
      }
    }

    Method [ <internal:Phar, overwrites SplFileInfo, prototype SplFileInfo> public method isWritable ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $localName ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $localName ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $localName ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:Phar, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $localName ]
      }
    }

    Method [ <internal:Phar> public method setAlias ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $alias ]
      }
    }

    Method [ <internal:Phar> public method setDefaultStub ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $index = null ]
        Parameter #1 [ <optional> ?string $webIndex = null ]
      }
    }

    Method [ <internal:Phar> public method setMetadata ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $metadata ]
      }
    }

    Method [ <internal:Phar> public method setSignatureAlgorithm ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $algo ]
        Parameter #1 [ <optional> ?string $privateKey = null ]
      }
    }

    Method [ <internal:Phar> public method setStub ] {

      - Parameters [2] {
        Parameter #0 [ <required> $stub ]
        Parameter #1 [ <optional> int $length = <default> ]
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
        Parameter #0 [ <optional> bool $allowLinks = false ]
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
