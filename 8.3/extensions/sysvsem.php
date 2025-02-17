<?php

return array (
  'type' => 'extension',
  'name' => 'sysvsem',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sysvsem',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'sysvsem',
    )),
    'removed' => NULL,
    'version' => '8.3.17',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sysvsem extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sysvsem.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SysvSemaphore',
  ),
  'functions' => 
  array (
    'sem_get' => 'sem_get',
    'sem_acquire' => 'sem_acquire',
    'sem_release' => 'sem_release',
    'sem_remove' => 'sem_remove',
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
