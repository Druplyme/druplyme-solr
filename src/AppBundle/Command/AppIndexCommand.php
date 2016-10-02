<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AppIndexCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('app:index')
             ->setDescription('Index projects');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('app.indexer')
             ->index();

        $output->writeln('Projects has been added to search index.');
    }
}
