<?php


namespace App\Controller;
use Endroid\QrCode\Response\QrCodeResponse;
use JeroenDesloovere\VCard\VCard;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\ErrorCorrectionLevel;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class generate extends AbstractController
{
    /**
     * @Route("/", name="qr_code")
     */
    public function index()
    {
      /*  $vcard = new VCard();
        $lastName = 'Bang Jo';
        $firstName = 'Jojojo';
        $additional = '';
        $prefix = '';
        $suffix = '';

        $vcard->addName($lastName, $firstName, $additional, $prefix, $suffix);
        $vcard->addCompany('Siesqo');
        $vcard->addJobtitle('Web Developer');
        $vcard->addRole('Data Protection Officer');
        $vcard->addEmail('info@jeroendesloovere.be');
        $vcard->addPhoneNumber(1234121212, 'PREF;WORK');
        $vcard->addPhoneNumber(123456789, 'WORK');
        $vcard->addLabel('street, worktown, workpostcode Belgium');

        $qrCode = new QrCode($vcard->getOutput());
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH()));
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
        $qrCode->setLabel('Scan the code', 16,  '../public/assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
        $qrCode->setLogoPath('../public/assets/images/logo.jpg');
        $qrCode->setLogoWidth('25');
        $qrCode->setValidateResult(false);

        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();
        $qrCode->writeFile('../storage/Default.png');

        $response = new Response($qrCode->writeString(), Response::HTTP_OK, ['Content-Type' => $qrCode->getContentType()]);

        return $this->render('base.html.twig', [
            'qrCode' => $response,
        ]);*/
    }
}