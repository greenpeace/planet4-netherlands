<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('check navbar has right design');

$I->amOnPage('/');

$headerBackgroundColor = $I->getCSSValue('nav#header', 'background-color');
$headerTextColor = $I->getCSSValue('.top-navigation a.nav-link', 'color');

$I->assertEquals('rgba(255, 255, 255, 1)', $headerBackgroundColor);
$I->assertEquals('rgba(92, 105, 120, 1)', $headerTextColor);
