<?php

declare(strict_types=1);

namespace XO;

use ValueError;

use function fgets;
use function trim;
use function intval;

class ConsoleInput implements Input
{
	public function readPosition (): Position
	{
		try
		{
			echo "Ingrese posición: ";
			return Position::from(intval(trim(fgets(STDIN))));
		}
		catch (ValueError $err)
		{
			return $this->readPosition();
		}
	}
}
