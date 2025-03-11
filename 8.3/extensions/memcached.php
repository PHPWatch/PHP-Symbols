<?php

return array (
  'type' => 'extension',
  'name' => 'memcached',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'memcached',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'memcached',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcached extension (php.net)',
        'url' => 'https://www.php.net/manual/book.memcached.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'Memcached',
    1 => 'MemcachedException',
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
    'memcached.compression_factor' => '1.3',
    'memcached.compression_level' => '3',
    'memcached.compression_threshold' => '2000',
    'memcached.compression_type' => 'fastlz',
    'memcached.default_binary_protocol' => '0',
    'memcached.default_connect_timeout' => '0',
    'memcached.default_consistent_hash' => '0',
    'memcached.item_size_limit' => '0',
    'memcached.serializer' => 'php',
    'memcached.sess_binary_protocol' => '1',
    'memcached.sess_connect_timeout' => '0',
    'memcached.sess_consistent_hash' => '1',
    'memcached.sess_consistent_hash_type' => 'ketama',
    'memcached.sess_lock_expire' => '0',
    'memcached.sess_lock_max_wait' => 'not set',
    'memcached.sess_lock_retries' => '5',
    'memcached.sess_lock_wait' => 'not set',
    'memcached.sess_lock_wait_max' => '150',
    'memcached.sess_lock_wait_min' => '150',
    'memcached.sess_locking' => '1',
    'memcached.sess_number_of_replicas' => '0',
    'memcached.sess_persistent' => '0',
    'memcached.sess_prefix' => 'memc.sess.key.',
    'memcached.sess_randomize_replica_read' => '0',
    'memcached.sess_remove_failed_servers' => '0',
    'memcached.sess_sasl_password' => '',
    'memcached.sess_sasl_username' => '',
    'memcached.sess_server_failure_limit' => '0',
    'memcached.store_retry_count' => '0',
  ),
);
