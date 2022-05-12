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
 * ReviewController
 */
class ReviewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * reviewRepository
     *
     * @var \Ntel\RecipesNtel\Domain\Repository\ReviewRepository
     */
    protected $reviewRepository = null;

    /**
     * @param \Ntel\RecipesNtel\Domain\Repository\ReviewRepository $reviewRepository
     */
    public function injectReviewRepository(\Ntel\RecipesNtel\Domain\Repository\ReviewRepository $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Ntel\RecipesNtel\Domain\Model\Review $newReview
     */
    public function createAction(\Ntel\RecipesNtel\Domain\Model\Review $newReview)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->reviewRepository->add($newReview);
        $this->redirect('list');
    }
}
