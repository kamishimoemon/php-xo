<?php

declare(strict_types=1);

namespace XO;

enum XO implements Mark
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

	public function render (Position $pos): void
	{
		echo match ($this) {
			self::X => 'X',
			self::O => 'O',
		};
	}
}
