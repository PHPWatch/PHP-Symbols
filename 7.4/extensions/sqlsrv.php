<?php

return array (
  'type' => 'extension',
  'name' => 'sqlsrv',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sqlsrv',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'sqlsrv',
    )),
    'removed' => NULL,
    'version' => '5.10.1',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sqlsrv extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sqlsrv.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'sqlsrv_connect' => 'sqlsrv_connect',
    'sqlsrv_close' => 'sqlsrv_close',
    'sqlsrv_commit' => 'sqlsrv_commit',
    'sqlsrv_begin_transaction' => 'sqlsrv_begin_transaction',
    'sqlsrv_rollback' => 'sqlsrv_rollback',
    'sqlsrv_errors' => 'sqlsrv_errors',
    'sqlsrv_configure' => 'sqlsrv_configure',
    'sqlsrv_get_config' => 'sqlsrv_get_config',
    'sqlsrv_prepare' => 'sqlsrv_prepare',
    'sqlsrv_execute' => 'sqlsrv_execute',
    'sqlsrv_query' => 'sqlsrv_query',
    'sqlsrv_fetch' => 'sqlsrv_fetch',
    'sqlsrv_get_field' => 'sqlsrv_get_field',
    'sqlsrv_fetch_array' => 'sqlsrv_fetch_array',
    'sqlsrv_fetch_object' => 'sqlsrv_fetch_object',
    'sqlsrv_has_rows' => 'sqlsrv_has_rows',
    'sqlsrv_num_fields' => 'sqlsrv_num_fields',
    'sqlsrv_next_result' => 'sqlsrv_next_result',
    'sqlsrv_num_rows' => 'sqlsrv_num_rows',
    'sqlsrv_rows_affected' => 'sqlsrv_rows_affected',
    'SQLSRV_PHPTYPE_STREAM' => 'SQLSRV_PHPTYPE_STREAM',
    'SQLSRV_PHPTYPE_STRING' => 'SQLSRV_PHPTYPE_STRING',
    'sqlsrv_client_info' => 'sqlsrv_client_info',
    'sqlsrv_server_info' => 'sqlsrv_server_info',
    'sqlsrv_cancel' => 'sqlsrv_cancel',
    'sqlsrv_free_stmt' => 'sqlsrv_free_stmt',
    'sqlsrv_field_metadata' => 'sqlsrv_field_metadata',
    'sqlsrv_send_stream_data' => 'sqlsrv_send_stream_data',
    'SQLSRV_SQLTYPE_BINARY' => 'SQLSRV_SQLTYPE_BINARY',
    'SQLSRV_SQLTYPE_CHAR' => 'SQLSRV_SQLTYPE_CHAR',
    'SQLSRV_SQLTYPE_DECIMAL' => 'SQLSRV_SQLTYPE_DECIMAL',
    'SQLSRV_SQLTYPE_NCHAR' => 'SQLSRV_SQLTYPE_NCHAR',
    'SQLSRV_SQLTYPE_NUMERIC' => 'SQLSRV_SQLTYPE_NUMERIC',
    'SQLSRV_SQLTYPE_NVARCHAR' => 'SQLSRV_SQLTYPE_NVARCHAR',
    'SQLSRV_SQLTYPE_VARBINARY' => 'SQLSRV_SQLTYPE_VARBINARY',
    'SQLSRV_SQLTYPE_VARCHAR' => 'SQLSRV_SQLTYPE_VARCHAR',
  ),
  'constants' => 
  array (
    'SQLSRV_ERR_ERRORS' => 0,
    'SQLSRV_ERR_WARNINGS' => 1,
    'SQLSRV_ERR_ALL' => 2,
    'SQLSRV_LOG_SYSTEM_OFF' => 0,
    'SQLSRV_LOG_SYSTEM_INIT' => 1,
    'SQLSRV_LOG_SYSTEM_CONN' => 2,
    'SQLSRV_LOG_SYSTEM_STMT' => 4,
    'SQLSRV_LOG_SYSTEM_UTIL' => 8,
    'SQLSRV_LOG_SYSTEM_ALL' => -1,
    'SQLSRV_LOG_SEVERITY_ERROR' => 1,
    'SQLSRV_LOG_SEVERITY_WARNING' => 2,
    'SQLSRV_LOG_SEVERITY_NOTICE' => 4,
    'SQLSRV_LOG_SEVERITY_ALL' => -1,
    'SQLSRV_FETCH_NUMERIC' => 1,
    'SQLSRV_FETCH_ASSOC' => 2,
    'SQLSRV_FETCH_BOTH' => 3,
    'SQLSRV_PHPTYPE_NULL' => 1,
    'SQLSRV_PHPTYPE_INT' => 2,
    'SQLSRV_PHPTYPE_FLOAT' => 3,
    'SQLSRV_PHPTYPE_DATETIME' => 5,
    'SQLSRV_PHPTYPE_TABLE' => 7,
    'SQLSRV_ENC_BINARY' => 'binary',
    'SQLSRV_ENC_CHAR' => 'char',
    'SQLSRV_NULLABLE_NO' => 0,
    'SQLSRV_NULLABLE_YES' => 1,
    'SQLSRV_NULLABLE_UNKNOWN' => 2,
    'SQLSRV_SQLTYPE_BIGINT' => -5,
    'SQLSRV_SQLTYPE_BIT' => -7,
    'SQLSRV_SQLTYPE_DATETIME' => 25177693,
    'SQLSRV_SQLTYPE_FLOAT' => 6,
    'SQLSRV_SQLTYPE_IMAGE' => -4,
    'SQLSRV_SQLTYPE_INT' => 4,
    'SQLSRV_SQLTYPE_MONEY' => 33564163,
    'SQLSRV_SQLTYPE_NTEXT' => -10,
    'SQLSRV_SQLTYPE_TEXT' => -1,
    'SQLSRV_SQLTYPE_REAL' => 7,
    'SQLSRV_SQLTYPE_SMALLDATETIME' => 8285,
    'SQLSRV_SQLTYPE_SMALLINT' => 5,
    'SQLSRV_SQLTYPE_SMALLMONEY' => 33559555,
    'SQLSRV_SQLTYPE_TIMESTAMP' => 4606,
    'SQLSRV_SQLTYPE_TINYINT' => -6,
    'SQLSRV_SQLTYPE_UDT' => -151,
    'SQLSRV_SQLTYPE_TABLE' => -153,
    'SQLSRV_SQLTYPE_UNIQUEIDENTIFIER' => -11,
    'SQLSRV_SQLTYPE_XML' => -152,
    'SQLSRV_SQLTYPE_DATE' => 5211,
    'SQLSRV_SQLTYPE_TIME' => 58728806,
    'SQLSRV_SQLTYPE_DATETIMEOFFSET' => 58738021,
    'SQLSRV_SQLTYPE_DATETIME2' => 58734173,
    'SQLSRV_SQLTYPE_DECIMAL' => 3,
    'SQLSRV_SQLTYPE_NUMERIC' => 2,
    'SQLSRV_SQLTYPE_CHAR' => 1,
    'SQLSRV_SQLTYPE_NCHAR' => -8,
    'SQLSRV_SQLTYPE_VARCHAR' => 12,
    'SQLSRV_SQLTYPE_NVARCHAR' => -9,
    'SQLSRV_SQLTYPE_BINARY' => -2,
    'SQLSRV_SQLTYPE_VARBINARY' => -3,
    'SQLSRV_PARAM_IN' => 1,
    'SQLSRV_PARAM_OUT' => 4,
    'SQLSRV_PARAM_INOUT' => 2,
    'SQLSRV_TXN_READ_UNCOMMITTED' => 1,
    'SQLSRV_TXN_READ_COMMITTED' => 2,
    'SQLSRV_TXN_REPEATABLE_READ' => 4,
    'SQLSRV_TXN_SERIALIZABLE' => 8,
    'SQLSRV_TXN_SNAPSHOT' => 32,
    'SQLSRV_SCROLL_NEXT' => 1,
    'SQLSRV_SCROLL_PRIOR' => 4,
    'SQLSRV_SCROLL_FIRST' => 2,
    'SQLSRV_SCROLL_LAST' => 3,
    'SQLSRV_SCROLL_ABSOLUTE' => 5,
    'SQLSRV_SCROLL_RELATIVE' => 6,
    'SQLSRV_CURSOR_FORWARD' => 'forward',
    'SQLSRV_CURSOR_STATIC' => 'static',
    'SQLSRV_CURSOR_DYNAMIC' => 'dynamic',
    'SQLSRV_CURSOR_KEYSET' => 'keyset',
    'SQLSRV_CURSOR_CLIENT_BUFFERED' => 'buffered',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'sqlsrv.ClientBufferMaxKBSize' => '10240',
    'sqlsrv.LogSeverity' => '0',
    'sqlsrv.LogSubsystems' => '0',
    'sqlsrv.SetLocaleInfo' => '2',
    'sqlsrv.WarningsReturnAsErrors' => '1',
  ),
);
