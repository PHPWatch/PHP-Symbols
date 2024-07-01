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
    'version' => '1.11.1',
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
    0 => 'MongoDB\\BSON\\Type',
    1 => 'MongoDB\\BSON\\Serializable',
    2 => 'MongoDB\\BSON\\Unserializable',
    3 => 'MongoDB\\BSON\\BinaryInterface',
    4 => 'MongoDB\\BSON\\Decimal128Interface',
    5 => 'MongoDB\\BSON\\JavascriptInterface',
    6 => 'MongoDB\\BSON\\MaxKeyInterface',
    7 => 'MongoDB\\BSON\\MinKeyInterface',
    8 => 'MongoDB\\BSON\\ObjectIdInterface',
    9 => 'MongoDB\\BSON\\RegexInterface',
    10 => 'MongoDB\\BSON\\TimestampInterface',
    11 => 'MongoDB\\BSON\\UTCDateTimeInterface',
    12 => 'MongoDB\\BSON\\Binary',
    13 => 'MongoDB\\BSON\\DBPointer',
    14 => 'MongoDB\\BSON\\Decimal128',
    15 => 'MongoDB\\BSON\\Int64',
    16 => 'MongoDB\\BSON\\Javascript',
    17 => 'MongoDB\\BSON\\MaxKey',
    18 => 'MongoDB\\BSON\\MinKey',
    19 => 'MongoDB\\BSON\\ObjectId',
    20 => 'MongoDB\\BSON\\Persistable',
    21 => 'MongoDB\\BSON\\Regex',
    22 => 'MongoDB\\BSON\\Symbol',
    23 => 'MongoDB\\BSON\\Timestamp',
    24 => 'MongoDB\\BSON\\Undefined',
    25 => 'MongoDB\\BSON\\UTCDateTime',
    26 => 'MongoDB\\Driver\\CursorInterface',
    27 => 'MongoDB\\Driver\\BulkWrite',
    28 => 'MongoDB\\Driver\\ClientEncryption',
    29 => 'MongoDB\\Driver\\Command',
    30 => 'MongoDB\\Driver\\Cursor',
    31 => 'MongoDB\\Driver\\CursorId',
    32 => 'MongoDB\\Driver\\Manager',
    33 => 'MongoDB\\Driver\\Query',
    34 => 'MongoDB\\Driver\\ReadConcern',
    35 => 'MongoDB\\Driver\\ReadPreference',
    36 => 'MongoDB\\Driver\\Server',
    37 => 'MongoDB\\Driver\\ServerApi',
    38 => 'MongoDB\\Driver\\Session',
    39 => 'MongoDB\\Driver\\WriteConcern',
    40 => 'MongoDB\\Driver\\WriteConcernError',
    41 => 'MongoDB\\Driver\\WriteError',
    42 => 'MongoDB\\Driver\\WriteResult',
    43 => 'MongoDB\\Driver\\Exception\\Exception',
    44 => 'MongoDB\\Driver\\Exception\\RuntimeException',
    45 => 'MongoDB\\Driver\\Exception\\ServerException',
    46 => 'MongoDB\\Driver\\Exception\\ConnectionException',
    47 => 'MongoDB\\Driver\\Exception\\WriteException',
    48 => 'MongoDB\\Driver\\Exception\\AuthenticationException',
    49 => 'MongoDB\\Driver\\Exception\\BulkWriteException',
    50 => 'MongoDB\\Driver\\Exception\\CommandException',
    51 => 'MongoDB\\Driver\\Exception\\ConnectionTimeoutException',
    52 => 'MongoDB\\Driver\\Exception\\EncryptionException',
    53 => 'MongoDB\\Driver\\Exception\\ExecutionTimeoutException',
    54 => 'MongoDB\\Driver\\Exception\\InvalidArgumentException',
    55 => 'MongoDB\\Driver\\Exception\\LogicException',
    56 => 'MongoDB\\Driver\\Exception\\SSLConnectionException',
    57 => 'MongoDB\\Driver\\Exception\\UnexpectedValueException',
    58 => 'MongoDB\\Driver\\Monitoring\\Subscriber',
    59 => 'MongoDB\\Driver\\Monitoring\\CommandSubscriber',
    60 => 'MongoDB\\Driver\\Monitoring\\CommandFailedEvent',
    61 => 'MongoDB\\Driver\\Monitoring\\CommandStartedEvent',
    62 => 'MongoDB\\Driver\\Monitoring\\CommandSucceededEvent',
  ),
  'functions' => 
  array (
    'MongoDB\\BSON\\fromPHP' => 'MongoDB\\BSON\\fromPHP',
    'MongoDB\\BSON\\toPHP' => 'MongoDB\\BSON\\toPHP',
    'MongoDB\\BSON\\toJSON' => 'MongoDB\\BSON\\toJSON',
    'MongoDB\\BSON\\toCanonicalExtendedJSON' => 'MongoDB\\BSON\\toCanonicalExtendedJSON',
    'MongoDB\\BSON\\toRelaxedExtendedJSON' => 'MongoDB\\BSON\\toRelaxedExtendedJSON',
    'MongoDB\\BSON\\fromJSON' => 'MongoDB\\BSON\\fromJSON',
    'MongoDB\\Driver\\Monitoring\\addSubscriber' => 'MongoDB\\Driver\\Monitoring\\addSubscriber',
    'MongoDB\\Driver\\Monitoring\\removeSubscriber' => 'MongoDB\\Driver\\Monitoring\\removeSubscriber',
  ),
  'constants' => 
  array (
    'MONGODB_VERSION' => '1.11.1',
    'MONGODB_STABILITY' => 'stable',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mongodb.debug' => '',
    'mongodb.mock_service_id' => '0',
  ),
);
