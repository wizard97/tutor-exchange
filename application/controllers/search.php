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
            if (is_array($this->view->users))
            {
            $this->view->render('search/showresults');
            }
            else
            {
            header('location: ' . URL . 'search/index');
            }
        }

    function showtutorprofile($user_id)
    {
        Auth::handleLogin();
        
        include VIEWS_PATH.'_templates/classes.php';
        $this->view->math_classes = $math_classes;
        $this->view->science_classes = $science_classes;
        $this->view->french_classes = $french_classes;
        $this->view->spanish_classes = $spanish_classes;
        $this->view->social_classes = $social_classes;
        $search_model = $this->loadModel('Search');
        $this->view->tutor = $search_model->getUserProfile($user_id);
        if ($this->view->tutor == false)
        {
            header('location: ' . URL . 'search/saved');
        }
        else
        {
        $this->view->render('search/showtutorprofile');
        }
    }

        function showResults_action()
    {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            $search_model->saveTutors();
            $this->view->users = $search_model->getResults();
            if (is_array($this->view->users))
            {
            $this->view->render('search/showresults');
            }
            else
            {
            header('location: ' . URL . 'search/index');
            }
        }

            function saved()
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            $this->view->users = $search_model->loadSaved();
            $this->view->render('search/saved');
        }

        function saved_action()
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            $search_model->deleteSaved();
            $this->view->users = $search_model->loadSaved();
            $this->view->render('search/saved');
        }

        function emailTutor($user_id)
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            $this->view->tutor = $search_model->getTutor($user_id);
            if($this->view->tutor == false)
            {
                header('location: ' . URL . 'search/saved');
            }
            else
            {
            $this->view->render('search/emailtutor');
            }
        }

        function emailTutor_action($user_id)
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            if($search_model->emailTutor_action($user_id) == false)
            {
                header('location: ' . URL . 'search/emailtutor/'.$user_id);
            }
            else
            {
                $this->view->tutor = $search_model->getTutor($user_id);
            $this->view->render('search/emailtutor');
            }
        }
                function reviewTutor($user_id)
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            $this->view->tutor = $search_model->getTutor($user_id);
            if($this->view->tutor == false)
            {
                header('location: ' . URL . 'search/saved');
            }
            else
            {
            $this->view->render('search/reviewtutor');
            }
        }
                function reviewTutor_action($user_id)
        {
        Auth::handleLogin();
            $search_model = $this->loadModel('Search');
            if($search_model->reviewTutor_action($user_id) == false)
            {
                header('location: ' . URL . 'search/reviewtutor/'.$user_id);
            }
            else
            {
                $this->view->tutor = $search_model->getTutor($user_id);
            $this->view->render('search/reviewtutor');
            }
        }
}
