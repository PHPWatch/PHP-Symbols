<?php

return array (
  'type' => 'extension',
  'name' => 'zlib',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'zlib',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'zlib',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zlib extension (php.net)',
        'url' => 'https://www.php.net/manual/book.zlib.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'readgzfile' => 'readgzfile',
    'gzrewind' => 'gzrewind',
    'gzclose' => 'gzclose',
    'gzeof' => 'gzeof',
    'gzgetc' => 'gzgetc',
    'gzgets' => 'gzgets',
    'gzgetss' => 'gzgetss',
    'gzread' => 'gzread',
    'gzopen' => 'gzopen',
    'gzpassthru' => 'gzpassthru',
    'gzseek' => 'gzseek',
    'gztell' => 'gztell',
    'gzwrite' => 'gzwrite',
    'gzputs' => 'gzputs',
    'gzfile' => 'gzfile',
    'gzcompress' => 'gzcompress',
    'gzuncompress' => 'gzuncompress',
    'gzdeflate' => 'gzdeflate',
    'gzinflate' => 'gzinflate',
    'gzencode' => 'gzencode',
    'ob_gzhandler' => 'ob_gzhandler',
    'zlib_get_coding_type' => 'zlib_get_coding_type',
  ),
  'constants' => 
  array (
    'FORCE_GZIP' => 1,
    'FORCE_DEFLATE' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'zlib.output_compression' => '',
    'zlib.output_compression_level' => '-1',
    'zlib.output_handler' => '',
  ),
);
