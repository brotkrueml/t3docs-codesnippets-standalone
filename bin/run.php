<?php

use Symfony\Component\Console\Application;
use T3docs\RestructuredApiTools\Command\PhpDomainCommand;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application('PhpDomainCommand');
$command = new PhpDomainCommand();

$application->add($command);

$application->setDefaultCommand($command->getName(), true);
$application->run();
