<?php
// created: 2022-05-12 12:08:41
$layout_defs["AB_1_Address_Book"]["subpanel_setup"]['ab_1_address_book_documents'] = array(
    'order' => 100,
    'module' => 'Documents',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'ab_1_address_book_id',
    'title_key' => 'LBL_AB_1_ADDRESS_BOOK_DOCUMENTS_FROM_DOCUMENTS_TITLE',
    'get_subpanel_data' => 'ab_1_address_book_documents',
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
