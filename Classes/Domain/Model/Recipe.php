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
 * Recette
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * nom de la recette
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * difficulté
     *
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $difficulty = 0.0;

    /**
     * Temps de préparation (minutes)
     *
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $prepareTime = 0.0;

    /**
     * Temps de cuisson (minutes)
     *
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $cookingTime = 0.0;

    /**
     * Type de plat
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dishType = 0;

    /**
     * description
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * nombre de personne
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $nbPerson = 0;

    /**
     * illustrations
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $pictures = null;

    /**
     * Moyenne des notes
     *
     * @var float
     */
    protected $avgScore = 0.0;

    /**
     * ingredients
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\IngredientInRecipe>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $ingredients = null;

    /**
     * Theme
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Theme>
     */
    protected $themes = null;

    /**
     * ustensils
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Ustensil>
     */
    protected $ustensils = null;

    /**
     * origin
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Origin>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $origin = null;

    /**
     * Avis
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Review>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $reviews = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the difficulty
     *
     * @return float $difficulty
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Sets the difficulty
     *
     * @param float $difficulty
     * @return void
     */
    public function setDifficulty(float $difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * Returns the prepareTime
     *
     * @return float $prepareTime
     */
    public function getPrepareTime()
    {
        return $this->prepareTime;
    }

    /**
     * Sets the prepareTime
     *
     * @param float $prepareTime
     * @return void
     */
    public function setPrepareTime(float $prepareTime)
    {
        $this->prepareTime = $prepareTime;
    }

    /**
     * Returns the cookingTime
     *
     * @return float $cookingTime
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * Sets the cookingTime
     *
     * @param float $cookingTime
     * @return void
     */
    public function setCookingTime(float $cookingTime)
    {
        $this->cookingTime = $cookingTime;
    }

    /**
     * Returns the dishType
     *
     * @return int $dishType
     */
    public function getDishType()
    {
        return $this->dishType;
    }

    /**
     * Sets the dishType
     *
     * @param int $dishType
     * @return void
     */
    public function setDishType(int $dishType)
    {
        $this->dishType = $dishType;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the nbPerson
     *
     * @return int $nbPerson
     */
    public function getNbPerson()
    {
        return $this->nbPerson;
    }

    /**
     * Sets the nbPerson
     *
     * @param int $nbPerson
     * @return void
     */
    public function setNbPerson(int $nbPerson)
    {
        $this->nbPerson = $nbPerson;
    }

    /**
     * Returns the pictures
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets the pictures
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     * @return void
     */
    public function setPictures(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures)
    {
        $this->pictures = $pictures;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->ingredients = $this->ingredients ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->themes = $this->themes ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ustensils = $this->ustensils ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->origin = $this->origin ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = $this->reviews ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a IngredientInRecipe
     *
     * @param \Ntel\RecipesNtel\Domain\Model\IngredientInRecipe $ingredient
     * @return void
     */
    public function addIngredient(\Ntel\RecipesNtel\Domain\Model\IngredientInRecipe $ingredient)
    {
        $this->ingredients->attach($ingredient);
    }

    /**
     * Removes a IngredientInRecipe
     *
     * @param \Ntel\RecipesNtel\Domain\Model\IngredientInRecipe $ingredientToRemove The IngredientInRecipe to be removed
     * @return void
     */
    public function removeIngredient(\Ntel\RecipesNtel\Domain\Model\IngredientInRecipe $ingredientToRemove)
    {
        $this->ingredients->detach($ingredientToRemove);
    }

    /**
     * Returns the ingredients
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\IngredientInRecipe> $ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Sets the ingredients
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\IngredientInRecipe> $ingredients
     * @return void
     */
    public function setIngredients(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * Adds a Theme
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Theme $theme
     * @return void
     */
    public function addTheme(\Ntel\RecipesNtel\Domain\Model\Theme $theme)
    {
        $this->themes->attach($theme);
    }

    /**
     * Removes a Theme
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Theme $themeToRemove The Theme to be removed
     * @return void
     */
    public function removeTheme(\Ntel\RecipesNtel\Domain\Model\Theme $themeToRemove)
    {
        $this->themes->detach($themeToRemove);
    }

    /**
     * Returns the themes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Theme> $themes
     */
    public function getThemes()
    {
        return $this->themes;
    }

    /**
     * Sets the themes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Theme> $themes
     * @return void
     */
    public function setThemes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $themes)
    {
        $this->themes = $themes;
    }

    /**
     * Adds a Ustensil
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Ustensil $ustensil
     * @return void
     */
    public function addUstensil(\Ntel\RecipesNtel\Domain\Model\Ustensil $ustensil)
    {
        $this->ustensils->attach($ustensil);
    }

    /**
     * Removes a Ustensil
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Ustensil $ustensilToRemove The Ustensil to be removed
     * @return void
     */
    public function removeUstensil(\Ntel\RecipesNtel\Domain\Model\Ustensil $ustensilToRemove)
    {
        $this->ustensils->detach($ustensilToRemove);
    }

    /**
     * Returns the ustensils
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Ustensil> $ustensils
     */
    public function getUstensils()
    {
        return $this->ustensils;
    }

    /**
     * Sets the ustensils
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Ustensil> $ustensils
     * @return void
     */
    public function setUstensils(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ustensils)
    {
        $this->ustensils = $ustensils;
    }

    /**
     * Adds a Origin
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Origin $origin
     * @return void
     */
    public function addOrigin(\Ntel\RecipesNtel\Domain\Model\Origin $origin)
    {
        $this->origin->attach($origin);
    }

    /**
     * Removes a Origin
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Origin $originToRemove The Origin to be removed
     * @return void
     */
    public function removeOrigin(\Ntel\RecipesNtel\Domain\Model\Origin $originToRemove)
    {
        $this->origin->detach($originToRemove);
    }

    /**
     * Returns the origin
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Origin> $origin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets the origin
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Origin> $origin
     * @return void
     */
    public function setOrigin(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $origin)
    {
        $this->origin = $origin;
    }

    /**
     * Adds a Review
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Ntel\RecipesNtel\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Ntel\RecipesNtel\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Ntel\RecipesNtel\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Returns the avgScore
     *
     * @return float $avgScore
     */
    public function getAvgScore()
    {
        return $this->avgScore;
    }

    /**
     * Sets the avgScore
     *
     * @param float $avgScore
     * @return void
     */
    public function setAvgScore(float $avgScore)
    {
        $this->avgScore = $avgScore;
    }
}
