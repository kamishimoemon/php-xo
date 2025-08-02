#!/usr/bin/env php
<?php

declare(strict_types=1);

require $_composer_autoload_path ?? dirname(__DIR__) . '/vendor/autoload.php';

use XO\ConsoleInput;
use XO\HumanPlayer;
use XO\AIPlayer;
use XO\ClassicGame;
use XO\XO;

$input = new ConsoleInput();
$playerOne = new HumanPlayer(XO::X, $input);
$playerTwo = new AIPlayer(XO::O);
(new ClassicGame($playerOne, $playerTwo))->play();
