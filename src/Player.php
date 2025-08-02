<?php

declare(strict_types=1);

namespace XO;

interface Player
{
	function move (Grid $grid): void;
}
