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

    /**
     * Index, default action (shows the login form), when you do login/index
     */
    function index()
    {
        Auth::handleLogin();

        // show the view
        $this->view->render('tutor/index');
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