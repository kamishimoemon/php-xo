<?php

declare(strict_types=1);

namespace XO\Tests\Feature;

use XO\Mark;
use XO\Space;
use XO\SpaceListener;

trait SpaceNotifiesWhenMarked
{
	abstract protected function newSpace (): Space;

	public function test_space_notifies_listener_when_marked (): void
	{
		$listener = $this->createMock(SpaceListener::class);
		$space = $this->newSpace();

		$listener
			->expects($this->once())
			->method('spaceMarked')
			->with($space, $this->equalTo(Mark::X));

		$space->mark(Mark::X, $listener);
	}
}
