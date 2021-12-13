<?php
declare(strict_types=1);

use DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener\MusicPlayer;
use DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener\PlayedHistory;

require_once __DIR__ . '/../../../../bootstrap.php';

$musicPlayer = new MusicPlayer();
$playedHistory = new PlayedHistory(musicPlayer: $musicPlayer);

$playedHistory->backup();
$musicPlayer->playMusic();

$playedHistory->backup();
$musicPlayer->playMusic();

$playedHistory->backup();
$musicPlayer->playMusic();

echo "\n";
$playedHistory->showHistory();

echo "1º Rollback \n";
$playedHistory->undo();

echo "2º Rollback \n";
$playedHistory->undo();