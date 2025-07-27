<?php

declare(strict_types=1);

namespace XO;

final class InMemorySpace implements Space
{
	public function mark (Mark $mark, SpaceListener $listener): void
	{
		$listener->spaceMarked($this, $mark);
	}
}