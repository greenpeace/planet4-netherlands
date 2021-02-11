<?php
$I = new AcceptanceTester($scenario);
$I->amGoingTo('check news pagination works');

$I->amOnPage('/nieuws');
$I->wait(10);
$I->waitForElement('.pagination li.page-item:nth-child(4) > a', 5);
$I->scrollTo(['css' => 'footer '], 20, 50);
$I->click('.pagination li.page-item:nth-child(4) > a');
$I->SeeInCurrentUrl('/nieuws/2/');
$I->see('Resultaten - pagina 2');
