<?php

namespace Hackathon\LevelC;

class Player
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSteps($partOfTheTrack, $context)
    {
        $maxPos = strlen($partOfTheTrack);
        $res = $maxPos;

        if (5 === $maxPos) {
            for ($nextPos = 0; $nextPos < $maxPos; ++$nextPos) {
                if ('_' === $partOfTheTrack[$nextPos]) {
                    $res = $nextPos;
                }
            }
        }
        $instruction = str_repeat('M', $res).str_repeat('S', 5);

        return $instruction;
    }
};
