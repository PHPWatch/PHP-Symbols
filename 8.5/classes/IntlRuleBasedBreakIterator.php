<?php

return array (
  'type' => 'class',
  'name' => 'IntlRuleBasedBreakIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlRuleBasedBreakIterator',
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
        'name' => 'IntlRuleBasedBreakIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.intlrulebasedbreakiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
    1 => 'IteratorAggregate',
  ),
  'constants' => 
  array (
    'DONE' => -1,
    'WORD_NONE' => 0,
    'WORD_NONE_LIMIT' => 100,
    'WORD_NUMBER' => 100,
    'WORD_NUMBER_LIMIT' => 200,
    'WORD_LETTER' => 200,
    'WORD_LETTER_LIMIT' => 300,
    'WORD_KANA' => 300,
    'WORD_KANA_LIMIT' => 400,
    'WORD_IDEO' => 400,
    'WORD_IDEO_LIMIT' => 500,
    'LINE_SOFT' => 0,
    'LINE_SOFT_LIMIT' => 100,
    'LINE_HARD' => 100,
    'LINE_HARD_LIMIT' => 200,
    'SENTENCE_TERM' => 0,
    'SENTENCE_TERM_LIMIT' => 100,
    'SENTENCE_SEP' => 100,
    'SENTENCE_SEP_LIMIT' => 200,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'IntlRuleBasedBreakIterator',
      'parameters' => 
      array (
        'rules' => 
        array (
          'position' => 0,
          'name' => 'rules',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'compiled' => 
        array (
          'position' => 1,
          'name' => 'compiled',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBinaryRules' => 
    array (
      'name' => 'getBinaryRules',
      'class' => 'IntlRuleBasedBreakIterator',
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
    'getRules' => 
    array (
      'name' => 'getRules',
      'class' => 'IntlRuleBasedBreakIterator',
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
    'getRuleStatus' => 
    array (
      'name' => 'getRuleStatus',
      'class' => 'IntlRuleBasedBreakIterator',
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
    'getRuleStatusVec' => 
    array (
      'name' => 'getRuleStatusVec',
      'class' => 'IntlRuleBasedBreakIterator',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlPartsIterator::KEY_SEQUENTIAL',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'IntlBreakIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
      'has_return_type' => true,
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
  'toString' => 'Class [ <internal:intl> <iterateable> class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable, IteratorAggregate ] {

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
    Method [ <internal:intl, inherits IntlBreakIterator> static public method createCharacterInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ ?IntlBreakIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createCodePointInstance ] {

      - Parameters [0] {
      }
      - Tentative return [ IntlCodePointBreakIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createLineInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ ?IntlBreakIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createSentenceInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ ?IntlBreakIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createTitleInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ ?IntlBreakIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> static public method createWordInstance ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $locale = null ]
      }
      - Tentative return [ ?IntlBreakIterator ]
    }
  }

  - Properties [0] {
  }

  - Methods [20] {
    Method [ <internal:intl, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $rules ]
        Parameter #1 [ <optional> bool $compiled = false ]
      }
    }

    Method [ <internal:intl> public method getBinaryRules ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getRules ] {

      - Parameters [0] {
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> public method getRuleStatus ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> public method getRuleStatusVec ] {

      - Parameters [0] {
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method first ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method following ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getErrorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getErrorMessage ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getLocale ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $type ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getPartsIterator ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $type = IntlPartsIterator::KEY_SEQUENTIAL ]
      }
      - Tentative return [ IntlPartsIterator ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method getText ] {

      - Parameters [0] {
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method isBoundary ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method last ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method next ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $offset = null ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method preceding ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method previous ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator> public method setText ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $text ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl, inherits IntlBreakIterator, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
);
