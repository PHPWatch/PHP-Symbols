<?php

return array (
  'type' => 'extension',
  'name' => 'sysvmsg',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sysvmsg',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'sysvmsg',
    )),
    'removed' => NULL,
    'version' => '8.3.11',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sysvmsg extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sysvmsg.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SysvMessageQueue',
  ),
  'functions' => 
  array (
    'msg_get_queue' => 'msg_get_queue',
    'msg_send' => 'msg_send',
    'msg_receive' => 'msg_receive',
    'msg_remove_queue' => 'msg_remove_queue',
    'msg_stat_queue' => 'msg_stat_queue',
    'msg_set_queue' => 'msg_set_queue',
    'msg_queue_exists' => 'msg_queue_exists',
  ),
  'constants' => 
  array (
    'MSG_IPC_NOWAIT' => 1,
    'MSG_EAGAIN' => 11,
    'MSG_ENOMSG' => 42,
    'MSG_NOERROR' => 2,
    'MSG_EXCEPT' => 4,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
