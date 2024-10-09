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
    \ReflectionExtension::__set_state(array(
       'name' => 'pgsql',
    )),
    'removed' => NULL,
    'version' => '8.3.12',
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
    0 => 'PgSql\\Connection',
    1 => 'PgSql\\Result',
    2 => 'PgSql\\Lob',
  ),
  'functions' => 
  array (
    'pg_connect' => 'pg_connect',
    'pg_pconnect' => 'pg_pconnect',
    'pg_connect_poll' => 'pg_connect_poll',
    'pg_close' => 'pg_close',
    'pg_dbname' => 'pg_dbname',
    'pg_last_error' => 'pg_last_error',
    'pg_errormessage' => 'pg_errormessage',
    'pg_options' => 'pg_options',
    'pg_port' => 'pg_port',
    'pg_tty' => 'pg_tty',
    'pg_host' => 'pg_host',
    'pg_version' => 'pg_version',
    'pg_parameter_status' => 'pg_parameter_status',
    'pg_ping' => 'pg_ping',
    'pg_query' => 'pg_query',
    'pg_exec' => 'pg_exec',
    'pg_query_params' => 'pg_query_params',
    'pg_prepare' => 'pg_prepare',
    'pg_execute' => 'pg_execute',
    'pg_num_rows' => 'pg_num_rows',
    'pg_numrows' => 'pg_numrows',
    'pg_num_fields' => 'pg_num_fields',
    'pg_numfields' => 'pg_numfields',
    'pg_affected_rows' => 'pg_affected_rows',
    'pg_cmdtuples' => 'pg_cmdtuples',
    'pg_last_notice' => 'pg_last_notice',
    'pg_field_table' => 'pg_field_table',
    'pg_field_name' => 'pg_field_name',
    'pg_fieldname' => 'pg_fieldname',
    'pg_field_size' => 'pg_field_size',
    'pg_fieldsize' => 'pg_fieldsize',
    'pg_field_type' => 'pg_field_type',
    'pg_fieldtype' => 'pg_fieldtype',
    'pg_field_type_oid' => 'pg_field_type_oid',
    'pg_field_num' => 'pg_field_num',
    'pg_fieldnum' => 'pg_fieldnum',
    'pg_fetch_result' => 'pg_fetch_result',
    'pg_result' => 'pg_result',
    'pg_fetch_row' => 'pg_fetch_row',
    'pg_fetch_assoc' => 'pg_fetch_assoc',
    'pg_fetch_array' => 'pg_fetch_array',
    'pg_fetch_object' => 'pg_fetch_object',
    'pg_fetch_all' => 'pg_fetch_all',
    'pg_fetch_all_columns' => 'pg_fetch_all_columns',
    'pg_result_seek' => 'pg_result_seek',
    'pg_field_prtlen' => 'pg_field_prtlen',
    'pg_fieldprtlen' => 'pg_fieldprtlen',
    'pg_field_is_null' => 'pg_field_is_null',
    'pg_fieldisnull' => 'pg_fieldisnull',
    'pg_free_result' => 'pg_free_result',
    'pg_freeresult' => 'pg_freeresult',
    'pg_last_oid' => 'pg_last_oid',
    'pg_getlastoid' => 'pg_getlastoid',
    'pg_trace' => 'pg_trace',
    'pg_untrace' => 'pg_untrace',
    'pg_lo_create' => 'pg_lo_create',
    'pg_locreate' => 'pg_locreate',
    'pg_lo_unlink' => 'pg_lo_unlink',
    'pg_lounlink' => 'pg_lounlink',
    'pg_lo_open' => 'pg_lo_open',
    'pg_loopen' => 'pg_loopen',
    'pg_lo_close' => 'pg_lo_close',
    'pg_loclose' => 'pg_loclose',
    'pg_lo_read' => 'pg_lo_read',
    'pg_loread' => 'pg_loread',
    'pg_lo_write' => 'pg_lo_write',
    'pg_lowrite' => 'pg_lowrite',
    'pg_lo_read_all' => 'pg_lo_read_all',
    'pg_loreadall' => 'pg_loreadall',
    'pg_lo_import' => 'pg_lo_import',
    'pg_loimport' => 'pg_loimport',
    'pg_lo_export' => 'pg_lo_export',
    'pg_loexport' => 'pg_loexport',
    'pg_lo_seek' => 'pg_lo_seek',
    'pg_lo_tell' => 'pg_lo_tell',
    'pg_lo_truncate' => 'pg_lo_truncate',
    'pg_set_error_verbosity' => 'pg_set_error_verbosity',
    'pg_set_client_encoding' => 'pg_set_client_encoding',
    'pg_setclientencoding' => 'pg_setclientencoding',
    'pg_client_encoding' => 'pg_client_encoding',
    'pg_clientencoding' => 'pg_clientencoding',
    'pg_end_copy' => 'pg_end_copy',
    'pg_put_line' => 'pg_put_line',
    'pg_copy_to' => 'pg_copy_to',
    'pg_copy_from' => 'pg_copy_from',
    'pg_escape_string' => 'pg_escape_string',
    'pg_escape_bytea' => 'pg_escape_bytea',
    'pg_unescape_bytea' => 'pg_unescape_bytea',
    'pg_escape_literal' => 'pg_escape_literal',
    'pg_escape_identifier' => 'pg_escape_identifier',
    'pg_result_error' => 'pg_result_error',
    'pg_result_error_field' => 'pg_result_error_field',
    'pg_connection_status' => 'pg_connection_status',
    'pg_transaction_status' => 'pg_transaction_status',
    'pg_connection_reset' => 'pg_connection_reset',
    'pg_cancel_query' => 'pg_cancel_query',
    'pg_connection_busy' => 'pg_connection_busy',
    'pg_send_query' => 'pg_send_query',
    'pg_send_query_params' => 'pg_send_query_params',
    'pg_send_prepare' => 'pg_send_prepare',
    'pg_send_execute' => 'pg_send_execute',
    'pg_get_result' => 'pg_get_result',
    'pg_result_status' => 'pg_result_status',
    'pg_get_notify' => 'pg_get_notify',
    'pg_get_pid' => 'pg_get_pid',
    'pg_socket' => 'pg_socket',
    'pg_consume_input' => 'pg_consume_input',
    'pg_flush' => 'pg_flush',
    'pg_meta_data' => 'pg_meta_data',
    'pg_convert' => 'pg_convert',
    'pg_insert' => 'pg_insert',
    'pg_update' => 'pg_update',
    'pg_delete' => 'pg_delete',
    'pg_select' => 'pg_select',
    'pg_set_error_context_visibility' => 'pg_set_error_context_visibility',
  ),
  'constants' => 
  array (
    'PGSQL_LIBPQ_VERSION' => '17.0',
    'PGSQL_LIBPQ_VERSION_STR' => '17.0',
    'PGSQL_CONNECT_FORCE_NEW' => 2,
    'PGSQL_CONNECT_ASYNC' => 4,
    'PGSQL_ASSOC' => 1,
    'PGSQL_NUM' => 2,
    'PGSQL_BOTH' => 3,
    'PGSQL_NOTICE_LAST' => 1,
    'PGSQL_NOTICE_ALL' => 2,
    'PGSQL_NOTICE_CLEAR' => 3,
    'PGSQL_CONNECTION_BAD' => 1,
    'PGSQL_CONNECTION_OK' => 0,
    'PGSQL_CONNECTION_STARTED' => 2,
    'PGSQL_CONNECTION_MADE' => 3,
    'PGSQL_CONNECTION_AWAITING_RESPONSE' => 4,
    'PGSQL_CONNECTION_AUTH_OK' => 5,
    'PGSQL_CONNECTION_SETENV' => 6,
    'PGSQL_POLLING_FAILED' => 0,
    'PGSQL_POLLING_READING' => 1,
    'PGSQL_POLLING_WRITING' => 2,
    'PGSQL_POLLING_OK' => 3,
    'PGSQL_POLLING_ACTIVE' => 4,
    'PGSQL_TRANSACTION_IDLE' => 0,
    'PGSQL_TRANSACTION_ACTIVE' => 1,
    'PGSQL_TRANSACTION_INTRANS' => 2,
    'PGSQL_TRANSACTION_INERROR' => 3,
    'PGSQL_TRANSACTION_UNKNOWN' => 4,
    'PGSQL_ERRORS_TERSE' => 0,
    'PGSQL_ERRORS_DEFAULT' => 1,
    'PGSQL_ERRORS_VERBOSE' => 2,
    'PGSQL_ERRORS_SQLSTATE' => 0,
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
    'PGSQL_DIAG_SCHEMA_NAME' => 115,
    'PGSQL_DIAG_TABLE_NAME' => 116,
    'PGSQL_DIAG_COLUMN_NAME' => 99,
    'PGSQL_DIAG_DATATYPE_NAME' => 100,
    'PGSQL_DIAG_CONSTRAINT_NAME' => 110,
    'PGSQL_DIAG_SEVERITY_NONLOCALIZED' => 86,
    'PGSQL_CONV_IGNORE_DEFAULT' => 2,
    'PGSQL_CONV_FORCE_NULL' => 4,
    'PGSQL_CONV_IGNORE_NOT_NULL' => 8,
    'PGSQL_DML_ESCAPE' => 4096,
    'PGSQL_DML_NO_CONV' => 256,
    'PGSQL_DML_EXEC' => 512,
    'PGSQL_DML_ASYNC' => 1024,
    'PGSQL_DML_STRING' => 2048,
    'PGSQL_TRACE_REGRESS_MODE' => 2,
    'PGSQL_SHOW_CONTEXT_NEVER' => 0,
    'PGSQL_SHOW_CONTEXT_ERRORS' => 1,
    'PGSQL_SHOW_CONTEXT_ALWAYS' => 2,
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
