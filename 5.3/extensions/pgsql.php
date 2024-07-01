<?php

return array (
  'type' => 'extension',
  'name' => 'pgsql',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'pgsql',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'pgsql',
    )),
    'removed' => NULL,
    'version' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pgsql extension (php.net)',
        'url' => 'https://www.php.net/manual/book.pgsql.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'pg_connect' => 'pg_connect',
    'pg_pconnect' => 'pg_pconnect',
    'pg_close' => 'pg_close',
    'pg_connection_status' => 'pg_connection_status',
    'pg_connection_busy' => 'pg_connection_busy',
    'pg_connection_reset' => 'pg_connection_reset',
    'pg_host' => 'pg_host',
    'pg_dbname' => 'pg_dbname',
    'pg_port' => 'pg_port',
    'pg_tty' => 'pg_tty',
    'pg_options' => 'pg_options',
    'pg_version' => 'pg_version',
    'pg_ping' => 'pg_ping',
    'pg_parameter_status' => 'pg_parameter_status',
    'pg_transaction_status' => 'pg_transaction_status',
    'pg_query' => 'pg_query',
    'pg_query_params' => 'pg_query_params',
    'pg_prepare' => 'pg_prepare',
    'pg_execute' => 'pg_execute',
    'pg_send_query' => 'pg_send_query',
    'pg_send_query_params' => 'pg_send_query_params',
    'pg_send_prepare' => 'pg_send_prepare',
    'pg_send_execute' => 'pg_send_execute',
    'pg_cancel_query' => 'pg_cancel_query',
    'pg_fetch_result' => 'pg_fetch_result',
    'pg_fetch_row' => 'pg_fetch_row',
    'pg_fetch_assoc' => 'pg_fetch_assoc',
    'pg_fetch_array' => 'pg_fetch_array',
    'pg_fetch_object' => 'pg_fetch_object',
    'pg_fetch_all' => 'pg_fetch_all',
    'pg_fetch_all_columns' => 'pg_fetch_all_columns',
    'pg_affected_rows' => 'pg_affected_rows',
    'pg_get_result' => 'pg_get_result',
    'pg_result_seek' => 'pg_result_seek',
    'pg_result_status' => 'pg_result_status',
    'pg_free_result' => 'pg_free_result',
    'pg_last_oid' => 'pg_last_oid',
    'pg_num_rows' => 'pg_num_rows',
    'pg_num_fields' => 'pg_num_fields',
    'pg_field_name' => 'pg_field_name',
    'pg_field_num' => 'pg_field_num',
    'pg_field_size' => 'pg_field_size',
    'pg_field_type' => 'pg_field_type',
    'pg_field_type_oid' => 'pg_field_type_oid',
    'pg_field_prtlen' => 'pg_field_prtlen',
    'pg_field_is_null' => 'pg_field_is_null',
    'pg_field_table' => 'pg_field_table',
    'pg_get_notify' => 'pg_get_notify',
    'pg_get_pid' => 'pg_get_pid',
    'pg_result_error' => 'pg_result_error',
    'pg_result_error_field' => 'pg_result_error_field',
    'pg_last_error' => 'pg_last_error',
    'pg_last_notice' => 'pg_last_notice',
    'pg_put_line' => 'pg_put_line',
    'pg_end_copy' => 'pg_end_copy',
    'pg_copy_to' => 'pg_copy_to',
    'pg_copy_from' => 'pg_copy_from',
    'pg_trace' => 'pg_trace',
    'pg_untrace' => 'pg_untrace',
    'pg_lo_create' => 'pg_lo_create',
    'pg_lo_unlink' => 'pg_lo_unlink',
    'pg_lo_open' => 'pg_lo_open',
    'pg_lo_close' => 'pg_lo_close',
    'pg_lo_read' => 'pg_lo_read',
    'pg_lo_write' => 'pg_lo_write',
    'pg_lo_read_all' => 'pg_lo_read_all',
    'pg_lo_import' => 'pg_lo_import',
    'pg_lo_export' => 'pg_lo_export',
    'pg_lo_seek' => 'pg_lo_seek',
    'pg_lo_tell' => 'pg_lo_tell',
    'pg_escape_string' => 'pg_escape_string',
    'pg_escape_bytea' => 'pg_escape_bytea',
    'pg_unescape_bytea' => 'pg_unescape_bytea',
    'pg_set_error_verbosity' => 'pg_set_error_verbosity',
    'pg_client_encoding' => 'pg_client_encoding',
    'pg_set_client_encoding' => 'pg_set_client_encoding',
    'pg_meta_data' => 'pg_meta_data',
    'pg_convert' => 'pg_convert',
    'pg_insert' => 'pg_insert',
    'pg_update' => 'pg_update',
    'pg_delete' => 'pg_delete',
    'pg_select' => 'pg_select',
    'pg_exec' => 'pg_exec',
    'pg_getlastoid' => 'pg_getlastoid',
    'pg_cmdtuples' => 'pg_cmdtuples',
    'pg_errormessage' => 'pg_errormessage',
    'pg_numrows' => 'pg_numrows',
    'pg_numfields' => 'pg_numfields',
    'pg_fieldname' => 'pg_fieldname',
    'pg_fieldsize' => 'pg_fieldsize',
    'pg_fieldtype' => 'pg_fieldtype',
    'pg_fieldnum' => 'pg_fieldnum',
    'pg_fieldprtlen' => 'pg_fieldprtlen',
    'pg_fieldisnull' => 'pg_fieldisnull',
    'pg_freeresult' => 'pg_freeresult',
    'pg_result' => 'pg_result',
    'pg_loreadall' => 'pg_loreadall',
    'pg_locreate' => 'pg_locreate',
    'pg_lounlink' => 'pg_lounlink',
    'pg_loopen' => 'pg_loopen',
    'pg_loclose' => 'pg_loclose',
    'pg_loread' => 'pg_loread',
    'pg_lowrite' => 'pg_lowrite',
    'pg_loimport' => 'pg_loimport',
    'pg_loexport' => 'pg_loexport',
    'pg_clientencoding' => 'pg_clientencoding',
    'pg_setclientencoding' => 'pg_setclientencoding',
  ),
  'constants' => 
  array (
    'PGSQL_CONNECT_FORCE_NEW' => 2,
    'PGSQL_ASSOC' => 1,
    'PGSQL_NUM' => 2,
    'PGSQL_BOTH' => 3,
    'PGSQL_CONNECTION_BAD' => 1,
    'PGSQL_CONNECTION_OK' => 0,
    'PGSQL_TRANSACTION_IDLE' => 0,
    'PGSQL_TRANSACTION_ACTIVE' => 1,
    'PGSQL_TRANSACTION_INTRANS' => 2,
    'PGSQL_TRANSACTION_INERROR' => 3,
    'PGSQL_TRANSACTION_UNKNOWN' => 4,
    'PGSQL_ERRORS_TERSE' => 0,
    'PGSQL_ERRORS_DEFAULT' => 1,
    'PGSQL_ERRORS_VERBOSE' => 2,
    'PGSQL_SEEK_SET' => 0,
    'PGSQL_SEEK_CUR' => 1,
    'PGSQL_SEEK_END' => 2,
    'PGSQL_STATUS_LONG' => 1,
    'PGSQL_STATUS_STRING' => 2,
    'PGSQL_EMPTY_QUERY' => 0,
    'PGSQL_COMMAND_OK' => 1,
    'PGSQL_TUPLES_OK' => 2,
    'PGSQL_COPY_OUT' => 3,
    'PGSQL_COPY_IN' => 4,
    'PGSQL_BAD_RESPONSE' => 5,
    'PGSQL_NONFATAL_ERROR' => 6,
    'PGSQL_FATAL_ERROR' => 7,
    'PGSQL_DIAG_SEVERITY' => 83,
    'PGSQL_DIAG_SQLSTATE' => 67,
    'PGSQL_DIAG_MESSAGE_PRIMARY' => 77,
    'PGSQL_DIAG_MESSAGE_DETAIL' => 68,
    'PGSQL_DIAG_MESSAGE_HINT' => 72,
    'PGSQL_DIAG_STATEMENT_POSITION' => 80,
    'PGSQL_DIAG_INTERNAL_POSITION' => 112,
    'PGSQL_DIAG_INTERNAL_QUERY' => 113,
    'PGSQL_DIAG_CONTEXT' => 87,
    'PGSQL_DIAG_SOURCE_FILE' => 70,
    'PGSQL_DIAG_SOURCE_LINE' => 76,
    'PGSQL_DIAG_SOURCE_FUNCTION' => 82,
    'PGSQL_CONV_IGNORE_DEFAULT' => 2,
    'PGSQL_CONV_FORCE_NULL' => 4,
    'PGSQL_CONV_IGNORE_NOT_NULL' => 8,
    'PGSQL_DML_NO_CONV' => 256,
    'PGSQL_DML_EXEC' => 512,
    'PGSQL_DML_ASYNC' => 1024,
    'PGSQL_DML_STRING' => 2048,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'pgsql.allow_persistent' => '1',
    'pgsql.auto_reset_persistent' => '',
    'pgsql.ignore_notice' => '0',
    'pgsql.log_notice' => '0',
    'pgsql.max_links' => '-1',
    'pgsql.max_persistent' => '-1',
  ),
);
