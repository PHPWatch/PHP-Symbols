<?php

return array (
  'type' => 'extension',
  'name' => 'redis',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'redis',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'redis',
    )),
    'removed' => NULL,
    'version' => '4.3.0',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'redis extension (php.net)',
        'url' => 'https://www.php.net/manual/book.redis.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'Redis',
    1 => 'RedisArray',
    2 => 'RedisCluster',
    3 => 'RedisException',
    4 => 'RedisClusterException',
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
    'redis.arrays.algorithm' => '',
    'redis.arrays.auth' => '',
    'redis.arrays.autorehash' => '0',
    'redis.arrays.connecttimeout' => '0',
    'redis.arrays.consistent' => '0',
    'redis.arrays.distributor' => '',
    'redis.arrays.functions' => '',
    'redis.arrays.hosts' => '',
    'redis.arrays.index' => '0',
    'redis.arrays.lazyconnect' => '0',
    'redis.arrays.names' => '',
    'redis.arrays.pconnect' => '0',
    'redis.arrays.previous' => '',
    'redis.arrays.readtimeout' => '0',
    'redis.arrays.retryinterval' => '0',
    'redis.clusters.auth' => '',
    'redis.clusters.persistent' => '0',
    'redis.clusters.read_timeout' => '0',
    'redis.clusters.seeds' => '',
    'redis.clusters.timeout' => '0',
    'redis.pconnect.connection_limit' => '0',
    'redis.pconnect.pooling_enabled' => '0',
    'redis.session.lock_expire' => '0',
    'redis.session.lock_retries' => '10',
    'redis.session.lock_wait_time' => '2000',
    'redis.session.locking_enabled' => '0',
  ),
);
