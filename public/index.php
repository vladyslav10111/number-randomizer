<?php

require __DIR__ . '/../vendor/autoload.php';

use Vladyslav10111\NumberRandomizer\FormRenderer;
use Vladyslav10111\NumberRandomizer\Randomizer;

$form = new FormRenderer();
$randomizer = new Randomizer();

?>
<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Number Randomizer</title>
</head>
<body>
<?php echo $form->render(); ?>
<?php echo $randomizer->number_generate(); ?>
</body>
</html>
