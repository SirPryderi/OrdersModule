<?php
 // created: 2018-06-11 14:48:35
$layout_defs["Accounts"]["subpanel_setup"]['sa_orders_accounts'] = array (
  'order' => 100,
  'module' => 'SA_Orders',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SA_ORDERS_ACCOUNTS_FROM_SA_ORDERS_TITLE',
  'get_subpanel_data' => 'sa_orders_accounts',
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
