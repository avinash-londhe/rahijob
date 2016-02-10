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

class AccountController extends Controller
{

    /**
     * @Route("/job-seeker/sign-up")
     */
    public function signUpAction(Request $request)
    {
        //@TODO : Add capcha
        $entity = new Entity\JobSeeker();
        $info = new Entity\JobSeekerInfo();

        $em = $this->getDoctrine()->getManager();
        $accountService = new Services\Account($em);

        $accountService->setContainer($this->container);
        $result = array();
        $form = $this->createForm(Form\SignUp::class, array($entity, $info));

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $result = $accountService->processSignUp($request->get('sign_up'));

            if ($result === true) {
                return $this->redirectToProfilePage();
            }
        }

        if (session_status() != PHP_SESSION_NONE) {
            $sessionInfo = $accountService->getSessionName('rahiTechnoJobSeeker')->all();
            if (!empty($sessionInfo)) {
                return $this->redirectToProfilePage();
            }
        }

        return $this->render('job-seeker/sign-up.html.twig', array(
            'form' => $form->createView(),
            'resultSet' => $result
        ));
    }

    /**
     * @Route("/job-seeker/login")
     */
    public function loginAction(Request $request)
    {
        $entity = new Entity\JobSeeker();

        $em = $this->getDoctrine()->getManager();
        $accountService = new Services\Account($em);
        $accountService->setContainer($this->container);

        $result = array();
        $form = $this->createForm(Form\Login::class, array($entity));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Login process
            $result = $accountService->authenticate($request->get('login'));

            if ($result === true) {
                return $this->redirectToProfilePage();
            }
        }

        if (session_status() != PHP_SESSION_NONE) {
            $sessionInfo = $accountService->getSessionName('rahiTechnoJobSeeker')->all();
            if (!empty($sessionInfo)) {
                return $this->redirectToProfilePage();
            }
        }

        return $this->render('job-seeker/login.html.twig', array(
            'form' => $form->createView(),
            'resultSet' => $result
        ));
    }


    public function redirectToProfilePage()
    {
        $url = $this->generateUrl("jobseeker_profile_personalinfo", array());
        return $this->redirect(sprintf('%s', $url));
    }

    /**
     * @Route("/job-seeker/logout", name="job_seeker_logout")
     */
    public function logoutAction(Request $request)
    {
        $accountService = new Services\Account();
        $sessionInfo = $accountService->getSessionName('rahiTechnoJobSeeker');
        $sessionInfo->clear();

        $url = $this->generateUrl("jobseeker_account_login", array());
        return $this->redirect(sprintf('%s', $url));
    }
}
