<?php
// created: 2022-05-12 12:08:41
$layout_defs["SB_T_Sub_Task"]["subpanel_setup"]['sb_t_sub_task_task'] = array(
    'order' => 100,
    'module' => 'Tasks',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'sb_t_sub_task_id',
    'title_key' => 'LBL_SB_T_SUB_TAKS_TASK_FROM_TASKS_TITLE',
    'get_subpanel_data' => 'sb_t_sub_task_task',
    'top_buttons' =>   array(
        0 =>
        array(
            'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1 =>
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    ),
);
