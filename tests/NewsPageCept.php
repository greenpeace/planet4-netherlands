<?php
$I = new AcceptanceTester($scenario);
$I->amGoingTo('check news pagination works');

$I->amOnPage('/nieuws?nocache');
$I->scrollTo(['css' => '.pagination li.page-item:nth-child(4) > a'], 20, 50);
$I->wait(1);
$I->click('.pagination li.page-item:nth-child(4) > a');
$I->SeeInCurrentUrl('/nieuws/pagina/2/');
$I->see('Resultaten - pagina 2');
