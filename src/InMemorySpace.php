<?php

declare(strict_types=1);

namespace XO;

final class InMemorySpace implements Space
{
	private ?Mark $mark = null;

	public function mark (Mark $mark, SpaceListener $listener): void
	{
		$this->mark = $mark;
		$listener->spaceMarked($this, $mark);
	}

	public function render (Position $pos): void
	{
		echo ' ';
		if ($this->mark !== null) {
			$this->mark->render();
		}
		else {
			$pos->render();
		}
		echo ' ';
	}
}
