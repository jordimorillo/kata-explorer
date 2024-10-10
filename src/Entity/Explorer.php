<?php

declare(strict_types=1);

namespace KataExplorer\Entity;

class Explorer
{
    public int $positionX = 0;
    public int $positionY = 0;

    public function goNorth(): void
    {
        $this->positionY++;
    }

    public function goSouth(): void
    {
        $this->positionY--;
    }

    public function goEast(): void
    {
        $this->positionX++;
    }

    public function goWest(): void
    {
        $this->positionX--;
    }

    public function getPositionY(): int
    {
        return $this->positionY;
    }

    public function getPositionX(): int
    {
        return $this->positionX;
    }
}