<?php
$I = new AcceptanceTester($scenario);
$I->amGoingTo('check navbar has right design');

$I->amOnPage('/');

$headerBackgroundColor = $I->getCSSValue('nav#header', 'background-color');

$I->assertEquals('rgba(255, 255, 255, 1)', $headerBackgroundColor);
