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
    ReflectionExtension::__set_state(array(
       'name' => 'memcached',
    )),
    'removed' => NULL,
    'version' => '2.2.0',
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
    'memcached.compression_threshold' => '2000',
    'memcached.compression_type' => 'fastlz',
    'memcached.serializer' => 'php',
    'memcached.sess_binary' => '0',
    'memcached.sess_connect_timeout' => '1000',
    'memcached.sess_consistent_hash' => '0',
    'memcached.sess_lock_expire' => '0',
    'memcached.sess_lock_max_wait' => '0',
    'memcached.sess_lock_wait' => '150000',
    'memcached.sess_locking' => '1',
    'memcached.sess_number_of_replicas' => '0',
    'memcached.sess_prefix' => 'memc.sess.key.',
    'memcached.sess_randomize_replica_read' => '0',
    'memcached.sess_remove_failed' => '0',
    'memcached.sess_sasl_password' => '',
    'memcached.sess_sasl_username' => '',
    'memcached.store_retry_count' => '2',
    'memcached.use_sasl' => '0',
  ),
);
