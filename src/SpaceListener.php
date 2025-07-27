<?php

declare(strict_types=1);

namespace XO;

interface SpaceListener
{
	function spaceMarked (Space $space, Mark $mark): void;
}
