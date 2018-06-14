<?php
// created: 2018-06-11 14:48:35
$dictionary["SA_Orders"]["fields"]["sa_orders_accounts"] = array (
  'name' => 'sa_orders_accounts',
  'type' => 'link',
  'relationship' => 'sa_orders_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_SA_ORDERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'sa_orders_accountsaccounts_ida',
);
$dictionary["SA_Orders"]["fields"]["sa_orders_accounts_name"] = array (
  'name' => 'sa_orders_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SA_ORDERS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'sa_orders_accountsaccounts_ida',
  'link' => 'sa_orders_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["SA_Orders"]["fields"]["sa_orders_accountsaccounts_ida"] = array (
  'name' => 'sa_orders_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'sa_orders_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SA_ORDERS_ACCOUNTS_FROM_SA_ORDERS_TITLE',
);
