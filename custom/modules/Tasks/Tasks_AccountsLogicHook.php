<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class Tasks_AccountsLogicHook
{

    public function updateTaskIfAccountChanged($bean, $event, $arguments)
    {

        $GLOBALS['log']->fatal('Before Save Task Name: ' . $bean->name . ' Before Save Task Account ID: ' . $bean->parent_id);

        if ($bean->parent_type == 'Accounts') {

            $accountBean = BeanFactory::getBean('Accounts', $bean->parent_id);

            $GLOBALS['log']->fatal('Before Save Account Name: ' . $accountBean->name . ' Before Save Account Custom Status: ' . $accountBean->crm_t_status . ' ' . $accountBean->description);
        }
    }

    public function updateRelatedAccountsInfo($bean, $event, $arguments)
    {

        static $flag = false;

        $GLOBALS['log']->fatal('After Save Task Name: ' . $bean->name . ' After Save Task Account ID: ' . $bean->parent_id);

        if ($bean->parent_type == 'Accounts' && $flag == false) {

            $accountBean = BeanFactory::getBean('Accounts', $bean->parent_id);

            // get account custom status field
            $accountBean->crm_t_status;

            $accountBean->description;

            $accountBean->crm_t_status = true;

            $accountBean->description = 'Test Description 16-05-2022';

            // $accountBean->sb_t_sub_task_id = 'b273bd52-681c-8f29-1792-62849d6b1b90';

            $accountBean->save();

            $flag = true;

            $GLOBALS['log']->fatal('After Save Update Custom Account Status: ' . $accountBean->crm_t_status . ' ' . $accountBean->description);
        }
    }

    public function addRelationshipWithSubTask($bean, $event, $arguments)
    {
        static $flag = false;

        $GLOBALS['log']->fatal('After Relationship Add: ' . $bean->name . ' Task ID: ' . $bean->id);

        if($flag == false) {

            $subTaskBean = BeanFactory::getBean('SB_T_Sub_Task', $bean->sb_t_sub_task_id);

            $subTaskBean->task_id;

            $subTaskBean->task_id = $bean->id;

            $subTaskBean->save();

            $flag = true;
        }

        $GLOBALS['log']->fatal('After Relationship Add: ' . $bean->name . ' Sub Task: ' . $subTaskBean->name . ' ' . $subTaskBean->task_id);

    }
}
