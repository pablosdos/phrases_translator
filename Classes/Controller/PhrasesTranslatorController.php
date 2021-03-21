<?php

namespace PablosDos\PhrasesTranslator\Controller;

use PablosDos\PhrasesTranslator\Domain\Repository\PhraseRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class PhrasesTranslatorController
 *
 * @package PablosDos\PhrasesTranslator\Controller
 */
class PhrasesTranslatorController extends ActionController
{

    /**
     * @var PhraseRepository
     */
    private $phraseRepository;

    /**
     * Inject the product repository
     *
     * @param \PablosDos\PhrasesTranslator\Domain\Repository\PhraseRepository $phraseRepository
     */
    public function injectPhraseRepository(PhraseRepository $phraseRepository)
    {
        $this->phraseRepository = $phraseRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        /* krexx($this->phraseRepository->findAll()); */
        $phrases = $this->phraseRepository->findAll();
        /* krexx($phrases); */
        $this->view->assign('phrases', $phrases);
    }
}
