<?php

declare(strict_types=1);

namespace Ntel\RecipesNtel\Domain\Model;


/**
 * This file is part of the "recipes-ntel" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Noa Ammirati <noa.ammirati@etu.u-bordeaux.fr>
 *          Thomas Muller <thalgi.muller@gmail.com>
 *          Lucas Poujardieu <lucas.poujardieu@etu.u-bordeaux.fr>
 *          Eunice Teixeira <eunice.goncalves-teixeira@etu.u-bordeaux.fr>
 */

/**
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Titre
     *
     * @var string
     */
    protected $title = '';

    /**
     * Contenu
     *
     * @var string
     */
    protected $content = '';

    /**
     * Note
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $score = 0;

    /**
     * Auteur
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $author = '';

    /**
     * Date de publication
     *
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $date = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     *
     * @param string $content
     * @return void
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * Returns the score
     *
     * @return int $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets the score
     *
     * @param int $score
     * @return void
     */
    public function setScore(int $score)
    {
        $this->score = $score;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
