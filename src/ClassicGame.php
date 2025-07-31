<?php

declare(strict_types=1);

namespace XO;

class ClassicGame
{
	private HumanPlayer $playerOne;
	private AIPlayer $playerTwo;
	private ConsoleOutput $output;

	public function __construct (HumanPlayer $playerOne, AIPlayer $playerTwo, ConsoleOutput $output)
	{
		$this->playerOne = $playerOne;
		$this->playerTwo = $playerTwo;
		$this->output = $output;
	}

	public function play (): void
	{
	}
}
