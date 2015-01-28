<?php

/**
 * Class Overview
 * This controller shows the (public) account data of one or all user(s)
 */
class Search extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * This method controls what happens when you move to /overview/index in your app.
     * Shows a list of all users.
     */
    function index()
    {
       // $overview_model = $this->loadModel('Overview');
       // $this->view->users = $overview_model->getAllUsersProfiles();
        $this->view->render('search/index');
    }

    /**
     * This method controls what happens when you move to /overview/showuserprofile in your app.
     * Shows the (public) details of the selected user.
     * @param $user_id int id the the user
     */
    function showResults()
    {
            $search_model = $this->loadModel('Search');
            $this->view->users = $search_model->getResults();
            $this->view->render('search/showresults');

        }
}
