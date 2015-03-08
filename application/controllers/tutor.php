<?php

/**
 * Login Controller
 * Controls the login processes
 */

class Tutor extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }


    function index()
    {
        Auth::handleLogin();

        include VIEWS_PATH.'_templates/classes.php';
        $this->view->math_classes = $math_classes;
        $this->view->science_classes = $science_classes;
        $this->view->french_classes = $french_classes;
        $this->view->spanish_classes = $spanish_classes;
        $this->view->social_classes = $social_classes;
        $tutor_model = $this->loadModel('Tutor');
        $this->view->tutor = $tutor_model->getUserProfile();
        if ($this->view->tutor == false)
        {
            header('location: ' . URL . 'login/changeaccounttype');
        }
        else
        {
        $this->view->render('tutor/index');
        }
    }

    function editTutor()
    {
        Auth::handleLogin();
        if (Session::get('user_account_type') > 1)
        {
        $tutor_model = $this->loadModel('Tutor');
        $this->view->user = $tutor_model->loadInfo();
        $this->view->render('tutor/edit');
        }
        else
        {
            header('location: ' . URL . 'login/changeaccounttype');
        }
    }

    
    function editTutor_action()
    {
        Auth::handleLogin();
         if (Session::get('user_account_type') > 1)
        {
        $tutor_model = $this->loadModel('Tutor');
        $tutor_model->editInfo();
        $this->view->user = $tutor_model->loadInfo();
        $this->view->render('tutor/edit');
        }
    else 
        {
        header('location: ' . URL . 'login/changeaccounttype');
        }
    }





}