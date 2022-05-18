<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once 'modules/Contacts/controller.php';

class CustomContactsController extends ContactsController
{
    public function action_echo()
    {
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        exit;
    }
}
