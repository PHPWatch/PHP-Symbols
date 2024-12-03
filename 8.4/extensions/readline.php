<?php

return array (
  'type' => 'extension',
  'name' => 'readline',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'readline',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'readline',
    )),
    'removed' => NULL,
    'version' => '8.4.3-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'readline extension (php.net)',
        'url' => 'https://www.php.net/manual/book.readline.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'readline' => 'readline',
    'readline_info' => 'readline_info',
    'readline_add_history' => 'readline_add_history',
    'readline_clear_history' => 'readline_clear_history',
    'readline_list_history' => 'readline_list_history',
    'readline_read_history' => 'readline_read_history',
    'readline_write_history' => 'readline_write_history',
    'readline_completion_function' => 'readline_completion_function',
    'readline_callback_handler_install' => 'readline_callback_handler_install',
    'readline_callback_read_char' => 'readline_callback_read_char',
    'readline_callback_handler_remove' => 'readline_callback_handler_remove',
    'readline_redisplay' => 'readline_redisplay',
    'readline_on_new_line' => 'readline_on_new_line',
  ),
  'constants' => 
  array (
    'READLINE_LIB' => 'readline',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'cli.pager' => '',
    'cli.prompt' => '\\b \\> ',
  ),
);
