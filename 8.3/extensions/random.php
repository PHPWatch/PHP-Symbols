<?php

return array (
  'type' => 'extension',
  'name' => 'random',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'random',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'random',
    )),
    'removed' => NULL,
    'version' => '8.3.9',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'random extension (php.net)',
        'url' => 'https://www.php.net/manual/book.random.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'Random\\Engine',
    1 => 'Random\\CryptoSafeEngine',
    2 => 'Random\\RandomError',
    3 => 'Random\\BrokenRandomEngineError',
    4 => 'Random\\RandomException',
    5 => 'Random\\Engine\\Mt19937',
    6 => 'Random\\Engine\\PcgOneseq128XslRr64',
    7 => 'Random\\Engine\\Xoshiro256StarStar',
    8 => 'Random\\Engine\\Secure',
    9 => 'Random\\Randomizer',
    10 => 'Random\\IntervalBoundary',
  ),
  'functions' => 
  array (
    'lcg_value' => 'lcg_value',
    'mt_srand' => 'mt_srand',
    'srand' => 'srand',
    'rand' => 'rand',
    'mt_rand' => 'mt_rand',
    'mt_getrandmax' => 'mt_getrandmax',
    'getrandmax' => 'getrandmax',
    'random_bytes' => 'random_bytes',
    'random_int' => 'random_int',
  ),
  'constants' => 
  array (
    'MT_RAND_MT19937' => 0,
    'MT_RAND_PHP' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
