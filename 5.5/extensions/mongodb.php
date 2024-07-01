<?php

return array (
  'type' => 'extension',
  'name' => 'mongodb',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'mongodb',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'mongodb',
    )),
    'removed' => NULL,
    'version' => '1.1.0',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mongodb extension (php.net)',
        'url' => 'https://www.php.net/manual/book.mongodb.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'MongoDB\\Driver\\Command',
    1 => 'MongoDB\\Driver\\Cursor',
    2 => 'MongoDB\\Driver\\CursorId',
    3 => 'MongoDB\\Driver\\Manager',
    4 => 'MongoDB\\Driver\\Query',
    5 => 'MongoDB\\Driver\\ReadConcern',
    6 => 'MongoDB\\Driver\\ReadPreference',
    7 => 'MongoDB\\Driver\\Server',
    8 => 'MongoDB\\Driver\\BulkWrite',
    9 => 'MongoDB\\Driver\\WriteConcern',
    10 => 'MongoDB\\Driver\\WriteConcernError',
    11 => 'MongoDB\\Driver\\WriteError',
    12 => 'MongoDB\\Driver\\WriteResult',
    13 => 'MongoDB\\Driver\\Exception\\Exception',
    14 => 'MongoDB\\Driver\\Exception\\LogicException',
    15 => 'MongoDB\\Driver\\Exception\\RuntimeException',
    16 => 'MongoDB\\Driver\\Exception\\UnexpectedValueException',
    17 => 'MongoDB\\Driver\\Exception\\InvalidArgumentException',
    18 => 'MongoDB\\Driver\\Exception\\ConnectionException',
    19 => 'MongoDB\\Driver\\Exception\\AuthenticationException',
    20 => 'MongoDB\\Driver\\Exception\\SSLConnectionException',
    21 => 'MongoDB\\Driver\\Exception\\WriteException',
    22 => 'MongoDB\\Driver\\Exception\\BulkWriteException',
    23 => 'MongoDB\\Driver\\Exception\\ExecutionTimeoutException',
    24 => 'MongoDB\\Driver\\Exception\\ConnectionTimeoutException',
    25 => 'MongoDB\\BSON\\Type',
    26 => 'MongoDB\\BSON\\Serializable',
    27 => 'MongoDB\\BSON\\Unserializable',
    28 => 'MongoDB\\BSON\\Persistable',
    29 => 'MongoDB\\BSON\\Binary',
    30 => 'MongoDB\\BSON\\Javascript',
    31 => 'MongoDB\\BSON\\MaxKey',
    32 => 'MongoDB\\BSON\\MinKey',
    33 => 'MongoDB\\BSON\\ObjectID',
    34 => 'MongoDB\\BSON\\Regex',
    35 => 'MongoDB\\BSON\\Timestamp',
    36 => 'MongoDB\\BSON\\UTCDateTime',
  ),
  'functions' => 
  array (
    'MongoDB\\BSON\\fromPHP' => 'MongoDB\\BSON\\fromPHP',
    'MongoDB\\BSON\\toPHP' => 'MongoDB\\BSON\\toPHP',
    'MongoDB\\BSON\\toJSON' => 'MongoDB\\BSON\\toJSON',
    'MongoDB\\BSON\\fromJSON' => 'MongoDB\\BSON\\fromJSON',
  ),
  'constants' => 
  array (
    'MONGODB_VERSION' => '1.1.0',
    'MONGODB_STABILITY' => 'stable',
    'BSON_NAMESPACE' => 'MongoDB\\BSON',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mongodb.debug' => '',
  ),
);
