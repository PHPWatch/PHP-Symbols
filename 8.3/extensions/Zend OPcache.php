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
    \ReflectionExtension::__set_state(array(
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
    'opcache_get_status' => 'opcache_get_status',
    'opcache_compile_file' => 'opcache_compile_file',
    'opcache_invalidate' => 'opcache_invalidate',
    'opcache_get_configuration' => 'opcache_get_configuration',
    'opcache_is_script_cached' => 'opcache_is_script_cached',
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
    'opcache.dups_fix' => '0',
    'opcache.enable' => '1',
    'opcache.enable_cli' => '0',
    'opcache.enable_file_override' => '0',
    'opcache.error_log' => '',
    'opcache.file_cache' => NULL,
    'opcache.file_cache_consistency_checks' => '1',
    'opcache.file_cache_only' => '0',
    'opcache.file_update_protection' => '2',
    'opcache.force_restart_timeout' => '180',
    'opcache.huge_code_pages' => '0',
    'opcache.interned_strings_buffer' => '8',
    'opcache.jit' => '1235',
    'opcache.jit_bisect_limit' => '0',
    'opcache.jit_blacklist_root_trace' => '16',
    'opcache.jit_blacklist_side_trace' => '8',
    'opcache.jit_buffer_size' => '256M',
    'opcache.jit_debug' => '0',
    'opcache.jit_hot_func' => '127',
    'opcache.jit_hot_loop' => '64',
    'opcache.jit_hot_return' => '8',
    'opcache.jit_hot_side_exit' => '8',
    'opcache.jit_max_exit_counters' => '8192',
    'opcache.jit_max_loop_unrolls' => '8',
    'opcache.jit_max_polymorphic_calls' => '2',
    'opcache.jit_max_recursive_calls' => '2',
    'opcache.jit_max_recursive_returns' => '2',
    'opcache.jit_max_root_traces' => '1024',
    'opcache.jit_max_side_traces' => '128',
    'opcache.jit_max_trace_length' => '1024',
    'opcache.jit_prof_threshold' => '0.005',
    'opcache.lockfile_path' => '/tmp',
    'opcache.log_verbosity_level' => '1',
    'opcache.max_accelerated_files' => '10000',
    'opcache.max_file_size' => '0',
    'opcache.max_wasted_percentage' => '5',
    'opcache.memory_consumption' => '128',
    'opcache.opt_debug_level' => '0',
    'opcache.optimization_level' => '0x7FFEBFFF',
    'opcache.preferred_memory_model' => '',
    'opcache.preload' => '',
    'opcache.preload_user' => '',
    'opcache.protect_memory' => '0',
    'opcache.record_warnings' => '0',
    'opcache.restrict_api' => '',
    'opcache.revalidate_freq' => '2',
    'opcache.revalidate_path' => '0',
    'opcache.save_comments' => '1',
    'opcache.use_cwd' => '1',
    'opcache.validate_permission' => '0',
    'opcache.validate_root' => '0',
    'opcache.validate_timestamps' => '1',
  ),
);
