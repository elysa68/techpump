<?php
namespace App\Controller;

use App\Entity\Affiliate;
use App\Service\WebcamInformationService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): RedirectResponse
    {
        return $this->redirectToRoute('app_webcams');
    }

    #[Route('/webcams', name: 'app_webcams')]
    public function webcamsList(
        Request $request,
        ManagerRegistry $doctrine,
        WebcamInformationService $webcamInformation): Response
    {
        $url = explode('.', $request->getHost());
        $affiliate = $doctrine->getRepository(Affiliate::class)->findOneBy([
            'name' => $url[0]
        ]);
        if (!$affiliate) {
            throw $this->createNotFoundException('No affiliate found for name '.$url[0]);
        }
        return $this->render(
            'webcamList.html.twig',
            [
                'webcams' => $webcamInformation->getInformationWebcam(),
                'affiliate' => $affiliate
            ]
        );
    }
}