<?php

namespace Hackathon\LevelB;

class Redux
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Cette méthode ne prends rien en paramétre et retourne la reduction du nombre.
     *
     * @return string
     */
  public function getReductedNumber()
    {
        $result = $number;
        $step = 0;
        while (9 < $result) {
            $numb = strval($result);
            $len = strlen($numb);
            $result = 0;
            for ($i = 0;$i < $len;++$i) {
                $result += $numb[$i];
            }
        }

        return $result;
    }

    public function getReductedNumber2()
    {
        $result = $this->number;
        $step = 0;

        while (9 < $result) {
            $result = $this->reduct(strval($result));
        }

        return $result;
    }

    private function reduct($number)
    {
        $len = strlen($number);
        $result = 0;
        for ($i = 0; $i < $len; ++$i) {
            $result += $number[$i];
        }

        return $result;
    }
};
