<?php

declare(strict_types=1);

namespace XO;

interface Space
{
	function mark (Mark $mark): void;
	function render (Position $pos): void;
}
