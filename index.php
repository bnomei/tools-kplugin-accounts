<?php

use Kirby\Cms\App as Kirby;

load([
  'AccountsPage' => 'models/AccountsPage.php',
  'AccountPage'  => 'models/AccountPage.php',
], __DIR__);

Kirby::plugin("auaust/accounts", [
  'pageModels' => [
    'accounts' => 'AccountsPage',
    'account'  => 'AccountPage',
  ]
]);
