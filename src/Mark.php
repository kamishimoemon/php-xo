<?php

declare(strict_types=1);

namespace XO;

enum Mark
{
	case X;
	case O;

	public function opposite (): Mark
	{
		return match ($this) {
			self::X => Mark::O,
			self::O => Mark::X,
		};
	}
}
