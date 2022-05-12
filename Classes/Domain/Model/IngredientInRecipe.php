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
 * IngredientInRecipe
 */
class IngredientInRecipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * quantité
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = '';

    /**
     * ingrédient
     *
     * @var \Ntel\RecipesNtel\Domain\Model\Ingredient
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ingredient = null;

    /**
     * Returns the quantity
     *
     * @return string $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param string $quantity
     * @return void
     */
    public function setQuantity(string $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns the ingredient
     *
     * @return \Ntel\RecipesNtel\Domain\Model\Ingredient $ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets the ingredient
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function setIngredient(\Ntel\RecipesNtel\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
