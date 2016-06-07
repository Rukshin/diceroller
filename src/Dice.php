<?php
namespace DiceRoller;

use Countable;

class Dice implements Countable
{
    protected $rolls;

    /**
     * Dice constructor.
     */
    public function __construct()
    {
        $this->rolls = [];
    }

    /**
     * Roll one or multiple dice of 4
     *
     * @param int $number
     * @return $this
     */
    public function d4($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 1, 4);

            return $this;
        }

        $this->rolls = mt_rand(1, 4);

        return $this;
    }

    /**
     * Roll one or multiple dice of 6
     *
     * @param int $number
     * @return $this
     */
    public function d6($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 1, 6);

            return $this;
        }

        $this->rolls = mt_rand(1, 6);

        return $this;
    }


    /**
     * Roll one or multiple dice of 8
     *
     * @param int $number
     * @return $this
     */
    public function d8($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 1, 8);

            return $this;
        }

        $this->rolls = mt_rand(1, 8);

        return $this;
    }


    /**
     * Roll one or multiple dice of 10
     *
     * @param int $number
     * @return $this
     */
    public function d10($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 0, 9);

            return $this;
        }

        $this->rolls = mt_rand(0, 9);

        return $this;
    }

    /**
     * Roll one or multiple dice of 12
     *
     * @param int $number
     * @return $this
     */
    public function d12($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 1, 12);

            return $this;
        }

        $this->rolls = mt_rand(1, 12);

        return $this;
    }


    /**
     * Roll one or multiple dice of 20
     *
     * @param int $number
     * @return $this
     */
    public function d20($number = 1)
    {
        if($number > 1) {
            $this->multipleRoll($number, 1, 20);

            return $this;
        }

        $this->rolls = mt_rand(1, 20);

        return $this;
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * The return value is cast to an integer.
     */
    public function count()
    {
        return $this->getRolls();
    }

    /**
     * @return array
     */
    public function getRolls()
    {
        return $this->rolls;
    }

    /**
     * Process the multirolling dice
     *
     * @param $number
     * @param array $settings
     * @internal param int $start
     */
    protected function multipleRoll($number, ...$settings)
    {
        for ($i = $settings[0]; $i <= $number; $i++) {
            array_push($this->rolls, mt_rand($settings[0], $settings[1]));
        }
    }
}