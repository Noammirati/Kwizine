<?php
declare(strict_types=1);

namespace Ntel\RecipesNtel\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Noa Ammirati <noa.ammirati@etu.u-bordeaux.fr>
 * @author Thomas Muller <thalgi.muller@gmail.com>
 * @author Lucas Poujardieu <lucas.poujardieu@etu.u-bordeaux.fr>
 * @author Eunice Teixeira <eunice.goncalves-teixeira@etu.u-bordeaux.fr>
 */
class ReviewControllerTest extends UnitTestCase
{
    /**
     * @var \Ntel\RecipesNtel\Controller\ReviewController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Ntel\RecipesNtel\Controller\ReviewController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenReviewToReviewRepository(): void
    {
        $review = new \Ntel\RecipesNtel\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\Ntel\RecipesNtel\Domain\Repository\ReviewRepository::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->subject->_set('reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
