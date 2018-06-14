<?php
// created: 2018-06-11 14:48:35
$dictionary["SA_Orders"]["fields"]["sa_orders_line_items"] = array (
  'name' => 'sa_orders_line_items',
  'type' => 'link',
  'relationship' => 'sa_orders_line_items',
  'source' => 'non-db',
  'module' => 'SA_LineItems',
  'bean_name' => 'SA_LineItems',
  'vname' => 'LBL_SA_ORDERS_LINE_ITEMS_FROM_SA_LINE_ITEMS_TITLE',
  'id_name' => 'sa_orders_line_itemssa_lineitems_ida',
);
$dictionary["SA_Orders"]["fields"]["sa_orders_line_items_name"] = array (
  'name' => 'sa_orders_line_items_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_ORDERS_LINE_ITEMS_FROM_SA_LINE_ITEMS_TITLE',
  'save' => true,
  'id_name' => 'sa_orders_line_itemssa_lineitems_ida',
  'link' => 'sa_orders_line_items',
  'table' => 'sa_lineitems',
  'module' => 'SA_LineItems',
  'rname' => 'name',
);
$dictionary["SA_Orders"]["fields"]["sa_orders_line_itemssa_lineitems_ida"] = array (
  'name' => 'sa_orders_line_itemssa_lineitems_ida',
  'type' => 'link',
  'relationship' => 'sa_orders_line_items',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_ORDERS_LINE_ITEMS_FROM_SA_ORDERS_TITLE',
);
