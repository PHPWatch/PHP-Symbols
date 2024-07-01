<?php

return array (
  'type' => 'extension',
  'name' => 'xdebug',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'xdebug',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'xdebug',
    )),
    'removed' => NULL,
    'version' => '2.2.7',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'xdebug extension (php.net)',
        'url' => 'https://www.php.net/manual/book.xdebug.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'xdebug_get_stack_depth' => 'xdebug_get_stack_depth',
    'xdebug_get_function_stack' => 'xdebug_get_function_stack',
    'xdebug_get_formatted_function_stack' => 'xdebug_get_formatted_function_stack',
    'xdebug_print_function_stack' => 'xdebug_print_function_stack',
    'xdebug_get_declared_vars' => 'xdebug_get_declared_vars',
    'xdebug_call_class' => 'xdebug_call_class',
    'xdebug_call_function' => 'xdebug_call_function',
    'xdebug_call_file' => 'xdebug_call_file',
    'xdebug_call_line' => 'xdebug_call_line',
    'xdebug_var_dump' => 'xdebug_var_dump',
    'xdebug_debug_zval' => 'xdebug_debug_zval',
    'xdebug_debug_zval_stdout' => 'xdebug_debug_zval_stdout',
    'xdebug_enable' => 'xdebug_enable',
    'xdebug_disable' => 'xdebug_disable',
    'xdebug_is_enabled' => 'xdebug_is_enabled',
    'xdebug_break' => 'xdebug_break',
    'xdebug_start_trace' => 'xdebug_start_trace',
    'xdebug_stop_trace' => 'xdebug_stop_trace',
    'xdebug_get_tracefile_name' => 'xdebug_get_tracefile_name',
    'xdebug_get_profiler_filename' => 'xdebug_get_profiler_filename',
    'xdebug_dump_aggr_profiling_data' => 'xdebug_dump_aggr_profiling_data',
    'xdebug_clear_aggr_profiling_data' => 'xdebug_clear_aggr_profiling_data',
    'xdebug_memory_usage' => 'xdebug_memory_usage',
    'xdebug_peak_memory_usage' => 'xdebug_peak_memory_usage',
    'xdebug_time_index' => 'xdebug_time_index',
    'xdebug_start_error_collection' => 'xdebug_start_error_collection',
    'xdebug_stop_error_collection' => 'xdebug_stop_error_collection',
    'xdebug_get_collected_errors' => 'xdebug_get_collected_errors',
    'xdebug_start_code_coverage' => 'xdebug_start_code_coverage',
    'xdebug_stop_code_coverage' => 'xdebug_stop_code_coverage',
    'xdebug_get_code_coverage' => 'xdebug_get_code_coverage',
    'xdebug_get_function_count' => 'xdebug_get_function_count',
    'xdebug_dump_superglobals' => 'xdebug_dump_superglobals',
    'xdebug_get_headers' => 'xdebug_get_headers',
  ),
  'constants' => 
  array (
    'XDEBUG_TRACE_APPEND' => 1,
    'XDEBUG_TRACE_COMPUTERIZED' => 2,
    'XDEBUG_TRACE_HTML' => 4,
    'XDEBUG_CC_UNUSED' => 1,
    'XDEBUG_CC_DEAD_CODE' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'xdebug.auto_trace' => '0',
    'xdebug.cli_color' => '0',
    'xdebug.collect_assignments' => '0',
    'xdebug.collect_includes' => '1',
    'xdebug.collect_params' => '0',
    'xdebug.collect_return' => '0',
    'xdebug.collect_vars' => '0',
    'xdebug.coverage_enable' => '1',
    'xdebug.default_enable' => '1',
    'xdebug.dump.COOKIE' => NULL,
    'xdebug.dump.ENV' => NULL,
    'xdebug.dump.FILES' => NULL,
    'xdebug.dump.GET' => NULL,
    'xdebug.dump.POST' => NULL,
    'xdebug.dump.REQUEST' => NULL,
    'xdebug.dump.SERVER' => NULL,
    'xdebug.dump.SESSION' => NULL,
    'xdebug.dump_globals' => '1',
    'xdebug.dump_once' => '1',
    'xdebug.dump_undefined' => '0',
    'xdebug.extended_info' => '1',
    'xdebug.file_link_format' => '',
    'xdebug.idekey' => '',
    'xdebug.max_nesting_level' => '100',
    'xdebug.overload_var_dump' => '1',
    'xdebug.profiler_aggregate' => '0',
    'xdebug.profiler_append' => '0',
    'xdebug.profiler_enable' => '0',
    'xdebug.profiler_enable_trigger' => '0',
    'xdebug.profiler_output_dir' => '/tmp',
    'xdebug.profiler_output_name' => 'cachegrind.out.%p',
    'xdebug.remote_autostart' => '0',
    'xdebug.remote_connect_back' => '0',
    'xdebug.remote_cookie_expire_time' => '3600',
    'xdebug.remote_enable' => '0',
    'xdebug.remote_handler' => 'dbgp',
    'xdebug.remote_host' => 'localhost',
    'xdebug.remote_log' => '',
    'xdebug.remote_mode' => 'req',
    'xdebug.remote_port' => '9000',
    'xdebug.scream' => '0',
    'xdebug.show_exception_trace' => '0',
    'xdebug.show_local_vars' => '0',
    'xdebug.show_mem_delta' => '0',
    'xdebug.trace_enable_trigger' => '0',
    'xdebug.trace_format' => '0',
    'xdebug.trace_options' => '0',
    'xdebug.trace_output_dir' => '/tmp',
    'xdebug.trace_output_name' => 'trace.%c',
    'xdebug.var_display_max_children' => '128',
    'xdebug.var_display_max_data' => '512',
    'xdebug.var_display_max_depth' => '3',
  ),
);
