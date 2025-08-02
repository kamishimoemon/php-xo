#!/usr/bin/env php
<?php

declare(strict_types=1);

require $_composer_autoload_path ?? dirname(__DIR__) . '/vendor/autoload.php';

use XO\ConsoleInput;
use XO\HumanPlayer;
use XO\AIPlayer;
use XO\ClassicGame;
use XO\Mark;

$input = new ConsoleInput();
$playerOne = new HumanPlayer(Mark::X, $input);
$playerTwo = new AIPlayer(Mark::O);
(new ClassicGame($playerOne, $playerTwo))->play();
