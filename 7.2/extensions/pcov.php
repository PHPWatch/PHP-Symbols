<?php

return array (
  'type' => 'extension',
  'name' => 'pcov',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'pcov',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'pcov',
    )),
    'removed' => NULL,
    'version' => '1.0.11',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcov extension (php.net)',
        'url' => 'https://www.php.net/manual/book.pcov.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'pcov\\start' => 'pcov\\start',
    'pcov\\stop' => 'pcov\\stop',
    'pcov\\collect' => 'pcov\\collect',
    'pcov\\clear' => 'pcov\\clear',
    'pcov\\waiting' => 'pcov\\waiting',
    'pcov\\memory' => 'pcov\\memory',
  ),
  'constants' => 
  array (
    'pcov\\all' => 0,
    'pcov\\inclusive' => 1,
    'pcov\\exclusive' => 2,
    'pcov\\version' => '1.0.11',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'pcov.directory' => '',
    'pcov.enabled' => '1',
    'pcov.exclude' => '',
    'pcov.initial.files' => '64',
    'pcov.initial.memory' => '65336',
  ),
);
