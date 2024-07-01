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
    'version' => '7.2.34-50+ubuntu22.04.1+deb.sury.org+1',
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
    'gzdecode' => 'gzdecode',
    'zlib_encode' => 'zlib_encode',
    'zlib_decode' => 'zlib_decode',
    'zlib_get_coding_type' => 'zlib_get_coding_type',
    'deflate_init' => 'deflate_init',
    'deflate_add' => 'deflate_add',
    'inflate_init' => 'inflate_init',
    'inflate_add' => 'inflate_add',
    'inflate_get_status' => 'inflate_get_status',
    'inflate_get_read_len' => 'inflate_get_read_len',
    'ob_gzhandler' => 'ob_gzhandler',
  ),
  'constants' => 
  array (
    'FORCE_GZIP' => 31,
    'FORCE_DEFLATE' => 15,
    'ZLIB_ENCODING_RAW' => -15,
    'ZLIB_ENCODING_GZIP' => 31,
    'ZLIB_ENCODING_DEFLATE' => 15,
    'ZLIB_NO_FLUSH' => 0,
    'ZLIB_PARTIAL_FLUSH' => 1,
    'ZLIB_SYNC_FLUSH' => 2,
    'ZLIB_FULL_FLUSH' => 3,
    'ZLIB_BLOCK' => 5,
    'ZLIB_FINISH' => 4,
    'ZLIB_FILTERED' => 1,
    'ZLIB_HUFFMAN_ONLY' => 2,
    'ZLIB_RLE' => 3,
    'ZLIB_FIXED' => 4,
    'ZLIB_DEFAULT_STRATEGY' => 0,
    'ZLIB_VERSION' => '1.2.11',
    'ZLIB_VERNUM' => 4784,
    'ZLIB_OK' => 0,
    'ZLIB_STREAM_END' => 1,
    'ZLIB_NEED_DICT' => 2,
    'ZLIB_ERRNO' => -1,
    'ZLIB_STREAM_ERROR' => -2,
    'ZLIB_DATA_ERROR' => -3,
    'ZLIB_MEM_ERROR' => -4,
    'ZLIB_BUF_ERROR' => -5,
    'ZLIB_VERSION_ERROR' => -6,
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
