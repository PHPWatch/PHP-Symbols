<?php

return array (
  'type' => 'extension',
  'name' => 'apcu',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'apcu',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'apcu',
    )),
    'removed' => NULL,
    'version' => '5.1.23',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'apcu extension (php.net)',
        'url' => 'https://www.php.net/manual/book.apcu.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'APCUIterator',
  ),
  'functions' => 
  array (
    'apcu_clear_cache' => 'apcu_clear_cache',
    'apcu_cache_info' => 'apcu_cache_info',
    'apcu_key_info' => 'apcu_key_info',
    'apcu_sma_info' => 'apcu_sma_info',
    'apcu_enabled' => 'apcu_enabled',
    'apcu_store' => 'apcu_store',
    'apcu_add' => 'apcu_add',
    'apcu_inc' => 'apcu_inc',
    'apcu_dec' => 'apcu_dec',
    'apcu_cas' => 'apcu_cas',
    'apcu_fetch' => 'apcu_fetch',
    'apcu_exists' => 'apcu_exists',
    'apcu_delete' => 'apcu_delete',
    'apcu_entry' => 'apcu_entry',
  ),
  'constants' => 
  array (
    'APC_LIST_ACTIVE' => 1,
    'APC_LIST_DELETED' => 2,
    'APC_ITER_TYPE' => 1,
    'APC_ITER_KEY' => 2,
    'APC_ITER_VALUE' => 4,
    'APC_ITER_NUM_HITS' => 8,
    'APC_ITER_MTIME' => 16,
    'APC_ITER_CTIME' => 32,
    'APC_ITER_DTIME' => 64,
    'APC_ITER_ATIME' => 128,
    'APC_ITER_REFCOUNT' => 256,
    'APC_ITER_MEM_SIZE' => 512,
    'APC_ITER_TTL' => 1024,
    'APC_ITER_NONE' => 0,
    'APC_ITER_ALL' => 4294967295,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'apc.coredump_unmap' => '0',
    'apc.enable_cli' => '0',
    'apc.enabled' => '1',
    'apc.entries_hint' => '4096',
    'apc.gc_ttl' => '3600',
    'apc.mmap_file_mask' => NULL,
    'apc.preload_path' => NULL,
    'apc.serializer' => 'php',
    'apc.shm_segments' => '1',
    'apc.shm_size' => '32M',
    'apc.slam_defense' => '0',
    'apc.smart' => '0',
    'apc.ttl' => '0',
    'apc.use_request_time' => '0',
  ),
);
