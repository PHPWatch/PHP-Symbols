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
        'name' => 'IntlRuleBasedBreakIterator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.intlrulebasedbreakiterator.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'DONE' => 
    array (
      'value' => -1,
    ),
    'WORD_NONE' => 
    array (
      'value' => 0,
    ),
    'WORD_NONE_LIMIT' => 
    array (
      'value' => 100,
    ),
    'WORD_NUMBER' => 
    array (
      'value' => 100,
    ),
    'WORD_NUMBER_LIMIT' => 
    array (
      'value' => 200,
    ),
    'WORD_LETTER' => 
    array (
      'value' => 200,
    ),
    'WORD_LETTER_LIMIT' => 
    array (
      'value' => 300,
    ),
    'WORD_KANA' => 
    array (
      'value' => 300,
    ),
    'WORD_KANA_LIMIT' => 
    array (
      'value' => 400,
    ),
    'WORD_IDEO' => 
    array (
      'value' => 400,
    ),
    'WORD_IDEO_LIMIT' => 
    array (
      'value' => 500,
    ),
    'LINE_SOFT' => 
    array (
      'value' => 0,
    ),
    'LINE_SOFT_LIMIT' => 
    array (
      'value' => 100,
    ),
    'LINE_HARD' => 
    array (
      'value' => 100,
    ),
    'LINE_HARD_LIMIT' => 
    array (
      'value' => 200,
    ),
    'SENTENCE_TERM' => 
    array (
      'value' => 0,
    ),
    'SENTENCE_TERM_LIMIT' => 
    array (
      'value' => 100,
    ),
    'SENTENCE_SEP' => 
    array (
      'value' => 100,
    ),
    'SENTENCE_SEP_LIMIT' => 
    array (
      'value' => 200,
    ),
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'areCompiled' => 
        array (
          'position' => 1,
          'name' => 'areCompiled',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'intl',
  'toString' => 'Class [ <internal:intl> <iterateable> class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable ] {

  - Constants [19] {
    Constant [ integer DONE ] { -1 }
    Constant [ integer WORD_NONE ] { 0 }
    Constant [ integer WORD_NONE_LIMIT ] { 100 }
    Constant [ integer WORD_NUMBER ] { 100 }
    Constant [ integer WORD_NUMBER_LIMIT ] { 200 }
    Constant [ integer WORD_LETTER ] { 200 }
    Constant [ integer WORD_LETTER_LIMIT ] { 300 }
    Constant [ integer WORD_KANA ] { 300 }
    Constant [ integer WORD_KANA_LIMIT ] { 400 }
    Constant [ integer WORD_IDEO ] { 400 }
    Constant [ integer WORD_IDEO_LIMIT ] { 500 }
    Constant [ integer LINE_SOFT ] { 0 }
    Constant [ integer LINE_SOFT_LIMIT ] { 100 }
    Constant [ integer LINE_HARD ] { 100 }
    Constant [ integer LINE_HARD_LIMIT ] { 200 }
    Constant [ integer SENTENCE_TERM ] { 0 }
    Constant [ integer SENTENCE_TERM_LIMIT ] { 100 }
    Constant [ integer SENTENCE_SEP ] { 100 }
    Constant [ integer SENTENCE_SEP_LIMIT ] { 200 }
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

  - Methods [19] {
    Method [ <internal:intl, overwrites IntlBreakIterator, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $rules ]
        Parameter #1 [ <optional> $areCompiled ]
      }
    }

    Method [ <internal:intl> public method getRules ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getRuleStatus ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getRuleStatusVec ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:intl> public method getBinaryRules ] {

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
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
