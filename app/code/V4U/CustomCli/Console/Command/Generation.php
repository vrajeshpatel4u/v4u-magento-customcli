<?php

namespace V4U\CustomCli\Console\Command;

use Symfony\Component\Console\Command\Command; // for parent class
use Symfony\Component\Console\Input\InputInterface; // for InputInterface used in execute method
use Symfony\Component\Console\Output\OutputInterface; // for OutputInterface used in execute method
use Symfony\Component\Filesystem\Filesystem;

class Generation extends Command
{
    protected function configure()
    {
        $this->setName('v4u:helloworld')
             ->setDescription('Welcome to Custom Cli');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
    }
}