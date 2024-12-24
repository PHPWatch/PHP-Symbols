<?php

return array (
  'type' => 'extension',
  'name' => 'dba',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'dba',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'dba',
    )),
    'removed' => NULL,
    'version' => '8.3.15',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'dba extension (php.net)',
        'url' => 'https://www.php.net/manual/book.dba.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'dba_popen' => 'dba_popen',
    'dba_open' => 'dba_open',
    'dba_close' => 'dba_close',
    'dba_exists' => 'dba_exists',
    'dba_fetch' => 'dba_fetch',
    'dba_key_split' => 'dba_key_split',
    'dba_firstkey' => 'dba_firstkey',
    'dba_nextkey' => 'dba_nextkey',
    'dba_delete' => 'dba_delete',
    'dba_insert' => 'dba_insert',
    'dba_replace' => 'dba_replace',
    'dba_optimize' => 'dba_optimize',
    'dba_sync' => 'dba_sync',
    'dba_handlers' => 'dba_handlers',
    'dba_list' => 'dba_list',
  ),
  'constants' => 
  array (
    'DBA_LMDB_USE_SUB_DIR' => 0,
    'DBA_LMDB_NO_SUB_DIR' => 16384,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'dba.default_handler' => 'flatfile',
  ),
);
