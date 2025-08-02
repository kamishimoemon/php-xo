<?php

declare(strict_types=1);

namespace XO;

class Grid
{
	private array $spaces = [];

	public function __construct ()
	{
		$this->spaces[1] = new InMemorySpace();
		$this->spaces[2] = new InMemorySpace();
		$this->spaces[3] = new InMemorySpace();
		$this->spaces[4] = new InMemorySpace();
		$this->spaces[5] = new InMemorySpace();
		$this->spaces[6] = new InMemorySpace();
		$this->spaces[7] = new InMemorySpace();
		$this->spaces[8] = new InMemorySpace();
		$this->spaces[9] = new InMemorySpace();
	}

	public function render (): void
	{
		$this->spaces[1]->render();
		echo '|';
		$this->spaces[2]->render();
		echo '|';
		$this->spaces[3]->render();
		echo PHP_EOL;

		echo '-----------';
		echo PHP_EOL;

		$this->spaces[4]->render();
		echo '|';
		$this->spaces[5]->render();
		echo '|';
		$this->spaces[6]->render();
		echo PHP_EOL;

		echo '-----------';
		echo PHP_EOL;

		$this->spaces[7]->render();
		echo '|';
		$this->spaces[8]->render();
		echo '|';
		$this->spaces[9]->render();
		echo PHP_EOL;
	}
}