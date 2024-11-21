<?php

return array (
  'type' => 'extension',
  'name' => 'exif',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'exif',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'exif',
    )),
    'removed' => NULL,
    'version' => '8.1.31',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'exif extension (php.net)',
        'url' => 'https://www.php.net/manual/book.exif.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'exif_tagname' => 'exif_tagname',
    'exif_read_data' => 'exif_read_data',
    'exif_thumbnail' => 'exif_thumbnail',
    'exif_imagetype' => 'exif_imagetype',
  ),
  'constants' => 
  array (
    'EXIF_USE_MBSTRING' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'exif.decode_jis_intel' => 'JIS',
    'exif.decode_jis_motorola' => 'JIS',
    'exif.decode_unicode_intel' => 'UCS-2LE',
    'exif.decode_unicode_motorola' => 'UCS-2BE',
    'exif.encode_jis' => '',
    'exif.encode_unicode' => 'ISO-8859-15',
  ),
);
