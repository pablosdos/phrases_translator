<?php
/*use PablosDos\PhrasesTranslator\Domain\Model\Phrase;
$newObject = new Phrase;
krexx($newObject); */

/*use PablosDos\PhrasesTranslator\Domain\Model\Phrase;
$newObject = new Phrase;
krexx($newObject);*/

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PhrasesTranslator',
            'Pi1',
            [
                \PablosDos\PhrasesTranslator\Controller\PhrasesTranslatorController::class => 'list',
            ],
            // non-cacheable actions
            [
                \PablosDos\PhrasesTranslator\Controller\PhrasesTranslatorController::class => '',
            ]
        );
    }
);
