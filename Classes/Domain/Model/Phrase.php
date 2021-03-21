<?php

namespace PablosDos\PhrasesTranslator\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Phrase extends AbstractEntity
{

    /**
     * The name of the product
     *
     * @var string
     **/
    protected $phrasegerman = '';

    /**
     * The description of the product
     *
     * @var string
     **/
    protected $phrasespanish = '';

    /**
     * The quantity in the store inventory
     *
     * @var string
     **/
    protected $phraseenglish = '';

    /**
     * Phrase constructor.
     *
     * @param string $phrasegerman
     * @param string $phrasespanish
     * @param string $phraseenglish
     */
    public function __construct($phrasegerman = '', $phrasespanish = '', $phraseenglish = '')
    {
        $this->setPhraseGerman($phrasegerman);
        $this->setPhraseSpanish($phrasespanish);
        $this->setPhraseEnglish($phraseenglish);
    }

    /**
     * Sets the name of the product
     *
     * @param string $phrasegerman
     */
    public function setPhraseGerman(string $phrasegerman)
    {
        $this->phrasegerman = $phrasegerman;
    }

    /**
     * Gets the name of the product
     *
     * @return string
     */
    public function getPhraseGerman()
    {
        /* krexx($this->phrasegerman); */
        return $this->phrasegerman;
    }

    /**
     * Sets the description of the product
     *
     * @param string $phrasespanish
     */
    public function setPhraseSpanish(string $phrasespanish)
    {
        $this->phrasespanish = $phrasespanish;
    }

    /**
     * Gets the description of the product
     *
     * @return string
     */
    public function getPhraseSpanish()
    {
        return $this->phrasespanish;
    }

    /**
     * Sets the quantity in the store inventory of the product
     *
     * @param string $phraseenglish
     */
    public function setPhraseEnglish(string $phraseenglish)
    {
        $this->phraseenglish = $phraseenglish;
    }

    /**
     * Gets the quantity in the store inventory of the product
     *
     * @return string
     */
    public function getPhraseEnglish()
    {
        return $this->phraseenglish;
    }

}
