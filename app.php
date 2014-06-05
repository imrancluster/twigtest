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

        // get data from url

        // build data to show

        // render twig

        echo $this->twigService->render('details');
        exit;

    }

    public function save($postData)
    {
        // break into data insert query

        // save using $this->dbConn

        // redirect to list page

    }

    public function showList()
    {
        // fetch list

        // show list
    }
}