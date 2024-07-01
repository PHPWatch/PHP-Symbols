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
    'version' => '2.2.8',
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
    'redis.arrays.autorehash' => '',
    'redis.arrays.functions' => '',
    'redis.arrays.hosts' => '',
    'redis.arrays.index' => '',
    'redis.arrays.names' => '',
    'redis.arrays.previous' => '',
    'redis.clusters.read_timeout' => '',
    'redis.clusters.seeds' => '',
    'redis.clusters.timeout' => '',
  ),
);
