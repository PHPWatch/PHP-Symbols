<?php

return array (
  'type' => 'extension',
  'name' => 'session',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'session',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'session',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'session extension (php.net)',
        'url' => 'https://www.php.net/manual/book.session.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'session_name' => 'session_name',
    'session_module_name' => 'session_module_name',
    'session_save_path' => 'session_save_path',
    'session_id' => 'session_id',
    'session_regenerate_id' => 'session_regenerate_id',
    'session_decode' => 'session_decode',
    'session_register' => 'session_register',
    'session_unregister' => 'session_unregister',
    'session_is_registered' => 'session_is_registered',
    'session_encode' => 'session_encode',
    'session_start' => 'session_start',
    'session_destroy' => 'session_destroy',
    'session_unset' => 'session_unset',
    'session_set_save_handler' => 'session_set_save_handler',
    'session_cache_limiter' => 'session_cache_limiter',
    'session_cache_expire' => 'session_cache_expire',
    'session_set_cookie_params' => 'session_set_cookie_params',
    'session_get_cookie_params' => 'session_get_cookie_params',
    'session_write_close' => 'session_write_close',
    'session_commit' => 'session_commit',
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'session.auto_start' => '0',
    'session.bug_compat_42' => '',
    'session.bug_compat_warn' => '',
    'session.cache_expire' => '180',
    'session.cache_limiter' => 'nocache',
    'session.cookie_domain' => '',
    'session.cookie_httponly' => '',
    'session.cookie_lifetime' => '0',
    'session.cookie_path' => '/',
    'session.cookie_secure' => '',
    'session.entropy_file' => '',
    'session.entropy_length' => '0',
    'session.gc_divisor' => '1000',
    'session.gc_maxlifetime' => '1440',
    'session.gc_probability' => '1',
    'session.hash_bits_per_character' => '5',
    'session.hash_function' => '0',
    'session.name' => 'PHPSESSID',
    'session.referer_check' => '',
    'session.save_handler' => 'files',
    'session.save_path' => '',
    'session.serialize_handler' => 'php',
    'session.use_cookies' => '1',
    'session.use_only_cookies' => '1',
    'session.use_trans_sid' => '0',
  ),
);
