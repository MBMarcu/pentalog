<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AffordabilityCheck extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('affordability-check')
            ->setDescription('Checks what properties an applicant can afford based on input bank statement / property list.')
            ->addArgument('bank-statement', InputArgument::REQUIRED, 'Bank statement to evaluate.')
            ->addArgument('properties', InputArgument::REQUIRED, 'List of properties.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }
}
