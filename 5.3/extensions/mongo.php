<?php

return array (
  'type' => 'extension',
  'name' => 'mongo',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'mongo',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'mongo',
    )),
    'removed' => NULL,
    'version' => '1.6.16',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mongo extension (php.net)',
        'url' => 'https://www.php.net/manual/book.mongo.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'MongoClient',
    1 => 'Mongo',
    2 => 'MongoDB',
    3 => 'MongoCollection',
    4 => 'MongoCursorInterface',
    5 => 'MongoCursor',
    6 => 'MongoCommandCursor',
    7 => 'MongoGridFS',
    8 => 'MongoGridFSFile',
    9 => 'MongoGridFSCursor',
    10 => 'MongoWriteBatch',
    11 => 'MongoInsertBatch',
    12 => 'MongoUpdateBatch',
    13 => 'MongoDeleteBatch',
    14 => 'MongoId',
    15 => 'MongoCode',
    16 => 'MongoRegex',
    17 => 'MongoDate',
    18 => 'MongoBinData',
    19 => 'MongoDBRef',
    20 => 'MongoException',
    21 => 'MongoConnectionException',
    22 => 'MongoCursorException',
    23 => 'MongoCursorTimeoutException',
    24 => 'MongoGridFSException',
    25 => 'MongoResultException',
    26 => 'MongoWriteConcernException',
    27 => 'MongoDuplicateKeyException',
    28 => 'MongoExecutionTimeoutException',
    29 => 'MongoProtocolException',
    30 => 'MongoTimestamp',
    31 => 'MongoInt32',
    32 => 'MongoInt64',
    33 => 'MongoLog',
    34 => 'MongoPool',
    35 => 'MongoMaxKey',
    36 => 'MongoMinKey',
  ),
  'functions' => 
  array (
    'bson_encode' => 'bson_encode',
    'bson_decode' => 'bson_decode',
  ),
  'constants' => 
  array (
    'MONGO_STREAMS' => 1,
    'MONGO_SUPPORTS_STREAMS' => 1,
    'MONGO_SUPPORTS_SSL' => 1,
    'MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_CR' => 1,
    'MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_X509' => 1,
    'MONGO_SUPPORTS_AUTH_MECHANISM_SCRAM_SHA1' => 1,
    'MONGO_SUPPORTS_AUTH_MECHANISM_GSSAPI' => 0,
    'MONGO_SUPPORTS_AUTH_MECHANISM_PLAIN' => 0,
    'MONGO_STREAM_NOTIFY_TYPE_IO_INIT' => 100,
    'MONGO_STREAM_NOTIFY_TYPE_LOG' => 200,
    'MONGO_STREAM_NOTIFY_IO_READ' => 111,
    'MONGO_STREAM_NOTIFY_IO_WRITE' => 112,
    'MONGO_STREAM_NOTIFY_IO_PROGRESS' => 7,
    'MONGO_STREAM_NOTIFY_IO_COMPLETED' => 8,
    'MONGO_STREAM_NOTIFY_LOG_INSERT' => 211,
    'MONGO_STREAM_NOTIFY_LOG_QUERY' => 212,
    'MONGO_STREAM_NOTIFY_LOG_UPDATE' => 213,
    'MONGO_STREAM_NOTIFY_LOG_DELETE' => 214,
    'MONGO_STREAM_NOTIFY_LOG_GETMORE' => 215,
    'MONGO_STREAM_NOTIFY_LOG_KILLCURSOR' => 216,
    'MONGO_STREAM_NOTIFY_LOG_BATCHINSERT' => 217,
    'MONGO_STREAM_NOTIFY_LOG_RESPONSE_HEADER' => 218,
    'MONGO_STREAM_NOTIFY_LOG_WRITE_REPLY' => 219,
    'MONGO_STREAM_NOTIFY_LOG_CMD_INSERT' => 220,
    'MONGO_STREAM_NOTIFY_LOG_CMD_UPDATE' => 221,
    'MONGO_STREAM_NOTIFY_LOG_CMD_DELETE' => 222,
    'MONGO_STREAM_NOTIFY_LOG_WRITE_BATCH' => 223,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mongo.allow_empty_keys' => '0',
    'mongo.chunk_size' => '261120',
    'mongo.cmd' => '$',
    'mongo.default_host' => 'localhost',
    'mongo.default_port' => '27017',
    'mongo.is_master_interval' => '15',
    'mongo.long_as_object' => '0',
    'mongo.native_long' => '1',
    'mongo.ping_interval' => '5',
  ),
);
