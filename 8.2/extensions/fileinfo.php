<?php

return array (
  'type' => 'extension',
  'name' => 'fileinfo',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'fileinfo',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'fileinfo',
    )),
    'removed' => NULL,
    'version' => '8.2.21',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'fileinfo extension (php.net)',
        'url' => 'https://www.php.net/manual/book.fileinfo.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'finfo',
  ),
  'functions' => 
  array (
    'finfo_open' => 'finfo_open',
    'finfo_close' => 'finfo_close',
    'finfo_set_flags' => 'finfo_set_flags',
    'finfo_file' => 'finfo_file',
    'finfo_buffer' => 'finfo_buffer',
    'mime_content_type' => 'mime_content_type',
  ),
  'constants' => 
  array (
    'FILEINFO_NONE' => 0,
    'FILEINFO_SYMLINK' => 2,
    'FILEINFO_MIME' => 1040,
    'FILEINFO_MIME_TYPE' => 16,
    'FILEINFO_MIME_ENCODING' => 1024,
    'FILEINFO_DEVICES' => 8,
    'FILEINFO_CONTINUE' => 32,
    'FILEINFO_PRESERVE_ATIME' => 128,
    'FILEINFO_RAW' => 256,
    'FILEINFO_APPLE' => 2048,
    'FILEINFO_EXTENSION' => 16777216,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
