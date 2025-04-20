<?php

return array (
  'type' => 'class',
  'name' => 'IntlCodePointBreakIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlCodePointBreakIterator',
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
        'name' => 'IntlCodePointBreakIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.intlcodepointbreakiterator.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
  ),
  'constants' => 
  array (
    'DONE' => 
    array (
      'value' => -1,
      'toString' => 'Constant [ public int DONE ] { -1 }
',
      'visibility' => 256,
    ),
    'WORD_NONE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int WORD_NONE ] { 0 }
',
      'visibility' => 256,
    ),
    'WORD_NONE_LIMIT' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int WORD_NONE_LIMIT ] { 100 }
',
      'visibility' => 256,
    ),
    'WORD_NUMBER' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int WORD_NUMBER ] { 100 }
',
      'visibility' => 256,
    ),
    'WORD_NUMBER_LIMIT' => 
    array (
      'value' => 200,
      'toString' => 'Constant [ public int WORD_NUMBER_LIMIT ] { 200 }
',
      'visibility' => 256,
    ),
    'WORD_LETTER' => 
    array (
      'value' => 200,
      'toString' => 'Constant [ public int WORD_LETTER ] { 200 }
',
      'visibility' => 256,
    ),
    'WORD_LETTER_LIMIT' => 
    array (
      'value' => 300,
      'toString' => 'Constant [ public int WORD_LETTER_LIMIT ] { 300 }
',
      'visibility' => 256,
    ),
    'WORD_KANA' => 
    array (
      'value' => 300,
      'toString' => 'Constant [ public int WORD_KANA ] { 300 }
',
      'visibility' => 256,
    ),
    'WORD_KANA_LIMIT' => 
    array (
      'value' => 400,
      'toString' => 'Constant [ public int WORD_KANA_LIMIT ] { 400 }
',
      'visibility' => 256,
    ),
    'WORD_IDEO' => 
    array (
      'value' => 400,
      'toString' => 'Constant [ public int WORD_IDEO ] { 400 }
',
      'visibility' => 256,
    ),
    'WORD_IDEO_LIMIT' => 
    array (
      'value' => 500,
      'toString' => 'Constant [ public int WORD_IDEO_LIMIT ] { 500 }
',
      'visibility' => 256,
    ),
    'LINE_SOFT' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int LINE_SOFT ] { 0 }
',
      'visibility' => 256,
    ),
    'LINE_SOFT_LIMIT' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int LINE_SOFT_LIMIT ] { 100 }
',
      'visibility' => 256,
    ),
    'LINE_HARD' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int LINE_HARD ] { 100 }
',
      'visibility' => 256,
    ),
    'LINE_HARD_LIMIT' => 
    array (
      'value' => 200,
      'toString' => 'Constant [ public int LINE_HARD_LIMIT ] { 200 }
',
      'visibility' => 256,
    ),
    'SENTENCE_TERM' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int SENTENCE_TERM ] { 0 }
',
      'visibility' => 256,
    ),
    'SENTENCE_TERM_LIMIT' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int SENTENCE_TERM_LIMIT ] { 100 }
',
      'visibility' => 256,
    ),
    'SENTENCE_SEP' => 
    array (
      'value' => 100,
      'toString' => 'Constant [ public int SENTENCE_SEP ] { 100 }
',
      'visibility' => 256,
    ),
    'SENTENCE_SEP_LIMIT' => 
    array (
      'value' => 200,
      'toString' => 'Constant [ public int SENTENCE_SEP_LIMIT ] { 200 }
',
      'visibility' => 256,
    ),
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getLastCodePoint' => 
    array (
      'name' => 'getLastCodePoint',
      'class' => 'IntlCodePointBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'createWordInstance' => 
    array (
      'name' => 'createWordInstance',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'createLineInstance' => 
    array (
      'name' => 'createLineInstance',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'createCharacterInstance' => 
    array (
      'name' => 'createCharacterInstance',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'createSentenceInstance' => 
    array (
      'name' => 'createSentenceInstance',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'createTitleInstance' => 
    array (
      'name' => 'createTitleInstance',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale' => 
        array (
          'position' => 0,
          'name' => 'locale',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'createCodePointInstance' => 
    array (
      'name' => 'createCodePointInstance',
      'class' => 'IntlBreakIterator',
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
    'getText' => 
    array (
      'name' => 'getText',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setText' => 
    array (
      'name' => 'setText',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'text' => 
        array (
          'position' => 0,
          'name' => 'text',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'first' => 
    array (
      'name' => 'first',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'last' => 
    array (
      'name' => 'last',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'previous' => 
    array (
      'name' => 'previous',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'following' => 
    array (
      'name' => 'following',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'preceding' => 
    array (
      'name' => 'preceding',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isBoundary' => 
    array (
      'name' => 'isBoundary',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'locale_type' => 
        array (
          'position' => 0,
          'name' => 'locale_type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPartsIterator' => 
    array (
      'name' => 'getPartsIterator',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'key_type' => 
        array (
          'position' => 0,
          'name' => 'key_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
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
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> <iterateable> class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable ] {

  - Constants [19] {
    Constant [ public int DONE ] { -1 }
    Constant [ public int WORD_NONE ] { 0 }
    Constant [ public int WORD_NONE_LIMIT ] { 100 }
    Constant [ public int WORD_NUMBER ] { 100 }
    Constant [ public int WORD_NUMBER_LIMIT ] { 200 }
    Constant [ public int WORD_LETTER ] { 200 }
    Constant [ public int WORD_LETTER_LIMIT ] { 300 }
    Constant [ public int WORD_KANA ] { 300 }
    Constant [ public int WORD_KANA_LIMIT ] { 400 }
    Constant [ public int WORD_IDEO ] { 400 }
    Constant [ public int WORD_IDEO_LIMIT ] { 500 }
    Constant [ public int LINE_SOFT ] { 0 }
    Constant [ public int LINE_SOFT_LIMIT ] { 100 }
    Constant [ public int LINE_HARD ] { 100 }
    Constant [ public int LINE_HARD_LIMIT ] { 200 }
    Constant [ public int SENTENCE_TERM ] { 0 }
    Constant [ public int SENTENCE_TERM_LIMIT ] { 100 }
    Constant [ public int SENTENCE_SEP ] { 100 }
    Constant [ public int SENTENCE_SEP_LIMIT ] { 200 }
  }

  - Static properties [0] {
  }

  - Static methods [6] {
    Method [ <internal:intl, inherits IntlBreakIterator> static public method createWordInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createLineInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createCharacterInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createSentenceInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createTitleInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $locale ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createCodePointInstance ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [15] {
    Method [ <internal:intl> public method getLastCodePoint ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getText ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method setText ] {

      - Parameters [1] {
        Parameter #0 [ <required> $text ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method first ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method last ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method previous ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method next ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $offset ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method following ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method preceding ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method isBoundary ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> $locale_type ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getPartsIterator ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $key_type ]
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getErrorMessage ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
