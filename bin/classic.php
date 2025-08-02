#!/usr/bin/env php
<?php

declare(strict_types=1);

require $_composer_autoload_path ?? dirname(__DIR__) . '/vendor/autoload.php';

use XO\ConsoleInput;
use XO\HumanPlayer;
use XO\AIPlayer;
use XO\ClassicGame;

$input = new ConsoleInput();
$playerOne = new HumanPlayer($input);
$playerTwo = new AIPlayer();
(new ClassicGame($playerOne, $playerTwo))->play();
