<?php

namespace app;

require_once 'autoload.php';

global $twig;
global $db;


    if (!empty($_POST['submit'])) {

        $control = new Control($twig, $db);

        switch ($_POST['pagename']) {

            case 'index'   : $control->showDetails($_POST); break;

            case 'details' : $control->save($_POST); break;

        }


    } else {

        header('Location: index.php');
    }


use Twig_Environment;

class Control
{

    /** @var Twig_Environment */
    public $twigService;

    public $dbConn;

    public function __construct($twig, $conn)
    {
        $this->twigService = $twig;
        $this->dbConn      = $conn;
    }

    public function showDetails($postdata)
    {
        // read url
        $fbusername = $postdata['fb_username'];
        $homepage = file_get_contents('http://graph.facebook.com/'.$fbusername);
        $data =json_decode($homepage,1);
        $id = $data['id'];
        $name = $data['name'];
        $gender = $data['gender'];
        $username = $data['username'];
        $link = 'http://graph.facebook.com/'.$data['username'];
        unset($data['id']);
        unset($data['name']);
        unset($data['gender']);
        unset($data['username']);
        unset($data['link']);
        $meta = json_encode($data);
        //echo $homepage;
        //print_r($homepage->id); exit;
        // get data from url

        // build data to show

        // render twig
        $this->view('details.html.twig', array('id' => $id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $link, 'meta' => $meta));

    }

    public function save($postData)
    {
        //print_r($postData); exit;
        $fb_id = $postData['fb_id'];
        $name = $postData['name'];
        $gender = $postData['gender'];
        $username = $postData['username'];
        $fb_link = $postData['fb_link'];
        $meta = $postData['meta'];
        //$sql = "select * from "
        $sql = "INSERT INTO fb_graph VALUES ($fb_id, '$name', '$gender', '$username', '$fb_link','$meta')";

        $result = mysql_query($sql, $this->dbConn);

        // break into data insert query

        // save using $this->dbConn
        $this->view('list.html.twig', array('id' => $fb_id, 'name' => $name, 'gender' => $gender, 'username' => $username, 'link' => $fb_link, 'meta' => $meta));
        // redirect to list page

    }

    public function showList()
    {
        // fetch list

        // show list
    }

    public function view($template, $data)
    {
        $this->twigService->clearCacheFiles();
        $tmplt  = $this->twigService->loadTemplate($template);

        echo $tmplt->render($data);
        exit;
    }
}