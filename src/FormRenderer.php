<?php

namespace Vladyslav10111\NumberRandomizer;

class FormRenderer
{
    public function render(): string
    {
        return '
            <form method="POST">
                <label for="first-number">Введіть перше число:</label>
                <input type="number" name="first-number" id="first-number" required>
                <label for="second-number">Введіть друге число:</label>
                <input type="number" name="second-number" id="second-number" required>
                <button type="submit">Рандомити</button>
            </form>
        ';
    }
}