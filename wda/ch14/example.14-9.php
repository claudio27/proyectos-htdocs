<?php
require_once "HTML/Template/ITX.php";

// Access to the FreightCalculator classes
require_once"example.14-7.php";

// Access to the CaseCounter class
require_once"example.14-5.php";

// Access to the ChristmasHamper class
require_once"example.14-8.php";

$template = new HTML_Template_ITX("./templates");
$template->loadTemplatefile("example.14-10.tpl", true, true);

$exampleOrder = new CaseCounter(12, 1.2);

$air = new AirFreightCalculator($exampleOrder);
$road = new RoadFreightCalculator($exampleOrder);

for ($i = 0; $i < 10; $i++)
{
    $exampleOrder->add(6);

    $template->setCurrentBlock("order");
    $template->setVariable("UNITS", $exampleOrder->numberOfUnits());
    $template->setVariable("CASES", $exampleOrder->caseCount());
    $template->setVariable("WEIGHT", $exampleOrder->totalWeight());
    $template->setVariable("AIR", $air->totalFreight());
    $template->setVariable("ROAD", $road->totalFreight());
    $template->parseCurrentBlock();
}

// Create a ChristmasHamper object
$hamper = new ChristmasHamper;
$air = new AirFreightCalculator($hamper);
$road = new RoadFreightCalculator($hamper);

// output the last row for the ChristmasHamper
$template->setCurrentBlock("order");
$template->setVariable("UNITS", "A Christmas hamper");
$template->setVariable("CASES", $hamper->caseCount());
$template->setVariable("WEIGHT", $hamper->totalWeight());
$template->setVariable("AIR", $air->totalFreight());
$template->setVariable("ROAD", $road->totalFreight());
$template->parseCurrentBlock();

$template->show();
?>
