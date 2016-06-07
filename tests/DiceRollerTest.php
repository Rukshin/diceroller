<?php

use DiceRoller\Dice;

class DiceRollerTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_rolls_a_d4()
    {
        $dice = new Dice();

        $roll = $dice->d4();
        $this->assertContains($roll->getRolls(), [1,2,3,4]);
    }

    /** @test */
    public function it_rolls_a_d6()
    {
        $dice = new Dice();

        $roll = $dice->d6();
        $this->assertContains($roll->getRolls(), [1,2,3,4,5,6]);
    }

    /** @test */
    public function it_rolls_a_d8()
    {
        $dice = new Dice();

        $roll = $dice->d8();
        $this->assertContains($roll->getRolls(), [1,2,3,4,5,6,7,8]);
    }

    /** @test */
    public function it_rolls_a_d10()
    {
        $dice = new Dice();

        $roll = $dice->d10();
        $this->assertContains($roll->getRolls(), [1,2,3,4,5,6,7,8,9,0]);
    }

    /** @test */
    public function it_rolls_a_d12()
    {
        $dice = new Dice();

        $roll = $dice->d12();
        $this->assertContains($roll->getRolls(), [1,2,3,4,5,6,7,8,9,10,11,12]);
    }

    /** @test */
    public function it_rolls_a_d20()
    {
        $dice = new Dice();

        $roll = $dice->d20();
        $this->assertContains($roll->getRolls(), [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);
    }

    /** @test */
    public function it_can_roll_multiple_dice_at_one()
    {
        $dice4 = new Dice();
        $dice6 = new Dice();

        $roll4d4 = $dice4->d4(4);
        $this->assertCount(4, $roll4d4->count());

        $roll3d6 = $dice6->d6(3);
        $this->assertCount(3, $roll3d6->count());
    }

    public function it_can_mix_different_dice_rolls()
    {
        $diceMixup = new Dice();

        $roll = $diceMixup->d20()->d4(2)->d8();

        $this->assertCount(4, $roll->getRolls());
    }
}