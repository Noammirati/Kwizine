<?php
declare(strict_types=1);

namespace Ntel\RecipesNtel\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Noa Ammirati <noa.ammirati@etu.u-bordeaux.fr>
 * @author Thomas Muller <thalgi.muller@gmail.com>
 * @author Lucas Poujardieu <lucas.poujardieu@etu.u-bordeaux.fr>
 * @author Eunice Teixeira <eunice.goncalves-teixeira@etu.u-bordeaux.fr>
 */
class RecipeTest extends UnitTestCase
{
    /**
     * @var \Ntel\RecipesNtel\Domain\Model\Recipe|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Ntel\RecipesNtel\Domain\Model\Recipe::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getDifficultyReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getDifficulty()
        );
    }

    /**
     * @test
     */
    public function setDifficultyForFloatSetsDifficulty(): void
    {
        $this->subject->setDifficulty(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('difficulty'));
    }

    /**
     * @test
     */
    public function getPrepareTimeReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getPrepareTime()
        );
    }

    /**
     * @test
     */
    public function setPrepareTimeForFloatSetsPrepareTime(): void
    {
        $this->subject->setPrepareTime(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('prepareTime'));
    }

    /**
     * @test
     */
    public function getCookingTimeReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getCookingTime()
        );
    }

    /**
     * @test
     */
    public function setCookingTimeForFloatSetsCookingTime(): void
    {
        $this->subject->setCookingTime(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('cookingTime'));
    }

    /**
     * @test
     */
    public function getDishTypeReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getDishType()
        );
    }

    /**
     * @test
     */
    public function setDishTypeForIntSetsDishType(): void
    {
        $this->subject->setDishType(12);

        self::assertEquals(12, $this->subject->_get('dishType'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getNbPersonReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getNbPerson()
        );
    }

    /**
     * @test
     */
    public function setNbPersonForIntSetsNbPerson(): void
    {
        $this->subject->setNbPerson(12);

        self::assertEquals(12, $this->subject->_get('nbPerson'));
    }

    /**
     * @test
     */
    public function getPicturesReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getPictures()
        );
    }

    /**
     * @test
     */
    public function setPicturesForFileReferenceSetsPictures(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPictures($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('pictures'));
    }

    /**
     * @test
     */
    public function getAvgScoreReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getAvgScore()
        );
    }

    /**
     * @test
     */
    public function setAvgScoreForFloatSetsAvgScore(): void
    {
        $this->subject->setAvgScore(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('avgScore'));
    }

    /**
     * @test
     */
    public function getIngredientsReturnsInitialValueForIngredientInRecipe(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getIngredients()
        );
    }

    /**
     * @test
     */
    public function setIngredientsForObjectStorageContainingIngredientInRecipeSetsIngredients(): void
    {
        $ingredient = new \Ntel\RecipesNtel\Domain\Model\IngredientInRecipe();
        $objectStorageHoldingExactlyOneIngredients = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneIngredients->attach($ingredient);
        $this->subject->setIngredients($objectStorageHoldingExactlyOneIngredients);

        self::assertEquals($objectStorageHoldingExactlyOneIngredients, $this->subject->_get('ingredients'));
    }

    /**
     * @test
     */
    public function addIngredientToObjectStorageHoldingIngredients(): void
    {
        $ingredient = new \Ntel\RecipesNtel\Domain\Model\IngredientInRecipe();
        $ingredientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ingredientsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ingredient));
        $this->subject->_set('ingredients', $ingredientsObjectStorageMock);

        $this->subject->addIngredient($ingredient);
    }

    /**
     * @test
     */
    public function removeIngredientFromObjectStorageHoldingIngredients(): void
    {
        $ingredient = new \Ntel\RecipesNtel\Domain\Model\IngredientInRecipe();
        $ingredientsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ingredientsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ingredient));
        $this->subject->_set('ingredients', $ingredientsObjectStorageMock);

        $this->subject->removeIngredient($ingredient);
    }

    /**
     * @test
     */
    public function getThemesReturnsInitialValueForTheme(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getThemes()
        );
    }

    /**
     * @test
     */
    public function setThemesForObjectStorageContainingThemeSetsThemes(): void
    {
        $theme = new \Ntel\RecipesNtel\Domain\Model\Theme();
        $objectStorageHoldingExactlyOneThemes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneThemes->attach($theme);
        $this->subject->setThemes($objectStorageHoldingExactlyOneThemes);

        self::assertEquals($objectStorageHoldingExactlyOneThemes, $this->subject->_get('themes'));
    }

    /**
     * @test
     */
    public function addThemeToObjectStorageHoldingThemes(): void
    {
        $theme = new \Ntel\RecipesNtel\Domain\Model\Theme();
        $themesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $themesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($theme));
        $this->subject->_set('themes', $themesObjectStorageMock);

        $this->subject->addTheme($theme);
    }

    /**
     * @test
     */
    public function removeThemeFromObjectStorageHoldingThemes(): void
    {
        $theme = new \Ntel\RecipesNtel\Domain\Model\Theme();
        $themesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $themesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($theme));
        $this->subject->_set('themes', $themesObjectStorageMock);

        $this->subject->removeTheme($theme);
    }

    /**
     * @test
     */
    public function getUstensilsReturnsInitialValueForUstensil(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUstensils()
        );
    }

    /**
     * @test
     */
    public function setUstensilsForObjectStorageContainingUstensilSetsUstensils(): void
    {
        $ustensil = new \Ntel\RecipesNtel\Domain\Model\Ustensil();
        $objectStorageHoldingExactlyOneUstensils = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUstensils->attach($ustensil);
        $this->subject->setUstensils($objectStorageHoldingExactlyOneUstensils);

        self::assertEquals($objectStorageHoldingExactlyOneUstensils, $this->subject->_get('ustensils'));
    }

    /**
     * @test
     */
    public function addUstensilToObjectStorageHoldingUstensils(): void
    {
        $ustensil = new \Ntel\RecipesNtel\Domain\Model\Ustensil();
        $ustensilsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ustensil));
        $this->subject->_set('ustensils', $ustensilsObjectStorageMock);

        $this->subject->addUstensil($ustensil);
    }

    /**
     * @test
     */
    public function removeUstensilFromObjectStorageHoldingUstensils(): void
    {
        $ustensil = new \Ntel\RecipesNtel\Domain\Model\Ustensil();
        $ustensilsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ustensil));
        $this->subject->_set('ustensils', $ustensilsObjectStorageMock);

        $this->subject->removeUstensil($ustensil);
    }

    /**
     * @test
     */
    public function getOriginReturnsInitialValueForOrigin(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOrigin()
        );
    }

    /**
     * @test
     */
    public function setOriginForObjectStorageContainingOriginSetsOrigin(): void
    {
        $origin = new \Ntel\RecipesNtel\Domain\Model\Origin();
        $objectStorageHoldingExactlyOneOrigin = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOrigin->attach($origin);
        $this->subject->setOrigin($objectStorageHoldingExactlyOneOrigin);

        self::assertEquals($objectStorageHoldingExactlyOneOrigin, $this->subject->_get('origin'));
    }

    /**
     * @test
     */
    public function addOriginToObjectStorageHoldingOrigin(): void
    {
        $origin = new \Ntel\RecipesNtel\Domain\Model\Origin();
        $originObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $originObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($origin));
        $this->subject->_set('origin', $originObjectStorageMock);

        $this->subject->addOrigin($origin);
    }

    /**
     * @test
     */
    public function removeOriginFromObjectStorageHoldingOrigin(): void
    {
        $origin = new \Ntel\RecipesNtel\Domain\Model\Origin();
        $originObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $originObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($origin));
        $this->subject->_set('origin', $originObjectStorageMock);

        $this->subject->removeOrigin($origin);
    }

    /**
     * @test
     */
    public function getReviewsReturnsInitialValueForReview(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReviews()
        );
    }

    /**
     * @test
     */
    public function setReviewsForObjectStorageContainingReviewSetsReviews(): void
    {
        $review = new \Ntel\RecipesNtel\Domain\Model\Review();
        $objectStorageHoldingExactlyOneReviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReviews->attach($review);
        $this->subject->setReviews($objectStorageHoldingExactlyOneReviews);

        self::assertEquals($objectStorageHoldingExactlyOneReviews, $this->subject->_get('reviews'));
    }

    /**
     * @test
     */
    public function addReviewToObjectStorageHoldingReviews(): void
    {
        $review = new \Ntel\RecipesNtel\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($review));
        $this->subject->_set('reviews', $reviewsObjectStorageMock);

        $this->subject->addReview($review);
    }

    /**
     * @test
     */
    public function removeReviewFromObjectStorageHoldingReviews(): void
    {
        $review = new \Ntel\RecipesNtel\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($review));
        $this->subject->_set('reviews', $reviewsObjectStorageMock);

        $this->subject->removeReview($review);
    }
}
