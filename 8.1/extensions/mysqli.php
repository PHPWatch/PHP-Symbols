<?php

return array (
  'type' => 'extension',
  'name' => 'mysqli',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'mysqli',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'mysqli',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli extension (php.net)',
        'url' => 'https://www.php.net/manual/book.mysqli.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'mysqli_sql_exception',
    1 => 'mysqli_driver',
    2 => 'mysqli',
    3 => 'mysqli_warning',
    4 => 'mysqli_result',
    5 => 'mysqli_stmt',
  ),
  'functions' => 
  array (
    'mysqli_affected_rows' => 'mysqli_affected_rows',
    'mysqli_autocommit' => 'mysqli_autocommit',
    'mysqli_begin_transaction' => 'mysqli_begin_transaction',
    'mysqli_change_user' => 'mysqli_change_user',
    'mysqli_character_set_name' => 'mysqli_character_set_name',
    'mysqli_close' => 'mysqli_close',
    'mysqli_commit' => 'mysqli_commit',
    'mysqli_connect' => 'mysqli_connect',
    'mysqli_connect_errno' => 'mysqli_connect_errno',
    'mysqli_connect_error' => 'mysqli_connect_error',
    'mysqli_data_seek' => 'mysqli_data_seek',
    'mysqli_dump_debug_info' => 'mysqli_dump_debug_info',
    'mysqli_debug' => 'mysqli_debug',
    'mysqli_errno' => 'mysqli_errno',
    'mysqli_error' => 'mysqli_error',
    'mysqli_error_list' => 'mysqli_error_list',
    'mysqli_stmt_execute' => 'mysqli_stmt_execute',
    'mysqli_execute' => 'mysqli_execute',
    'mysqli_fetch_field' => 'mysqli_fetch_field',
    'mysqli_fetch_fields' => 'mysqli_fetch_fields',
    'mysqli_fetch_field_direct' => 'mysqli_fetch_field_direct',
    'mysqli_fetch_lengths' => 'mysqli_fetch_lengths',
    'mysqli_fetch_all' => 'mysqli_fetch_all',
    'mysqli_fetch_array' => 'mysqli_fetch_array',
    'mysqli_fetch_assoc' => 'mysqli_fetch_assoc',
    'mysqli_fetch_object' => 'mysqli_fetch_object',
    'mysqli_fetch_row' => 'mysqli_fetch_row',
    'mysqli_fetch_column' => 'mysqli_fetch_column',
    'mysqli_field_count' => 'mysqli_field_count',
    'mysqli_field_seek' => 'mysqli_field_seek',
    'mysqli_field_tell' => 'mysqli_field_tell',
    'mysqli_free_result' => 'mysqli_free_result',
    'mysqli_get_connection_stats' => 'mysqli_get_connection_stats',
    'mysqli_get_client_stats' => 'mysqli_get_client_stats',
    'mysqli_get_charset' => 'mysqli_get_charset',
    'mysqli_get_client_info' => 'mysqli_get_client_info',
    'mysqli_get_client_version' => 'mysqli_get_client_version',
    'mysqli_get_links_stats' => 'mysqli_get_links_stats',
    'mysqli_get_host_info' => 'mysqli_get_host_info',
    'mysqli_get_proto_info' => 'mysqli_get_proto_info',
    'mysqli_get_server_info' => 'mysqli_get_server_info',
    'mysqli_get_server_version' => 'mysqli_get_server_version',
    'mysqli_get_warnings' => 'mysqli_get_warnings',
    'mysqli_init' => 'mysqli_init',
    'mysqli_info' => 'mysqli_info',
    'mysqli_insert_id' => 'mysqli_insert_id',
    'mysqli_kill' => 'mysqli_kill',
    'mysqli_more_results' => 'mysqli_more_results',
    'mysqli_multi_query' => 'mysqli_multi_query',
    'mysqli_next_result' => 'mysqli_next_result',
    'mysqli_num_fields' => 'mysqli_num_fields',
    'mysqli_num_rows' => 'mysqli_num_rows',
    'mysqli_options' => 'mysqli_options',
    'mysqli_set_opt' => 'mysqli_set_opt',
    'mysqli_ping' => 'mysqli_ping',
    'mysqli_poll' => 'mysqli_poll',
    'mysqli_prepare' => 'mysqli_prepare',
    'mysqli_report' => 'mysqli_report',
    'mysqli_query' => 'mysqli_query',
    'mysqli_real_connect' => 'mysqli_real_connect',
    'mysqli_real_escape_string' => 'mysqli_real_escape_string',
    'mysqli_escape_string' => 'mysqli_escape_string',
    'mysqli_real_query' => 'mysqli_real_query',
    'mysqli_reap_async_query' => 'mysqli_reap_async_query',
    'mysqli_release_savepoint' => 'mysqli_release_savepoint',
    'mysqli_rollback' => 'mysqli_rollback',
    'mysqli_savepoint' => 'mysqli_savepoint',
    'mysqli_select_db' => 'mysqli_select_db',
    'mysqli_set_charset' => 'mysqli_set_charset',
    'mysqli_stmt_affected_rows' => 'mysqli_stmt_affected_rows',
    'mysqli_stmt_attr_get' => 'mysqli_stmt_attr_get',
    'mysqli_stmt_attr_set' => 'mysqli_stmt_attr_set',
    'mysqli_stmt_bind_param' => 'mysqli_stmt_bind_param',
    'mysqli_stmt_bind_result' => 'mysqli_stmt_bind_result',
    'mysqli_stmt_close' => 'mysqli_stmt_close',
    'mysqli_stmt_data_seek' => 'mysqli_stmt_data_seek',
    'mysqli_stmt_errno' => 'mysqli_stmt_errno',
    'mysqli_stmt_error' => 'mysqli_stmt_error',
    'mysqli_stmt_error_list' => 'mysqli_stmt_error_list',
    'mysqli_stmt_fetch' => 'mysqli_stmt_fetch',
    'mysqli_stmt_field_count' => 'mysqli_stmt_field_count',
    'mysqli_stmt_free_result' => 'mysqli_stmt_free_result',
    'mysqli_stmt_get_result' => 'mysqli_stmt_get_result',
    'mysqli_stmt_get_warnings' => 'mysqli_stmt_get_warnings',
    'mysqli_stmt_init' => 'mysqli_stmt_init',
    'mysqli_stmt_insert_id' => 'mysqli_stmt_insert_id',
    'mysqli_stmt_more_results' => 'mysqli_stmt_more_results',
    'mysqli_stmt_next_result' => 'mysqli_stmt_next_result',
    'mysqli_stmt_num_rows' => 'mysqli_stmt_num_rows',
    'mysqli_stmt_param_count' => 'mysqli_stmt_param_count',
    'mysqli_stmt_prepare' => 'mysqli_stmt_prepare',
    'mysqli_stmt_reset' => 'mysqli_stmt_reset',
    'mysqli_stmt_result_metadata' => 'mysqli_stmt_result_metadata',
    'mysqli_stmt_send_long_data' => 'mysqli_stmt_send_long_data',
    'mysqli_stmt_store_result' => 'mysqli_stmt_store_result',
    'mysqli_stmt_sqlstate' => 'mysqli_stmt_sqlstate',
    'mysqli_sqlstate' => 'mysqli_sqlstate',
    'mysqli_ssl_set' => 'mysqli_ssl_set',
    'mysqli_stat' => 'mysqli_stat',
    'mysqli_store_result' => 'mysqli_store_result',
    'mysqli_thread_id' => 'mysqli_thread_id',
    'mysqli_thread_safe' => 'mysqli_thread_safe',
    'mysqli_use_result' => 'mysqli_use_result',
    'mysqli_warning_count' => 'mysqli_warning_count',
    'mysqli_refresh' => 'mysqli_refresh',
  ),
  'constants' => 
  array (
    'MYSQLI_READ_DEFAULT_GROUP' => 5,
    'MYSQLI_READ_DEFAULT_FILE' => 4,
    'MYSQLI_OPT_CONNECT_TIMEOUT' => 0,
    'MYSQLI_OPT_LOCAL_INFILE' => 8,
    'MYSQLI_OPT_LOAD_DATA_LOCAL_DIR' => 43,
    'MYSQLI_INIT_COMMAND' => 3,
    'MYSQLI_OPT_READ_TIMEOUT' => 11,
    'MYSQLI_OPT_NET_CMD_BUFFER_SIZE' => 202,
    'MYSQLI_OPT_NET_READ_BUFFER_SIZE' => 203,
    'MYSQLI_OPT_INT_AND_FLOAT_NATIVE' => 201,
    'MYSQLI_OPT_SSL_VERIFY_SERVER_CERT' => 21,
    'MYSQLI_SERVER_PUBLIC_KEY' => 35,
    'MYSQLI_CLIENT_SSL' => 2048,
    'MYSQLI_CLIENT_COMPRESS' => 32,
    'MYSQLI_CLIENT_INTERACTIVE' => 1024,
    'MYSQLI_CLIENT_IGNORE_SPACE' => 256,
    'MYSQLI_CLIENT_NO_SCHEMA' => 16,
    'MYSQLI_CLIENT_FOUND_ROWS' => 2,
    'MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT' => 1073741824,
    'MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT' => 64,
    'MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS' => 4194304,
    'MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS' => 37,
    'MYSQLI_STORE_RESULT' => 0,
    'MYSQLI_USE_RESULT' => 1,
    'MYSQLI_ASYNC' => 8,
    'MYSQLI_STORE_RESULT_COPY_DATA' => 16,
    'MYSQLI_ASSOC' => 1,
    'MYSQLI_NUM' => 2,
    'MYSQLI_BOTH' => 3,
    'MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH' => 0,
    'MYSQLI_STMT_ATTR_CURSOR_TYPE' => 1,
    'MYSQLI_CURSOR_TYPE_NO_CURSOR' => 0,
    'MYSQLI_CURSOR_TYPE_READ_ONLY' => 1,
    'MYSQLI_CURSOR_TYPE_FOR_UPDATE' => 2,
    'MYSQLI_CURSOR_TYPE_SCROLLABLE' => 4,
    'MYSQLI_STMT_ATTR_PREFETCH_ROWS' => 2,
    'MYSQLI_NOT_NULL_FLAG' => 1,
    'MYSQLI_PRI_KEY_FLAG' => 2,
    'MYSQLI_UNIQUE_KEY_FLAG' => 4,
    'MYSQLI_MULTIPLE_KEY_FLAG' => 8,
    'MYSQLI_BLOB_FLAG' => 16,
    'MYSQLI_UNSIGNED_FLAG' => 32,
    'MYSQLI_ZEROFILL_FLAG' => 64,
    'MYSQLI_AUTO_INCREMENT_FLAG' => 512,
    'MYSQLI_TIMESTAMP_FLAG' => 1024,
    'MYSQLI_SET_FLAG' => 2048,
    'MYSQLI_NUM_FLAG' => 32768,
    'MYSQLI_PART_KEY_FLAG' => 16384,
    'MYSQLI_GROUP_FLAG' => 32768,
    'MYSQLI_ENUM_FLAG' => 256,
    'MYSQLI_BINARY_FLAG' => 128,
    'MYSQLI_NO_DEFAULT_VALUE_FLAG' => 4096,
    'MYSQLI_ON_UPDATE_NOW_FLAG' => 8192,
    'MYSQLI_TYPE_DECIMAL' => 0,
    'MYSQLI_TYPE_TINY' => 1,
    'MYSQLI_TYPE_SHORT' => 2,
    'MYSQLI_TYPE_LONG' => 3,
    'MYSQLI_TYPE_FLOAT' => 4,
    'MYSQLI_TYPE_DOUBLE' => 5,
    'MYSQLI_TYPE_NULL' => 6,
    'MYSQLI_TYPE_TIMESTAMP' => 7,
    'MYSQLI_TYPE_LONGLONG' => 8,
    'MYSQLI_TYPE_INT24' => 9,
    'MYSQLI_TYPE_DATE' => 10,
    'MYSQLI_TYPE_TIME' => 11,
    'MYSQLI_TYPE_DATETIME' => 12,
    'MYSQLI_TYPE_YEAR' => 13,
    'MYSQLI_TYPE_NEWDATE' => 14,
    'MYSQLI_TYPE_ENUM' => 247,
    'MYSQLI_TYPE_SET' => 248,
    'MYSQLI_TYPE_TINY_BLOB' => 249,
    'MYSQLI_TYPE_MEDIUM_BLOB' => 250,
    'MYSQLI_TYPE_LONG_BLOB' => 251,
    'MYSQLI_TYPE_BLOB' => 252,
    'MYSQLI_TYPE_VAR_STRING' => 253,
    'MYSQLI_TYPE_STRING' => 254,
    'MYSQLI_TYPE_CHAR' => 1,
    'MYSQLI_TYPE_INTERVAL' => 247,
    'MYSQLI_TYPE_GEOMETRY' => 255,
    'MYSQLI_TYPE_JSON' => 245,
    'MYSQLI_TYPE_NEWDECIMAL' => 246,
    'MYSQLI_TYPE_BIT' => 16,
    'MYSQLI_SET_CHARSET_NAME' => 7,
    'MYSQLI_SET_CHARSET_DIR' => 6,
    'MYSQLI_NO_DATA' => 100,
    'MYSQLI_DATA_TRUNCATED' => 101,
    'MYSQLI_REPORT_INDEX' => 4,
    'MYSQLI_REPORT_ERROR' => 1,
    'MYSQLI_REPORT_STRICT' => 2,
    'MYSQLI_REPORT_ALL' => 255,
    'MYSQLI_REPORT_OFF' => 0,
    'MYSQLI_DEBUG_TRACE_ENABLED' => 0,
    'MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED' => 16,
    'MYSQLI_SERVER_QUERY_NO_INDEX_USED' => 32,
    'MYSQLI_SERVER_QUERY_WAS_SLOW' => 2048,
    'MYSQLI_SERVER_PS_OUT_PARAMS' => 4096,
    'MYSQLI_REFRESH_GRANT' => 1,
    'MYSQLI_REFRESH_LOG' => 2,
    'MYSQLI_REFRESH_TABLES' => 4,
    'MYSQLI_REFRESH_HOSTS' => 8,
    'MYSQLI_REFRESH_STATUS' => 16,
    'MYSQLI_REFRESH_THREADS' => 32,
    'MYSQLI_REFRESH_REPLICA' => 64,
    'MYSQLI_REFRESH_SLAVE' => 64,
    'MYSQLI_REFRESH_MASTER' => 128,
    'MYSQLI_REFRESH_BACKUP_LOG' => 2097152,
    'MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT' => 1,
    'MYSQLI_TRANS_START_READ_WRITE' => 2,
    'MYSQLI_TRANS_START_READ_ONLY' => 4,
    'MYSQLI_TRANS_COR_AND_CHAIN' => 1,
    'MYSQLI_TRANS_COR_AND_NO_CHAIN' => 2,
    'MYSQLI_TRANS_COR_RELEASE' => 4,
    'MYSQLI_TRANS_COR_NO_RELEASE' => 8,
    'MYSQLI_IS_MARIADB' => false,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mysqli.allow_local_infile' => '0',
    'mysqli.allow_persistent' => '1',
    'mysqli.default_host' => '',
    'mysqli.default_port' => '3306',
    'mysqli.default_pw' => '',
    'mysqli.default_socket' => '/var/run/mysqld/mysqld.sock',
    'mysqli.default_user' => '',
    'mysqli.local_infile_directory' => NULL,
    'mysqli.max_links' => '-1',
    'mysqli.max_persistent' => '-1',
    'mysqli.reconnect' => '',
    'mysqli.rollback_on_cached_plink' => '0',
  ),
);
