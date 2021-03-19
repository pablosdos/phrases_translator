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
    protected $phraseGerman = '';

    /**
     * The description of the product
     *
     * @var string
     **/
    protected $phraseSpanish = '';

    /**
     * The quantity in the store inventory
     *
     * @var string
     **/
    protected $phraseEnglish = '';

    /**
     * Phrase constructor.
     *
     * @param string $phraseGerman
     * @param string $phraseSpanish
     * @param string $phraseEnglish
     */
    public function __construct($phraseGerman = '', $phraseSpanish = '', $phraseEnglish = '')
    {
        $this->setPhraseGerman($phraseGerman);
        $this->setPhraseSpanish($phraseSpanish);
        $this->setPhraseEnglish($phraseEnglish);
    }

    /**
     * Sets the name of the product
     *
     * @param string $phraseGerman
     */
    public function setPhraseGerman(string $phraseGerman)
    {
        $this->phraseGerman = $phraseGerman;
    }

    /**
     * Gets the name of the product
     *
     * @return string
     */
    public function getPhraseGerman()
    {
        return $this->phraseGerman;
    }

    /**
     * Sets the description of the product
     *
     * @param string $phraseSpanish
     */
    public function setPhraseSpanish(string $phraseSpanish)
    {
        $this->phraseSpanish = $phraseSpanish;
    }

    /**
     * Gets the description of the product
     *
     * @return string
     */
    public function getPhraseSpanish()
    {
        return $this->phraseSpanish;
    }

    /**
     * Sets the quantity in the store inventory of the product
     *
     * @param string $phraseEnglish
     */
    public function setPhraseEnglish(string $phraseEnglish)
    {
        $this->phraseEnglish = $phraseEnglish;
    }

    /**
     * Gets the quantity in the store inventory of the product
     *
     * @return string
     */
    public function getPhraseEnglish()
    {
        return $this->phraseEnglish;
    }

}
