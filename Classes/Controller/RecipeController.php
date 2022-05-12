<?php

declare(strict_types=1);

namespace Ntel\RecipesNtel\Controller;


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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * recipeRepository
     *
     * @var \Ntel\RecipesNtel\Domain\Repository\RecipeRepository
     */
    protected $recipeRepository = null;

    /**
     * @param \Ntel\RecipesNtel\Domain\Repository\RecipeRepository $recipeRepository
     */
    public function injectRecipeRepository(\Ntel\RecipesNtel\Domain\Repository\RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Recipe $recipe
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Ntel\RecipesNtel\Domain\Model\Recipe $recipe): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('recipe', $recipe);
        return $this->htmlResponse();
    }

    /**
     * action search
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function searchAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action focus
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function focusAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
