<?php
$dictionary["Task"]["fields"]["sb_t_sub_task_task_name"] = array(
    'name' => 'sb_t_sub_task_task_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_SB_T_SUB_TASK_TASKS_FROM_SUB_TASK_TITLE',
    'save' => true,
    'id_name' => 'sb_t_sub_task_id',
    'link' => 'sb_t_sub_task_task',
    'table' => 'sb_t_sub_task',
    'module' => 'SB_T_Sub_Task',
    'rname' => 'name',
);
$dictionary["Task"]["fields"]["sb_t_sub_task_id"] = array(
    'name' => 'sb_t_sub_task_id',
    'rname' => 'id',
    'vname' => 'LBL_SB_T_SUB_TASK_ID',
    'type' => 'id',
    'table' => 'sb_t_sub_task',
    'isnull' => 'true',
    'module' => 'SB_T_Sub_Task',
    'reportable' => false,
    'massupdate' => false,
    'inline_edit' => 1,
    'duplicate_merge' => 'disabled',
);
$dictionary["Task"]["fields"]["sb_t_sub_task_task"] = array(
    'name' => 'sb_t_sub_task_task',
    'type' => 'link',
    'relationship' => 'sb_t_sub_task_task',
    'source' => 'non-db',
    'module' => 'SB_T_Sub_Task',
    'bean_name' => 'SB_T_Sub_Task',
    'vname' => 'LBL_SB_T_SUB_TASK_TASK_FROM_TASK_TITLE',
    'link_type' => 'one',
    'side' => 'left',
);
$dictionary["Task"]["relationships"]["sb_t_sub_task_task"] = array(
    'lhs_module' => 'SB_T_Sub_Task',
    'lhs_table' => 'sb_t_sub_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'sb_t_sub_task_id',
    'relationship_type' => 'one-to-many'
);
