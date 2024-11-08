<?php

return array (
  'type' => 'extension',
  'name' => 'msgpack',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'msgpack',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'msgpack',
    )),
    'removed' => NULL,
    'version' => '3.0.0',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'msgpack extension (php.net)',
        'url' => 'https://www.php.net/manual/book.msgpack.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'MessagePack',
    1 => 'MessagePackUnpacker',
  ),
  'functions' => 
  array (
    'msgpack_serialize' => 'msgpack_serialize',
    'msgpack_unserialize' => 'msgpack_unserialize',
    'msgpack_pack' => 'msgpack_pack',
    'msgpack_unpack' => 'msgpack_unpack',
  ),
  'constants' => 
  array (
    'MESSAGEPACK_OPT_PHPONLY' => -1001,
    'MESSAGEPACK_OPT_ASSOC' => -1002,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'msgpack.assoc' => '1',
    'msgpack.error_display' => '1',
    'msgpack.illegal_key_insert' => '0',
    'msgpack.php_only' => '1',
    'msgpack.use_str8_serialization' => '1',
  ),
);
