<?php
declare(strict_types=1);

namespace DesignPatternsPhp8\Behavioral\Memento\ExampleMusicListener;

use Exception;
use function array_pop;

class PlayedHistory
{
    /**
     * @var array<Listened>
     */
    private array $listened = [];

    /**
     * @param MusicPlayer $musicPlayer
     */
    public function __construct(
        private MusicPlayer $musicPlayer
    ) {}

    /**
     *
     */
    public function backup(): void
    {
        echo "Played history: Saving actual digest \n";
        $this->listened[] = $this->musicPlayer->save();
    }

    /**
     *
     */
    public function undo(): void
    {
        if (!count($this->listened)) {
            return;
        }
        $listened = array_pop($this->listened);

        echo "Played history: Restoring digest  \n";
        try {
            $this->musicPlayer->restore(listened: $listened);
        } catch (Exception $exception) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Played history: Show history \n";
        foreach ($this->listened as $listened) {
            echo $listened->getName() . ' ' . $listened->getDate() . "\n";
        }
    }
}