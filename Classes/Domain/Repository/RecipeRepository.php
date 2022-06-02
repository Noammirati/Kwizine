<?php

declare(strict_types=1);

namespace Ntel\RecipesNtel\Domain\Repository;


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
 * The repository for Recipes
 */
class RecipeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function filter(\Ntel\RecipesNtel\Domain\Model\RecipeFilter $filter){
        $query = $this->createQuery();
        $specifications = [];
        if($filter->getOrigin() != null){
            $specifications[] = $query->equals('origin', $filter->getOrigin());
        }

        if($filter->getDishType() != 0){
            $specifications[] = $query->equals('dishType', $filter->getDishType());
        }

        if(count($specifications) > 0){
            $query->matching($query->logicalAnd($specifications));
        }

        return $query->execute();
    }

    public function focus(){
        $query = $this->createQuery();

        //$query->matching($query->contains('themes', 1));
        // TODO limiter à trois éléments

        return $query->execute();
    }
}
