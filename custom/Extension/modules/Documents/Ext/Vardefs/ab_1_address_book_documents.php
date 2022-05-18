<?php
$dictionary["Document"]["fields"]["ab_1_address_book_documents_name"] = array(
    'name' => 'ab_1_address_book_documents_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_DOCUMENTS_FROM_ADDRESS_BOOK_TITLE',
    'save' => true,
    'id_name' => 'ab_1_address_book_id',
    'link' => 'ab_1_address_book_documents',
    'table' => 'ab_1_address_book',
    'module' => 'AB_1_Address_Book',
    'rname' => 'name',
);
$dictionary["Document"]["fields"]["ab_1_address_book_id"] = array(
    'name' => 'ab_1_address_book_id',
    'rname' => 'id',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_ID',
    'type' => 'id',
    'table' => 'ab_1_address_book',
    'isnull' => 'true',
    'module' => 'AB_1_Address_Book',
    'reportable' => false,
    'massupdate' => false,
    'inline_edit' => 1,
    'duplicate_merge' => 'disabled',
);
$dictionary["Document"]["fields"]["ab_1_address_book_documents"] = array(
    'name' => 'ab_1_address_book_documents',
    'type' => 'link',
    'relationship' => 'ab_1_address_book_documents',
    'source' => 'non-db',
    'module' => 'AB_1_Address_Book',
    'bean_name' => 'AB_1_Address_Book',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_DOCUMENTS_FROM_DOCUMENTS_TITLE',
    'link_type' => 'one',
    'side' => 'left',
);
$dictionary["Document"]["relationships"]["ab_1_address_book_documents"] = array(
    'lhs_module' => 'AB_1_Address_Book',
    'lhs_table' => 'ab_1_address_book',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'ab_1_address_book_id',
    'relationship_type' => 'one-to-many'
);
