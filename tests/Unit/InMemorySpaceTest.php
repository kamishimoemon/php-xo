<?php

declare(strict_types=1);

namespace XO\Tests\Unit;

use PHPUnit\Framework\TestCase;
use XO\Tests\Feature\SpaceNotifiesWhenMarked;

use XO\Space;
use XO\InMemorySpace;

final class InMemorySpaceTest extends TestCase
{
	use SpaceNotifiesWhenMarked;

	protected function newSpace(): Space
	{
		return new InMemorySpace();
	}
}
