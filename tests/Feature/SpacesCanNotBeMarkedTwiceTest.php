<?php

declare(strict_types=1);

namespace XO\Tests\Feature;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProvider;

use XO\Mark;
use XO\Space;
use XO\SpaceListener;
use XO\SingleMarkSpace;
use XO\SpaceAlreadyMarked;
use XO\InMemorySpace;

final class SpacesCanNotBeMarkedTwiceTest extends TestCase
{
	#[Test]
	#[DataProvider("spacesAndMarks")]
	public function spaceCanBeMarkedOnce (Space $space, Mark $mark): void
	{
		$space = new SingleMarkSpace($space);
		$space->mark($mark, $this->createStub(SpaceListener::class));

		$this->expectNotToPerformAssertions();
	}

	#[Test]
	#[DataProvider("spacesAndMarks")]
	public function spaceCanNotBeMarkedWithTheSameMarkTwice (Space $space, Mark $mark): void
	{
		$space = new SingleMarkSpace($space);
		$space->mark($mark, $this->createStub(SpaceListener::class));

		$this->expectException(SpaceAlreadyMarked::class);
		$space->mark($mark, $this->createStub(SpaceListener::class));
	}

	#[Test]
	#[DataProvider("spacesAndMarks")]
	public function spaceCanNotBeMarkedWithOppositeMarksTwice (Space $space, Mark $mark): void
	{
		$space = new SingleMarkSpace($space);
		$space->mark($mark, $this->createStub(SpaceListener::class));

		$this->expectException(SpaceAlreadyMarked::class);
		$space->mark($mark->opposite(), $this->createStub(SpaceListener::class));
	}

	public static final function spacesAndMarks (): array
	{
		$values = [];

		foreach (Mark::cases() as $mark) {
			$values["InMemorySpace({$mark->name})"] = [new InMemorySpace(), $mark];
		}

		return $values;
	}
}
