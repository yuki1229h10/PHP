<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../../oop_poker/Game.php');

class CardTest extends TestCase
{
  public function testStart()
  {
    $game = new Game();
    $result = $game->start();
    $this->assertSame(2, count($result));
  }
}
