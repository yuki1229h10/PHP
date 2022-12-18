<?php

require_once('Player.php');

class Game
{
  function __construct(private string $name)
  {
  }

  function start()
  {
    // プレイヤーを登録する
    $player = new Player($this->name);
    // プレイヤーがカードを引く
    $cards = $player->drawCards();
    // 次回、テスト開始から
  }
}
