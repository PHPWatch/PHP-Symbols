<?php

return array (
  'type' => 'extension',
  'name' => 'SQLite',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'SQLite',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'SQLite',
    )),
    'removed' => NULL,
    'version' => '2.0-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'SQLite extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sqlite.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SQLiteDatabase',
    1 => 'SQLiteResult',
    2 => 'SQLiteUnbuffered',
    3 => 'SQLiteException',
  ),
  'functions' => 
  array (
    'sqlite_open' => 'sqlite_open',
    'sqlite_popen' => 'sqlite_popen',
    'sqlite_close' => 'sqlite_close',
    'sqlite_query' => 'sqlite_query',
    'sqlite_exec' => 'sqlite_exec',
    'sqlite_array_query' => 'sqlite_array_query',
    'sqlite_single_query' => 'sqlite_single_query',
    'sqlite_fetch_array' => 'sqlite_fetch_array',
    'sqlite_fetch_object' => 'sqlite_fetch_object',
    'sqlite_fetch_single' => 'sqlite_fetch_single',
    'sqlite_fetch_string' => 'sqlite_fetch_string',
    'sqlite_fetch_all' => 'sqlite_fetch_all',
    'sqlite_current' => 'sqlite_current',
    'sqlite_column' => 'sqlite_column',
    'sqlite_libversion' => 'sqlite_libversion',
    'sqlite_libencoding' => 'sqlite_libencoding',
    'sqlite_changes' => 'sqlite_changes',
    'sqlite_last_insert_rowid' => 'sqlite_last_insert_rowid',
    'sqlite_num_rows' => 'sqlite_num_rows',
    'sqlite_num_fields' => 'sqlite_num_fields',
    'sqlite_field_name' => 'sqlite_field_name',
    'sqlite_seek' => 'sqlite_seek',
    'sqlite_rewind' => 'sqlite_rewind',
    'sqlite_next' => 'sqlite_next',
    'sqlite_prev' => 'sqlite_prev',
    'sqlite_valid' => 'sqlite_valid',
    'sqlite_has_more' => 'sqlite_has_more',
    'sqlite_has_prev' => 'sqlite_has_prev',
    'sqlite_escape_string' => 'sqlite_escape_string',
    'sqlite_busy_timeout' => 'sqlite_busy_timeout',
    'sqlite_last_error' => 'sqlite_last_error',
    'sqlite_error_string' => 'sqlite_error_string',
    'sqlite_unbuffered_query' => 'sqlite_unbuffered_query',
    'sqlite_create_aggregate' => 'sqlite_create_aggregate',
    'sqlite_create_function' => 'sqlite_create_function',
    'sqlite_factory' => 'sqlite_factory',
    'sqlite_udf_encode_binary' => 'sqlite_udf_encode_binary',
    'sqlite_udf_decode_binary' => 'sqlite_udf_decode_binary',
    'sqlite_fetch_column_types' => 'sqlite_fetch_column_types',
  ),
  'constants' => 
  array (
    'SQLITE_BOTH' => 3,
    'SQLITE_NUM' => 2,
    'SQLITE_ASSOC' => 1,
    'SQLITE_OK' => 0,
    'SQLITE_ERROR' => 1,
    'SQLITE_INTERNAL' => 2,
    'SQLITE_PERM' => 3,
    'SQLITE_ABORT' => 4,
    'SQLITE_BUSY' => 5,
    'SQLITE_LOCKED' => 6,
    'SQLITE_NOMEM' => 7,
    'SQLITE_READONLY' => 8,
    'SQLITE_INTERRUPT' => 9,
    'SQLITE_IOERR' => 10,
    'SQLITE_CORRUPT' => 11,
    'SQLITE_NOTFOUND' => 12,
    'SQLITE_FULL' => 13,
    'SQLITE_CANTOPEN' => 14,
    'SQLITE_PROTOCOL' => 15,
    'SQLITE_EMPTY' => 16,
    'SQLITE_SCHEMA' => 17,
    'SQLITE_TOOBIG' => 18,
    'SQLITE_CONSTRAINT' => 19,
    'SQLITE_MISMATCH' => 20,
    'SQLITE_MISUSE' => 21,
    'SQLITE_NOLFS' => 22,
    'SQLITE_AUTH' => 23,
    'SQLITE_NOTADB' => 26,
    'SQLITE_FORMAT' => 24,
    'SQLITE_ROW' => 100,
    'SQLITE_DONE' => 101,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'sqlite.assoc_case' => '0',
  ),
);
