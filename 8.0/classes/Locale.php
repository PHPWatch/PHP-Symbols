<?php

return array (
  'type' => 'class',
  'name' => 'Locale',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Locale',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Locale class (php.net)',
        'url' => 'https://www.php.net/manual/class.locale.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'ACTUAL_LOCALE' => 0,
    'VALID_LOCALE' => 1,
    'DEFAULT_LOCALE' => NULL,
    'LANG_TAG' => 'language',
    'EXTLANG_TAG' => 'extlang',
    'SCRIPT_TAG' => 'script',
    'REGION_TAG' => 'region',
    'VARIANT_TAG' => 'variant',
    'GRANDFATHERED_LANG_TAG' => 'grandfathered',
    'PRIVATE_TAG' => 'private',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getDefault' => 
    array (
      'name' => 'getDefault',
      'class' => 'Locale',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setDefault' => 
    array (
      'name' => 'setDefault',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPrimaryLanguage' => 
    array (
      'name' => 'getPrimaryLanguage',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getScript' => 
    array (
      'name' => 'getScript',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRegion' => 
    array (
      'name' => 'getRegion',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getKeywords' => 
    array (
      'name' => 'getKeywords',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayScript' => 
    array (
      'name' => 'getDisplayScript',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displayLocale' => 
        array (
          'position' => 1,
          'name' => 'displayLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayRegion' => 
    array (
      'name' => 'getDisplayRegion',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displayLocale' => 
        array (
          'position' => 1,
          'name' => 'displayLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayName' => 
    array (
      'name' => 'getDisplayName',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displayLocale' => 
        array (
          'position' => 1,
          'name' => 'displayLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayLanguage' => 
    array (
      'name' => 'getDisplayLanguage',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displayLocale' => 
        array (
          'position' => 1,
          'name' => 'displayLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDisplayVariant' => 
    array (
      'name' => 'getDisplayVariant',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'displayLocale' => 
        array (
          'position' => 1,
          'name' => 'displayLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'composeLocale' => 
    array (
      'name' => 'composeLocale',
      'class' => 'Locale',
      'parameters' => 
      array (
        'subtags' => 
        array (
          'position' => 0,
          'name' => 'subtags',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'parseLocale' => 
    array (
      'name' => 'parseLocale',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAllVariants' => 
    array (
      'name' => 'getAllVariants',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'filterMatches' => 
    array (
      'name' => 'filterMatches',
      'class' => 'Locale',
      'parameters' => 
      array (
        'languageTag' => 
        array (
          'position' => 0,
          'name' => 'languageTag',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'canonicalize' => 
        array (
          'position' => 2,
          'name' => 'canonicalize',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lookup' => 
    array (
      'name' => 'lookup',
      'class' => 'Locale',
      'parameters' => 
      array (
        'languageTag' => 
        array (
          'position' => 0,
          'name' => 'languageTag',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'locale' => 
        array (
          'position' => 1,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'canonicalize' => 
        array (
          'position' => 2,
          'name' => 'canonicalize',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'defaultLocale' => 
        array (
          'position' => 3,
          'name' => 'defaultLocale',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'canonicalize' => 
    array (
      'name' => 'canonicalize',
      'class' => 'Locale',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'acceptFromHttp' => 
    array (
      'name' => 'acceptFromHttp',
      'class' => 'Locale',
      'parameters' => 
      array (
        'header' => 
        array (
          'position' => 0,
          'name' => 'header',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:intl> class Locale ] {

  - Constants [10] {
    Constant [ public int ACTUAL_LOCALE ] { 0 }
    Constant [ public int VALID_LOCALE ] { 1 }
    Constant [ public null DEFAULT_LOCALE ] {  }
    Constant [ public string LANG_TAG ] { language }
    Constant [ public string EXTLANG_TAG ] { extlang }
    Constant [ public string SCRIPT_TAG ] { script }
    Constant [ public string REGION_TAG ] { region }
    Constant [ public string VARIANT_TAG ] { variant }
    Constant [ public string GRANDFATHERED_LANG_TAG ] { grandfathered }
    Constant [ public string PRIVATE_TAG ] { private }
  }

  - Static properties [0] {
  }

  - Static methods [18] {
    Method [ <internal:intl> static public method getDefault ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> static public method setDefault ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getPrimaryLanguage ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getScript ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getRegion ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getKeywords ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getDisplayScript ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> ?string $displayLocale = null ]
      }
    }

    Method [ <internal:intl> static public method getDisplayRegion ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> ?string $displayLocale = null ]
      }
    }

    Method [ <internal:intl> static public method getDisplayName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> ?string $displayLocale = null ]
      }
    }

    Method [ <internal:intl> static public method getDisplayLanguage ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> ?string $displayLocale = null ]
      }
    }

    Method [ <internal:intl> static public method getDisplayVariant ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $locale ]
        Parameter #1 [ <optional> ?string $displayLocale = null ]
      }
    }

    Method [ <internal:intl> static public method composeLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $subtags ]
      }
    }

    Method [ <internal:intl> static public method parseLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method getAllVariants ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method filterMatches ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $languageTag ]
        Parameter #1 [ <required> string $locale ]
        Parameter #2 [ <optional> bool $canonicalize = false ]
      }
    }

    Method [ <internal:intl> static public method lookup ] {

      - Parameters [4] {
        Parameter #0 [ <required> array $languageTag ]
        Parameter #1 [ <required> string $locale ]
        Parameter #2 [ <optional> bool $canonicalize = false ]
        Parameter #3 [ <optional> ?string $defaultLocale = null ]
      }
    }

    Method [ <internal:intl> static public method canonicalize ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $locale ]
      }
    }

    Method [ <internal:intl> static public method acceptFromHttp ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $header ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
',
);
