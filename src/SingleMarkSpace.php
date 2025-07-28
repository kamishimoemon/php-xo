<?php

declare(strict_types=1);

namespace XO;

final class SingleMarkSpace implements Space
{
	private Space $space;
	private bool $marked = false;

	public function __construct (Space $space)
	{
		$this->space = $space;
	}

	public function mark (Mark $mark, SpaceListener $listener): void
	{
		if ($this->marked) {
			throw new SpaceAlreadyMarked();
		}

		$listener->spaceMarked($this, $mark);

		$this->marked = true;
	}
}
