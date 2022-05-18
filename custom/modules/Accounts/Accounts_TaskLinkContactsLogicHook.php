<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class Accounts_TaskLinkContactsLogicHook
{

    public function createTaskAndLinkWithContacts($bean, $event, $arguments)
    {

        $GLOBALS['log']->fatal('After Save Account Name: ' . $bean->name);

        $taskBean = BeanFactory::newBean('Tasks');

        $taskBean->name = 'Test Task 101';
        $taskBean->priority = 'High';
        $taskBean->status = 'In Progress';
        $taskBean->contact_id = '2576496a-9d65-33d4-7b1a-6275184bf72f';
        $taskBean->save();

        $GLOBALS['log']->fatal('After Save Task: ' . $taskBean->name);
    }
}
