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
    'version' => '6.0.2',
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
    3 => 'RedisClusterException',
    4 => 'RedisSentinel',
    5 => 'RedisException',
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
    'redis.clusters.cache_slots' => '0',
    'redis.clusters.persistent' => '0',
    'redis.clusters.read_timeout' => '0',
    'redis.clusters.seeds' => '',
    'redis.clusters.timeout' => '0',
    'redis.pconnect.connection_limit' => '0',
    'redis.pconnect.echo_check_liveness' => '1',
    'redis.pconnect.pool_detect_dirty' => '0',
    'redis.pconnect.pool_pattern' => '',
    'redis.pconnect.pool_poll_timeout' => '0',
    'redis.pconnect.pooling_enabled' => '1',
    'redis.session.early_refresh' => '0',
    'redis.session.lock_expire' => '0',
    'redis.session.lock_retries' => '100',
    'redis.session.lock_wait_time' => '20000',
    'redis.session.locking_enabled' => '0',
  ),
);
