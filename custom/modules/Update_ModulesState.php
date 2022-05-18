<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class Update_ModulesState
{

    public static $flag = false;

    // public function updateBeforeModulesState($bean, $event, $arguments)
    // {
    //     // $printR = print_r($bean, true);
    //     $GLOBALS['log']->fatal('Application Hook Before Save Hook Module Name: ' . $bean->module_dir . ' ' . $event);

    //     if($bean->module_dir == 'Tasks'){
    //         $bean->priority;
    //         $bean->priority = 'Low';
    //         $bean->save();
    //         $GLOBALS['log']->fatal('Application Hook Before Save Hook Module Name: ' . $bean->module_dir . ' Task Priority: ' . $bean->priority);
    //     }

    //     if($bean->module_dir == 'Contacts'){
    //         $bean->description;
    //         $bean->description = 'Test';
    //         $bean->save();
    //         $GLOBALS['log']->fatal('Application Hook Before Save Hook Module Name: ' . $bean->module_dir . ' Contact Description: ' . $bean->description);
    //     }

    //     if($bean->module_dir == 'Leads'){
    //         $bean->description;
    //         $bean->description = 'Test';
    //         $bean->save();
    //         $GLOBALS['log']->fatal('Application Hook Before Save Hook Module Name: ' . $bean->module_dir . ' Contact Description: ' . $bean->description);
    //     }
    // }

    public function updateAfterModulesState($bean, $event, $arguments)
    {
        static $flag = false;

        // $printR = print_r($bean, true);
        
        $GLOBALS['log']->fatal('Application Hook After Save Hook Module Name: ' . $bean->module_dir . ' ' . $event);

        if($bean->module_dir == 'Tasks' && $flag == false){
            $bean->priority;
            $bean->priority = 'High';
            $bean->save();
            $flag = true;
            $GLOBALS['log']->fatal('Application Hook After Save Hook Module Name: ' . $bean->module_dir . ' Task Priority: ' . $bean->id);
        }

        if($bean->module_dir == 'Contacts' && $flag == false){
            $bean->description;
            $bean->description = 'description updated 17-05-2022';
            $bean->save();
            $flag = true;
            $GLOBALS['log']->fatal('Application Hook After Save Hook Module Name: ' . $bean->module_dir . ' Contact Description: ' . $bean->description);
        }

        if($bean->module_dir == 'Leads' && $flag == false){
            $bean->description;
            $bean->description = 'description updated 17-05-2022';
            $bean->save();
            $flag = true;
            $GLOBALS['log']->fatal('Application Hook After Save Hook Module Name: ' . $bean->module_dir . ' Contact Description: ' . $bean->description);
        }
    }

    public function afterLoginUserShowDate($bean, $event, $arguments)
    {
        $date = new DateTime();
        $date = $date->format('r');
        $GLOBALS['log']->fatal('After Login Hook ' . $date);
    }

    public function afterUiFrameHook($event, $arguments)
    {
        global $sugar_config;

        $date = new DateTime();
        $date = $date->format('r');
        $GLOBALS['log']->fatal('After UI Frame Hook ' . $date . ' ' . $sugar_config['my_conifg_variable'] . ' ' . $event . ' ' . $arguments);
    }

}
