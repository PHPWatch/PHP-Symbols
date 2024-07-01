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
    ReflectionExtension::__set_state(array(
       'name' => 'apcu',
    )),
    'removed' => NULL,
    'version' => '4.0.11',
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
  ),
  'functions' => 
  array (
    'apcu_cache_info' => 'apcu_cache_info',
    'apcu_clear_cache' => 'apcu_clear_cache',
    'apcu_sma_info' => 'apcu_sma_info',
    'apcu_key_info' => 'apcu_key_info',
    'apcu_enabled' => 'apcu_enabled',
    'apcu_store' => 'apcu_store',
    'apcu_fetch' => 'apcu_fetch',
    'apcu_delete' => 'apcu_delete',
    'apcu_add' => 'apcu_add',
    'apcu_inc' => 'apcu_inc',
    'apcu_dec' => 'apcu_dec',
    'apcu_cas' => 'apcu_cas',
    'apcu_exists' => 'apcu_exists',
    'apcu_bin_dump' => 'apcu_bin_dump',
    'apcu_bin_load' => 'apcu_bin_load',
    'apcu_bin_dumpfile' => 'apcu_bin_dumpfile',
    'apcu_bin_loadfile' => 'apcu_bin_loadfile',
  ),
  'constants' => 
  array (
    'APCU_APC_FULL_BC' => true,
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
    'apc.rfc1867' => '0',
    'apc.rfc1867_freq' => '0',
    'apc.rfc1867_name' => 'APC_UPLOAD_PROGRESS',
    'apc.rfc1867_prefix' => 'upload_',
    'apc.rfc1867_ttl' => '3600',
    'apc.serializer' => 'php',
    'apc.shm_segments' => '1',
    'apc.shm_size' => '32M',
    'apc.slam_defense' => '1',
    'apc.smart' => '0',
    'apc.ttl' => '0',
    'apc.use_request_time' => '1',
    'apc.writable' => '/tmp',
  ),
);
