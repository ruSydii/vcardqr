<?php

namespace App\Command;

use App\Repository\IdentityRepository;
use JeroenDesloovere\VCard\VCard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;

class GenerateqrCommand extends Command
{
    protected static $defaultName = 'generateqr';

    private $IdentityRepository;

    function __construct(IdentityRepository $IdentityRepository)
    {
       parent::__construct(IdentityRepository::class);
       $this->IdentityRepository = $IdentityRepository;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $datas = $this->IdentityRepository->findAll();
        foreach ($datas as $data)
        {
            $vcrd = new VCard();
            $firstname = $data->getNama();
            $vcrd->addName($firstname);
            $vcrd->addPerusahaan($data->getPerusahaan());
            $vcrd->addJabatan($data->getJabatan());
            $vcrd->addEmail($data->getEmail(),'home');
            $vcrd->addEmail($data->getEmailOffice(),'PREF;WORK');
            $vcrd->addPhone($data->getPhone(),'home');
            $vcrd->addPhone($data->getPhoneOffice(),'PREF;WORK');

            $qrCode = new QrCode($vcrd->getOutput());
            $qrCode->setWriterByName('png');
            $qrCode->setMargin(10);
            $qrCode->setEncoding('UTF-8');
            $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH()));
            $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
            $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
            $qrCode->setLabel($data->getNama(), 16,  __DIR__.'/../../public/assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
            $qrCode->setLogoPath(__DIR__.'/../../public/assets/images/logo.jpg');
            $qrCode->setLogoWidth('50');
            $qrCode->setValidateResult(false);
            header('Content-Type: '.$qrCode->getContentType());
            $qrCode->writeFile(__DIR__.'/../../storage/'.$data->getEmail().'.png');
            $output->write("generating qr code".$data->getNik()."\n");




        }
    }
}
