<?php

$job_strings[] = 'cleanTasksScheduler';

function cleanTasksScheduler()
{
    $bean = BeanFactory::getBean('Tasks');

    
    $query = "tasks.status = 'Completed'";
    $tasks = $bean->get_full_list('', $query);

    foreach ($tasks as $task) {
        $task->status = 'In Progress';
        $task->save();
    }
    
    return true;
}
