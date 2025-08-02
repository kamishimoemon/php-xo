<?php

declare(strict_types=1);

namespace XO;

final class InMemorySpace implements Space
{
	private ?Mark $mark = null;

	public function mark (Mark $mark): void
	{
		$this->mark = $mark;
	}

	public function render (Position $pos): void
	{
		echo ' ';
		if ($this->mark !== null) {
			$this->mark->render($pos);
		}
		else {
			$pos->render();
		}
		echo ' ';
	}
}
