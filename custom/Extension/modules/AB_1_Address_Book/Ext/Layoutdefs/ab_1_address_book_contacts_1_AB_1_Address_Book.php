<?php
 // created: 2022-05-12 12:08:41
$layout_defs["AB_1_Address_Book"]["subpanel_setup"]['ab_1_address_book_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'ForContacts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AB_1_ADDRESS_BOOK_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'ab_1_address_book_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
