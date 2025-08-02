<?php

declare(strict_types=1);

namespace XO;

class HumanPlayer implements Player
{
	private Mark $mark;
	private Input $input;

	public function __construct (Mark $mark, Input $input)
	{
		$this->mark = $mark;
		$this->input = $input;
	}

	public function move (Grid $grid): void
	{
		$pos = $this->input->readPosition();
		$grid->mark($pos, $this->mark);
	}
}
