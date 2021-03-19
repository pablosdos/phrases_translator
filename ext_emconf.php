<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Phrases Translator',
    'description' => 'Translate phrase in 3 languages.',
    'category' => 'plugin',
    'author' => 'Paul Kluge',
    'author_company' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '10.4.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'PablosDos\\PhrasesTranslator\\' => 'Classes'
        ]
    ],
];
