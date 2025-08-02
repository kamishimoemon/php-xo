<?php

declare(strict_types=1);

namespace XO;

class ClassicGame
{
	private HumanPlayer $playerOne;
	private AIPlayer $playerTwo;
	private Grid $grid;

	public function __construct (HumanPlayer $playerOne, AIPlayer $playerTwo)
	{
		$this->playerOne = $playerOne;
		$this->playerTwo = $playerTwo;
		$this->grid = new Grid();
	}

	public function play (): void
	{
		$this->grid->render();
	}
}
