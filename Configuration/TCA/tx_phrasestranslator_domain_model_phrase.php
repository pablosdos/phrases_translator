<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:phrases_translator/Resources/Private/Language/locallang_db.xlf:tx_phrasestranslator_domain_model_phrase',
        'label' => 'phraseGerman',
        'iconfile' => 'EXT:phrases_translator/Resources/Public/Icons/Phrase.svg'
    ],
    'columns' => [
        'phraseGerman' => [
            'label' => 'LLL:EXT:phrases_translator/Resources/Private/Language/locallang_db.xlf:tx_phrasestranslator_domain_model_phrase.item_phraseGerman',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'phraseSpanish' => [
            'label' => 'LLL:EXT:phrases_translator/Resources/Private/Language/locallang_db.xlf:tx_phrasestranslator_domain_model_phrase.item_phraseSpanish',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'phraseEnglish' => [
            'label' => 'LLL:EXT:phrases_translator/Resources/Private/Language/locallang_db.xlf:tx_phrasestranslator_domain_model_phrase.item_phraseEnglish',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'phraseGerman, phraseSpanish, phraseEnglish']
    ]
];
