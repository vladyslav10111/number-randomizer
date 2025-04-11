<?php

namespace Vladyslav10111\NumberRandomizer;

class Randomizer
{
    public function number_generate(): string
    {
        $randomNumber = '';

        if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["first-number"]) && !empty($_POST["second-number"]))
        {
            $randomNumber = mt_rand($_POST["first-number"], $_POST["second-number"]);
        }

        return 'Рандомне число з обраного діапазону:' . $randomNumber;
    }
}