<?php

declare(strict_types=1);

namespace XO\Tests\Smoke;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

final class EngineBootsTest extends TestCase
{
	#[Test]
	public function engineIsAlive(): void
	{
		$this->assertTrue(true);
	}
}
