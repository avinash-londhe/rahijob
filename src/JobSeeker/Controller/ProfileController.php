<?php


namespace JobSeeker\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use JobSeeker\Entity;
use JobSeeker\Services;
use JobSeeker\Form;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

class ProfileController extends Controller
{

    /**
     * @Route("/job-seeker/profile/overview")
     */
    public function dashboardAction(Request $request)
    {
    }

    public function headerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $accountService = new Services\Account($em);
        $sessionInfo = $accountService->getSessionName('rahiTechnoJobSeeker');

        return $this->render(
            '/theme1/header/job-seeker.html.twig',
            array('sessionInfo' => $sessionInfo)
        );
    }

    public function menuAction(Request $request)
    {
        $routeName = $request->get('currentPage');

        return $this->render(
            '/theme1/menu/job-seeker.html.twig',
            array()
        );
    }

    /**
     * @Route("/job-seeker/profile/personal-info")
     */
    public function personalInfoAction(Request $request)
    {
        return $this->render(
            '/job-seeker/profile/personal-information.html.twig',
            array( )
        );
    }
}