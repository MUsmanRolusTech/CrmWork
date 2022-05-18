<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AB_1_Address_Book_CallsLogicHook
{

    public function updateRelatedCallsInfo($bean, $event, $arguments)
    {
        $GLOBALS['log']->fatal('name: '.$bean->name);
    }
}
