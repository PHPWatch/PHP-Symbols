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
    \ReflectionExtension::__set_state(array(
       'name' => 'session',
    )),
    'removed' => NULL,
    'version' => '8.5.0-dev',
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
    0 => 'SessionHandlerInterface',
    1 => 'SessionIdInterface',
    2 => 'SessionUpdateTimestampHandlerInterface',
    3 => 'SessionHandler',
  ),
  'functions' => 
  array (
    'session_name' => 'session_name',
    'session_module_name' => 'session_module_name',
    'session_save_path' => 'session_save_path',
    'session_id' => 'session_id',
    'session_create_id' => 'session_create_id',
    'session_regenerate_id' => 'session_regenerate_id',
    'session_decode' => 'session_decode',
    'session_encode' => 'session_encode',
    'session_destroy' => 'session_destroy',
    'session_unset' => 'session_unset',
    'session_gc' => 'session_gc',
    'session_get_cookie_params' => 'session_get_cookie_params',
    'session_write_close' => 'session_write_close',
    'session_abort' => 'session_abort',
    'session_reset' => 'session_reset',
    'session_status' => 'session_status',
    'session_register_shutdown' => 'session_register_shutdown',
    'session_commit' => 'session_commit',
    'session_set_save_handler' => 'session_set_save_handler',
    'session_cache_limiter' => 'session_cache_limiter',
    'session_cache_expire' => 'session_cache_expire',
    'session_set_cookie_params' => 'session_set_cookie_params',
    'session_start' => 'session_start',
  ),
  'constants' => 
  array (
    'PHP_SESSION_DISABLED' => 0,
    'PHP_SESSION_NONE' => 1,
    'PHP_SESSION_ACTIVE' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'session.auto_start' => '0',
    'session.cache_expire' => '180',
    'session.cache_limiter' => 'nocache',
    'session.cookie_domain' => '',
    'session.cookie_httponly' => '0',
    'session.cookie_lifetime' => '0',
    'session.cookie_path' => '/',
    'session.cookie_samesite' => '',
    'session.cookie_secure' => '0',
    'session.gc_divisor' => '100',
    'session.gc_maxlifetime' => '1440',
    'session.gc_probability' => '1',
    'session.lazy_write' => '1',
    'session.name' => 'PHPSESSID',
    'session.referer_check' => '',
    'session.save_handler' => 'files',
    'session.save_path' => '',
    'session.serialize_handler' => 'php',
    'session.sid_bits_per_character' => '4',
    'session.sid_length' => '32',
    'session.upload_progress.cleanup' => '1',
    'session.upload_progress.enabled' => '1',
    'session.upload_progress.freq' => '1%',
    'session.upload_progress.min_freq' => '1',
    'session.upload_progress.name' => 'PHP_SESSION_UPLOAD_PROGRESS',
    'session.upload_progress.prefix' => 'upload_progress_',
    'session.use_cookies' => '1',
    'session.use_only_cookies' => '1',
    'session.use_strict_mode' => '0',
    'session.use_trans_sid' => '0',
  ),
);
