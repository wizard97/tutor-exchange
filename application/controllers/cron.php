<?php

/**
 * Ajax Index
 * The ajax controller for handling ajax requests
 */
class Cron extends Controller
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
    function update()
    {
        if (!empty($_POST['password']) && $_POST['password'] == "cron_ac_only")
        {
        $cron_model = $this->loadModel('Cron');
        $affected_tutors = $cron_model->pauseEmailExpired();
		$warned_tutors = $cron_model->EmailWarn();
        echo $affected_tutors." tutor(s) paused. ".$warned_tutors." tutor(s) warned.";
        }
    }
}
