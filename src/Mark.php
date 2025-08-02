<?php

declare(strict_types=1);

namespace XO;

interface Mark
{
	function opposite (): Mark;
	function render (Position $pos): void;
}
