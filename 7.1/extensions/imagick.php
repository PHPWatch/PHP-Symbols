<?php

return array (
  'type' => 'extension',
  'name' => 'imagick',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'imagick',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'imagick',
    )),
    'removed' => NULL,
    'version' => '3.7.0',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'imagick extension (php.net)',
        'url' => 'https://www.php.net/manual/book.imagick.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'ImagickException',
    1 => 'ImagickDrawException',
    2 => 'ImagickPixelIteratorException',
    3 => 'ImagickPixelException',
    4 => 'ImagickKernelException',
    5 => 'Imagick',
    6 => 'ImagickDraw',
    7 => 'ImagickPixelIterator',
    8 => 'ImagickPixel',
    9 => 'ImagickKernel',
  ),
  'functions' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'imagick.allow_zero_dimension_images' => '0',
    'imagick.locale_fix' => '0',
    'imagick.progress_monitor' => '0',
    'imagick.set_single_thread' => '1',
    'imagick.shutdown_sleep_count' => '10',
    'imagick.skip_version_check' => '1',
  ),
);
