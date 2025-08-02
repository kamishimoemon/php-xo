<?php

declare(strict_types=1);

namespace XO;

class Grid
{
	private array $spaces = [];

	public function __construct ()
	{
		$this->spaces[Position::ONE->value] = new InMemorySpace();
		$this->spaces[Position::TWO->value] = new InMemorySpace();
		$this->spaces[Position::THREE->value] = new InMemorySpace();
		$this->spaces[Position::FOUR->value] = new InMemorySpace();
		$this->spaces[Position::FIVE->value] = new InMemorySpace();
		$this->spaces[Position::SIX->value] = new InMemorySpace();
		$this->spaces[Position::SEVEN->value] = new InMemorySpace();
		$this->spaces[Position::EIGHT->value] = new InMemorySpace();
		$this->spaces[Position::NINE->value] = new InMemorySpace();
	}

	public function render (): void
	{
		$this->spaces[Position::ONE->value]->render(Position::ONE);
		echo '|';
		$this->spaces[Position::TWO->value]->render(Position::TWO);
		echo '|';
		$this->spaces[Position::THREE->value]->render(Position::THREE);
		echo PHP_EOL;

		echo '-----------';
		echo PHP_EOL;

		$this->spaces[Position::FOUR->value]->render(Position::FOUR);
		echo '|';
		$this->spaces[Position::FIVE->value]->render(Position::FIVE);
		echo '|';
		$this->spaces[Position::SIX->value]->render(Position::SIX);
		echo PHP_EOL;

		echo '-----------';
		echo PHP_EOL;

		$this->spaces[Position::SEVEN->value]->render(Position::SEVEN);
		echo '|';
		$this->spaces[Position::EIGHT->value]->render(Position::EIGHT);
		echo '|';
		$this->spaces[Position::NINE->value]->render(Position::NINE);
		echo PHP_EOL;
	}
}