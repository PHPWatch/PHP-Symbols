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
        'name' => 'ZipArchive class (php.net)',
        'url' => 'https://www.php.net/manual/class.ziparchive.php',
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
  'properties' => 
  array (
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
          'type' => NULL,
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'ZipArchive',
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
    'getStatusString' => 
    array (
      'name' => 'getStatusString',
      'class' => 'ZipArchive',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'content' => 
        array (
          'position' => 1,
          'name' => 'content',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'entryname' => 
        array (
          'position' => 1,
          'name' => 'entryname',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 2,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 3,
          'name' => 'length',
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'path' => 
        array (
          'position' => 1,
          'name' => 'path',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_name' => 
        array (
          'position' => 1,
          'name' => 'new_name',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_name' => 
        array (
          'position' => 1,
          'name' => 'new_name',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'comment' => 
        array (
          'position' => 1,
          'name' => 'comment',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'comment' => 
        array (
          'position' => 1,
          'name' => 'comment',
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
          'type' => NULL,
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
          'type' => NULL,
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
    'statName' => 
    array (
      'name' => 'statName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
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
          'type' => NULL,
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
    'locateName' => 
    array (
      'name' => 'locateName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
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
          'type' => NULL,
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
    'unchangeArchive' => 
    array (
      'name' => 'unchangeArchive',
      'class' => 'ZipArchive',
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
    'unchangeAll' => 
    array (
      'name' => 'unchangeAll',
      'class' => 'ZipArchive',
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
          'type' => NULL,
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
    'getFromName' => 
    array (
      'name' => 'getFromName',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'entryname' => 
        array (
          'position' => 0,
          'name' => 'entryname',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'len' => 
        array (
          'position' => 1,
          'name' => 'len',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'len' => 
        array (
          'position' => 1,
          'name' => 'len',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
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
    'getStream' => 
    array (
      'name' => 'getStream',
      'class' => 'ZipArchive',
      'parameters' => 
      array (
        'entryname' => 
        array (
          'position' => 0,
          'name' => 'entryname',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'zip',
  'toString' => 'Class [ <internal:zip> class ZipArchive ] {

  - Constants [70] {
    Constant [ integer CREATE ] { 1 }
    Constant [ integer EXCL ] { 2 }
    Constant [ integer CHECKCONS ] { 4 }
    Constant [ integer OVERWRITE ] { 8 }
    Constant [ integer FL_NOCASE ] { 1 }
    Constant [ integer FL_NODIR ] { 2 }
    Constant [ integer FL_COMPRESSED ] { 4 }
    Constant [ integer FL_UNCHANGED ] { 8 }
    Constant [ integer CM_DEFAULT ] { -1 }
    Constant [ integer CM_STORE ] { 0 }
    Constant [ integer CM_SHRINK ] { 1 }
    Constant [ integer CM_REDUCE_1 ] { 2 }
    Constant [ integer CM_REDUCE_2 ] { 3 }
    Constant [ integer CM_REDUCE_3 ] { 4 }
    Constant [ integer CM_REDUCE_4 ] { 5 }
    Constant [ integer CM_IMPLODE ] { 6 }
    Constant [ integer CM_DEFLATE ] { 8 }
    Constant [ integer CM_DEFLATE64 ] { 9 }
    Constant [ integer CM_PKWARE_IMPLODE ] { 10 }
    Constant [ integer CM_BZIP2 ] { 12 }
    Constant [ integer CM_LZMA ] { 14 }
    Constant [ integer CM_TERSE ] { 18 }
    Constant [ integer CM_LZ77 ] { 19 }
    Constant [ integer CM_WAVPACK ] { 97 }
    Constant [ integer CM_PPMD ] { 98 }
    Constant [ integer ER_OK ] { 0 }
    Constant [ integer ER_MULTIDISK ] { 1 }
    Constant [ integer ER_RENAME ] { 2 }
    Constant [ integer ER_CLOSE ] { 3 }
    Constant [ integer ER_SEEK ] { 4 }
    Constant [ integer ER_READ ] { 5 }
    Constant [ integer ER_WRITE ] { 6 }
    Constant [ integer ER_CRC ] { 7 }
    Constant [ integer ER_ZIPCLOSED ] { 8 }
    Constant [ integer ER_NOENT ] { 9 }
    Constant [ integer ER_EXISTS ] { 10 }
    Constant [ integer ER_OPEN ] { 11 }
    Constant [ integer ER_TMPOPEN ] { 12 }
    Constant [ integer ER_ZLIB ] { 13 }
    Constant [ integer ER_MEMORY ] { 14 }
    Constant [ integer ER_CHANGED ] { 15 }
    Constant [ integer ER_COMPNOTSUPP ] { 16 }
    Constant [ integer ER_EOF ] { 17 }
    Constant [ integer ER_INVAL ] { 18 }
    Constant [ integer ER_NOZIP ] { 19 }
    Constant [ integer ER_INTERNAL ] { 20 }
    Constant [ integer ER_INCONS ] { 21 }
    Constant [ integer ER_REMOVE ] { 22 }
    Constant [ integer ER_DELETED ] { 23 }
    Constant [ integer OPSYS_DOS ] { 0 }
    Constant [ integer OPSYS_AMIGA ] { 1 }
    Constant [ integer OPSYS_OPENVMS ] { 2 }
    Constant [ integer OPSYS_UNIX ] { 3 }
    Constant [ integer OPSYS_VM_CMS ] { 4 }
    Constant [ integer OPSYS_ATARI_ST ] { 5 }
    Constant [ integer OPSYS_OS_2 ] { 6 }
    Constant [ integer OPSYS_MACINTOSH ] { 7 }
    Constant [ integer OPSYS_Z_SYSTEM ] { 8 }
    Constant [ integer OPSYS_Z_CPM ] { 9 }
    Constant [ integer OPSYS_WINDOWS_NTFS ] { 10 }
    Constant [ integer OPSYS_MVS ] { 11 }
    Constant [ integer OPSYS_VSE ] { 12 }
    Constant [ integer OPSYS_ACORN_RISC ] { 13 }
    Constant [ integer OPSYS_VFAT ] { 14 }
    Constant [ integer OPSYS_ALTERNATE_MVS ] { 15 }
    Constant [ integer OPSYS_BEOS ] { 16 }
    Constant [ integer OPSYS_TANDEM ] { 17 }
    Constant [ integer OPSYS_OS_400 ] { 18 }
    Constant [ integer OPSYS_OS_X ] { 19 }
    Constant [ integer OPSYS_DEFAULT ] { 3 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [35] {
    Method [ <internal:zip> public method open ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method setPassword ] {

      - Parameters [1] {
        Parameter #0 [ <required> $password ]
      }
    }

    Method [ <internal:zip> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zip> public method getStatusString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zip> public method addEmptyDir ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dirname ]
      }
    }

    Method [ <internal:zip> public method addFromString ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $content ]
      }
    }

    Method [ <internal:zip> public method addFile ] {

      - Parameters [4] {
        Parameter #0 [ <required> $filepath ]
        Parameter #1 [ <optional> $entryname ]
        Parameter #2 [ <optional> $start ]
        Parameter #3 [ <optional> $length ]
      }
    }

    Method [ <internal:zip> public method addGlob ] {

      - Parameters [3] {
        Parameter #0 [ <required> $pattern ]
        Parameter #1 [ <optional> $flags ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:zip> public method addPattern ] {

      - Parameters [3] {
        Parameter #0 [ <required> $pattern ]
        Parameter #1 [ <optional> $path ]
        Parameter #2 [ <optional> $options ]
      }
    }

    Method [ <internal:zip> public method renameIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> $new_name ]
      }
    }

    Method [ <internal:zip> public method renameName ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $new_name ]
      }
    }

    Method [ <internal:zip> public method setArchiveComment ] {

      - Parameters [1] {
        Parameter #0 [ <required> $comment ]
      }
    }

    Method [ <internal:zip> public method getArchiveComment ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method setCommentIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> $comment ]
      }
    }

    Method [ <internal:zip> public method setCommentName ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $comment ]
      }
    }

    Method [ <internal:zip> public method getCommentIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getCommentName ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method deleteIndex ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:zip> public method deleteName ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:zip> public method statName ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method statIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method locateName ] {

      - Parameters [2] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getNameIndex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method unchangeArchive ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zip> public method unchangeAll ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zip> public method unchangeIndex ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:zip> public method unchangeName ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:zip> public method extractTo ] {

      - Parameters [2] {
        Parameter #0 [ <required> $pathto ]
        Parameter #1 [ <optional> $files ]
      }
    }

    Method [ <internal:zip> public method getFromName ] {

      - Parameters [3] {
        Parameter #0 [ <required> $entryname ]
        Parameter #1 [ <optional> $len ]
        Parameter #2 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getFromIndex ] {

      - Parameters [3] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <optional> $len ]
        Parameter #2 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getStream ] {

      - Parameters [1] {
        Parameter #0 [ <required> $entryname ]
      }
    }

    Method [ <internal:zip> public method setExternalAttributesName ] {

      - Parameters [4] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $opsys ]
        Parameter #2 [ <required> $attr ]
        Parameter #3 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method setExternalAttributesIndex ] {

      - Parameters [4] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> $opsys ]
        Parameter #2 [ <required> $attr ]
        Parameter #3 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getExternalAttributesName ] {

      - Parameters [4] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> &$opsys ]
        Parameter #2 [ <required> &$attr ]
        Parameter #3 [ <optional> $flags ]
      }
    }

    Method [ <internal:zip> public method getExternalAttributesIndex ] {

      - Parameters [4] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> &$opsys ]
        Parameter #2 [ <required> &$attr ]
        Parameter #3 [ <optional> $flags ]
      }
    }
  }
}
',
);
