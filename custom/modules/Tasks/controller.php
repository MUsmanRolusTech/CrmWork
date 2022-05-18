<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class TasksController extends SugarController
{
    public function action_echo()
    {
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        exit;
    }
}
