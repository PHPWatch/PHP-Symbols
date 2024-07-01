<?php

return array (
  'type' => 'extension',
  'name' => 'memcache',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'memcache',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'memcache',
    )),
    'removed' => NULL,
    'version' => '8.2',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache extension (php.net)',
        'url' => 'https://www.php.net/manual/book.memcache.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'MemcachePool',
    1 => 'Memcache',
  ),
  'functions' => 
  array (
    'memcache_connect' => 'memcache_connect',
    'memcache_pconnect' => 'memcache_pconnect',
    'memcache_add_server' => 'memcache_add_server',
    'memcache_set_server_params' => 'memcache_set_server_params',
    'memcache_set_failure_callback' => 'memcache_set_failure_callback',
    'memcache_get_server_status' => 'memcache_get_server_status',
    'memcache_get_version' => 'memcache_get_version',
    'memcache_add' => 'memcache_add',
    'memcache_set' => 'memcache_set',
    'memcache_replace' => 'memcache_replace',
    'memcache_cas' => 'memcache_cas',
    'memcache_append' => 'memcache_append',
    'memcache_prepend' => 'memcache_prepend',
    'memcache_get' => 'memcache_get',
    'memcache_delete' => 'memcache_delete',
    'memcache_debug' => 'memcache_debug',
    'memcache_get_stats' => 'memcache_get_stats',
    'memcache_get_extended_stats' => 'memcache_get_extended_stats',
    'memcache_set_compress_threshold' => 'memcache_set_compress_threshold',
    'memcache_increment' => 'memcache_increment',
    'memcache_decrement' => 'memcache_decrement',
    'memcache_close' => 'memcache_close',
    'memcache_flush' => 'memcache_flush',
    'memcache_set_sasl_auth_data' => 'memcache_set_sasl_auth_data',
  ),
  'constants' => 
  array (
    'MEMCACHE_COMPRESSED' => 2,
    'MEMCACHE_USER1' => 65536,
    'MEMCACHE_USER2' => 131072,
    'MEMCACHE_USER3' => 262144,
    'MEMCACHE_USER4' => 524288,
    'MEMCACHE_HAVE_SESSION' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'memcache.allow_failover' => '1',
    'memcache.chunk_size' => '32768',
    'memcache.compress_threshold' => '20000',
    'memcache.default_port' => '11211',
    'memcache.hash_function' => 'crc32',
    'memcache.hash_strategy' => 'consistent',
    'memcache.lock_timeout' => '15',
    'memcache.max_failover_attempts' => '20',
    'memcache.prefix_host_key' => '0',
    'memcache.prefix_host_key_remove_subdomain' => '0',
    'memcache.prefix_host_key_remove_www' => '1',
    'memcache.prefix_static_key' => NULL,
    'memcache.protocol' => 'ascii',
    'memcache.redundancy' => '1',
    'memcache.session_prefix_host_key' => '0',
    'memcache.session_prefix_host_key_remove_subdomain' => '0',
    'memcache.session_prefix_host_key_remove_www' => '1',
    'memcache.session_prefix_static_key' => NULL,
    'memcache.session_redundancy' => '2',
    'memcache.session_save_path' => NULL,
  ),
);
