<?php

return array (
  'type' => 'extension',
  'name' => 'zip',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'zip',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'zip',
    )),
    'removed' => NULL,
    'version' => '1.22.3',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zip extension (php.net)',
        'url' => 'https://www.php.net/manual/book.zip.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'ZipArchive',
  ),
  'functions' => 
  array (
    'zip_open' => 'zip_open',
    'zip_close' => 'zip_close',
    'zip_read' => 'zip_read',
    'zip_entry_open' => 'zip_entry_open',
    'zip_entry_close' => 'zip_entry_close',
    'zip_entry_read' => 'zip_entry_read',
    'zip_entry_name' => 'zip_entry_name',
    'zip_entry_compressedsize' => 'zip_entry_compressedsize',
    'zip_entry_filesize' => 'zip_entry_filesize',
    'zip_entry_compressionmethod' => 'zip_entry_compressionmethod',
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
