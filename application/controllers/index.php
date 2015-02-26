<?php

/**
 * Class Index
 * The index controller
 */
class Index extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
            parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index, which is the same like URL/index or in this
     * case even URL (without any controller/action) as this is the default controller-action when user gives no input.
     */
    function index()
    {
        $index_model = $this->loadModel('Index');
        $index_model->incrementStats();
        $this->view->info = $index_model->getStats();
            $this->view->render('index/index');
    }
}
