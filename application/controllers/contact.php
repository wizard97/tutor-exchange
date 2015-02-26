<?php

/**
 * Class Error
 * This controller simply shows a page that will be displayed when a controller/method is not found.
 * Simple 404 handling.
 */
class Contact extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens / what the user sees when an error happens (404)
     */
    function index()
    {
        $this->view->render('contact/index');
    }

    function send()
    {
        $contact_model = $this->loadModel('Contact');
        $contact_model->sendContactEmail();
        $this->view->render('contact/index');
    }
}
