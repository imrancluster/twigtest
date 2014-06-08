<?php

namespace App;


require_once 'autoload.php';
require_once 'src/Member.php';

global $twig;
global $db;
global $entityManager;


    if (!empty($_POST['submit'])) {

        $control = new Control($twig, $db, $entityManager);

        switch ($_POST['pagename']) {

            case 'index'   : $control->showDetails($_POST); break;

            case 'details' : $control->save($_POST); break;

        }


    } else {

        header('Location: index.php');
    }


use Twig_Environment;
use Doctrine\ORM\EntityManager;


class Control
{

    /** @var Twig_Environment */
    public $twigService;

    public $dbConn;

    /** @var EntityManager */
    public $em;

    public function __construct($twig, $conn, $entityManager)
    {
        $this->twigService = $twig;
        $this->dbConn      = $conn;
        $this->em          = $entityManager;
    }

    public function showDetails($postdata)
    {

        $url = "http://graph.facebook.com/". $postdata['fb_username'];

        $data = json_decode(file_get_contents($url));

        $commonData = array(
            'id'            => $data->id,
            'name'          => $data->name,
            'first_name'    => $data->first_name,
            'last_name'     => $data->last_name,
            'username'      => $data->username,
            'locale'        => $data->locale,
        );

        unset($data->id);
        unset($data->name);
        unset($data->first_name);
        unset($data->last_name);
        unset($data->username);
        unset($data->locale);

        $metaData = json_encode($data);




        // build data to show

        $this->view('details.html.twig', array(
            'data' => $commonData,
            'meta' => $metaData
        ));

    }

    public function save($postData)
    {
        $memberCheck = $this->em->getRepository('Members')->findOneBy(array('facebook_id' => $postData['facebook_id']));

        if( $memberCheck === null ) {

            $member = new \Members();
            $member->setFacebookId($postData['facebook_id']);
            $member->setName($postData['name']);
            $member->setFirstName($postData['first_name']);
            $member->setLastName($postData['last_name']);
            $member->setLocale($postData['locale']);
            $member->setUsername($postData['username']);
            $member->setMeta($postData['meta']);


            $valid = $member->isValid();

            if ($valid === true) {

                $this->em->persist($member);
                $this->em->flush();

            } else {

                echo $valid;exit;
            }
        }


        $this->showList();

    }

    public function showList()
    {
        $memberRepository = $this->em->getRepository('Members');
        $members = $memberRepository->findAll();

        $memberData = array();
        foreach ($members as $member) {
            $memberData[] = $member->toArray();
        }

        $this->view('list.html.twig', array(
            'members' => $memberData
        ));
    }

    public function view($template, $data = array())
    {
        $this->twigService->clearCacheFiles();
        $templateObj =  $this->twigService->loadTemplate($template);

        echo $templateObj->render($data);
        exit;
    }
}