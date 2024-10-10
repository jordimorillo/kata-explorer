<?php

declare(strict_types=1);

namespace Tests\Entity;

use KataExplorer\Entity\Explorer;
use PHPUnit\Framework\TestCase;

class ExplorerTest extends TestCase
{
    private Explorer $explorer;

    public function setup(): void
    {
        $this->explorer = new Explorer();
    }

    public function testCanInstantiate(): void
    {
        $this->assertInstanceOf(Explorer::class, $this->explorer);
    }

    public function testCanMoveNorth(): void
    {
        $this->explorer->goNorth();
        self::assertEquals(1, $this->explorer->getPositionY());
    }

    public function testCanMoveSouth(): void
    {
        $this->explorer->goSouth();
        self::assertEquals(-1, $this->explorer->getPositionY());
    }

    public function testCanMoveEast(): void
    {
        $this->explorer->goEast();
        self::assertEquals(1, $this->explorer->getPositionX());
    }

    public function testCanMoveWest(): void
    {
        $this->explorer->goWest();
        self::assertEquals(-1, $this->explorer->getPositionX());
    }
}