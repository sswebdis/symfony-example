<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\Client;
class AppSetUrlsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:set-urls')
            ->setDescription('Заполняет таблицу адресами для парсинга')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }
        /* @var $http_request Client*/
        $http_request = $this->getContainer()->get('guzzle.client.guzzle.parse.start_point');
//        $result= $http_request->get('tender/search/?status=active.auction')->getHeaders();
        $result= $http_request->get('')->getBody();
        $output->writeln('Command result.'.$result);
    }

}
