<?php

/*

Problem Statement:
-----------------

A.	Receives $137.00 from a daily bookout while driving for Taxi Transportation
B.	Spent $37.00 for gas for the day while diving for Taxi Transportation

*/

require_once('config.inc.php5');
require_once('dataconn.inc.php5');
require_once('chartofaccounts.inc.php5');
require_once('ledger.inc.php5');
require_once('revenue.inc.php5');
require_once('asset.inc.php5');
require_once('expense.inc.php5');

// 1. Create a chart of accounts or open an existing chart of accounts
$coa = new ChartOfAccounts($mdb);

// 2. Create or open the account classes and add to the Chart of Accounts
$coa->add($mdb,"Cash","Asset");
$coa->add($mdb,"Livery","Revenue");
$coa->add($mdb,"Gas","Expense");

// 3. Assign Ledger entries for each Account - The name must match the name given above
$cash = new Asset($mdb,"Cash");
$livery = new Revenue($mdb,"Livery");
$gas = new Expense($mdb,"Gas");

// 4. Add ledger entries
$livery->addcredit($mdb,"2007-03-31","Taxi Transportation Daily Bookout",137.00);
$cash->adddebit($mdb,"2007-03-31","Tax Transportation Daily Bookout",137.00);
$cash->addcredit($mdb,"2007-03-31","Gas for Taxi Transportation Daily",37.00);
$gas->adddebit($mdb,"2007-03-31","Gas for Taxi Transportation Daily",37.00);


?>