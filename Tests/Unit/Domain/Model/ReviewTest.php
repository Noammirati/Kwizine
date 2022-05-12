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
class ReviewTest extends UnitTestCase
{
    /**
     * @var \Ntel\RecipesNtel\Domain\Model\Review|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Ntel\RecipesNtel\Domain\Model\Review::class,
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
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getContentReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getContent()
        );
    }

    /**
     * @test
     */
    public function setContentForStringSetsContent(): void
    {
        $this->subject->setContent('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('content'));
    }

    /**
     * @test
     */
    public function getScoreReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getScore()
        );
    }

    /**
     * @test
     */
    public function setScoreForIntSetsScore(): void
    {
        $this->subject->setScore(12);

        self::assertEquals(12, $this->subject->_get('score'));
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor(): void
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('author'));
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('date'));
    }
}
