<?php

return array (
  'type' => 'extension',
  'name' => 'sysvshm',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sysvshm',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'sysvshm',
    )),
    'removed' => NULL,
    'version' => '8.1.32',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sysvshm extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sysvshm.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SysvSharedMemory',
  ),
  'functions' => 
  array (
    'shm_attach' => 'shm_attach',
    'shm_detach' => 'shm_detach',
    'shm_has_var' => 'shm_has_var',
    'shm_remove' => 'shm_remove',
    'shm_put_var' => 'shm_put_var',
    'shm_get_var' => 'shm_get_var',
    'shm_remove_var' => 'shm_remove_var',
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
