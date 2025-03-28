<?php

return array (
  'type' => 'extension',
  'name' => 'date',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'date',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'date',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'date extension (php.net)',
        'url' => 'https://www.php.net/manual/book.date.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'DateTime',
    1 => 'DateTimeZone',
    2 => 'DateInterval',
    3 => 'DatePeriod',
  ),
  'functions' => 
  array (
    'strtotime' => 'strtotime',
    'date' => 'date',
    'idate' => 'idate',
    'gmdate' => 'gmdate',
    'mktime' => 'mktime',
    'gmmktime' => 'gmmktime',
    'checkdate' => 'checkdate',
    'strftime' => 'strftime',
    'gmstrftime' => 'gmstrftime',
    'time' => 'time',
    'localtime' => 'localtime',
    'getdate' => 'getdate',
    'date_create' => 'date_create',
    'date_create_from_format' => 'date_create_from_format',
    'date_parse' => 'date_parse',
    'date_parse_from_format' => 'date_parse_from_format',
    'date_get_last_errors' => 'date_get_last_errors',
    'date_format' => 'date_format',
    'date_modify' => 'date_modify',
    'date_add' => 'date_add',
    'date_sub' => 'date_sub',
    'date_timezone_get' => 'date_timezone_get',
    'date_timezone_set' => 'date_timezone_set',
    'date_offset_get' => 'date_offset_get',
    'date_diff' => 'date_diff',
    'date_time_set' => 'date_time_set',
    'date_date_set' => 'date_date_set',
    'date_isodate_set' => 'date_isodate_set',
    'date_timestamp_set' => 'date_timestamp_set',
    'date_timestamp_get' => 'date_timestamp_get',
    'timezone_open' => 'timezone_open',
    'timezone_name_get' => 'timezone_name_get',
    'timezone_name_from_abbr' => 'timezone_name_from_abbr',
    'timezone_offset_get' => 'timezone_offset_get',
    'timezone_transitions_get' => 'timezone_transitions_get',
    'timezone_location_get' => 'timezone_location_get',
    'timezone_identifiers_list' => 'timezone_identifiers_list',
    'timezone_abbreviations_list' => 'timezone_abbreviations_list',
    'timezone_version_get' => 'timezone_version_get',
    'date_interval_create_from_date_string' => 'date_interval_create_from_date_string',
    'date_interval_format' => 'date_interval_format',
    'date_default_timezone_set' => 'date_default_timezone_set',
    'date_default_timezone_get' => 'date_default_timezone_get',
    'date_sunrise' => 'date_sunrise',
    'date_sunset' => 'date_sunset',
    'date_sun_info' => 'date_sun_info',
  ),
  'constants' => 
  array (
    'DATE_ATOM' => 'Y-m-d\\TH:i:sP',
    'DATE_COOKIE' => 'l, d-M-y H:i:s T',
    'DATE_ISO8601' => 'Y-m-d\\TH:i:sO',
    'DATE_RFC822' => 'D, d M y H:i:s O',
    'DATE_RFC850' => 'l, d-M-y H:i:s T',
    'DATE_RFC1036' => 'D, d M y H:i:s O',
    'DATE_RFC1123' => 'D, d M Y H:i:s O',
    'DATE_RFC2822' => 'D, d M Y H:i:s O',
    'DATE_RFC3339' => 'Y-m-d\\TH:i:sP',
    'DATE_RSS' => 'D, d M Y H:i:s O',
    'DATE_W3C' => 'Y-m-d\\TH:i:sP',
    'SUNFUNCS_RET_TIMESTAMP' => 0,
    'SUNFUNCS_RET_STRING' => 1,
    'SUNFUNCS_RET_DOUBLE' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'date.default_latitude' => '31.7667',
    'date.default_longitude' => '35.2333',
    'date.sunrise_zenith' => '90.583333',
    'date.sunset_zenith' => '90.583333',
    'date.timezone' => 'UTC',
  ),
);
