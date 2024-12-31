<?php

return array (
  'type' => 'extension',
  'name' => 'FFI',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'FFI',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'FFI',
    )),
    'removed' => NULL,
    'version' => '8.4.4-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'FFI extension (php.net)',
        'url' => 'https://www.php.net/manual/book.ffi.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'FFI\\Exception',
    1 => 'FFI\\ParserException',
    2 => 'FFI',
    3 => 'FFI\\CData',
    4 => 'FFI\\CType',
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
    'ffi.enable' => 'preload',
    'ffi.preload' => NULL,
  ),
);
