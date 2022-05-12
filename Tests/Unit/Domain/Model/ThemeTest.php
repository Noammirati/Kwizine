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
class ThemeTest extends UnitTestCase
{
    /**
     * @var \Ntel\RecipesNtel\Domain\Model\Theme|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Ntel\RecipesNtel\Domain\Model\Theme::class,
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
}
