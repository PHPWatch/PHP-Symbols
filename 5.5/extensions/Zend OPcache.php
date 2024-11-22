<?php

return array (
  'type' => 'extension',
  'name' => 'Zend OPcache',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'Zend OPcache',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'Zend OPcache',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Zend OPcache extension (php.net)',
        'url' => 'https://www.php.net/manual/book.zend opcache.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'opcache_reset' => 'opcache_reset',
    'opcache_invalidate' => 'opcache_invalidate',
    'opcache_compile_file' => 'opcache_compile_file',
    'opcache_is_script_cached' => 'opcache_is_script_cached',
    'opcache_get_configuration' => 'opcache_get_configuration',
    'opcache_get_status' => 'opcache_get_status',
  ),
  'constants' => 
  array (
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'opcache.blacklist_filename' => '',
    'opcache.consistency_checks' => '0',
    'opcache.dups_fix' => '0',
    'opcache.enable' => '1',
    'opcache.enable_cli' => '0',
    'opcache.enable_file_override' => '0',
    'opcache.error_log' => '',
    'opcache.fast_shutdown' => '0',
    'opcache.file_update_protection' => '2',
    'opcache.force_restart_timeout' => '180',
    'opcache.inherited_hack' => '1',
    'opcache.interned_strings_buffer' => '4',
    'opcache.load_comments' => '1',
    'opcache.log_verbosity_level' => '1',
    'opcache.max_accelerated_files' => '2000',
    'opcache.max_file_size' => '0',
    'opcache.max_wasted_percentage' => '5',
    'opcache.memory_consumption' => '64',
    'opcache.optimization_level' => '0xFFFFFFFF',
    'opcache.preferred_memory_model' => '',
    'opcache.protect_memory' => '0',
    'opcache.restrict_api' => '',
    'opcache.revalidate_freq' => '2',
    'opcache.revalidate_path' => '0',
    'opcache.save_comments' => '1',
    'opcache.use_cwd' => '1',
    'opcache.validate_timestamps' => '1',
  ),
);
