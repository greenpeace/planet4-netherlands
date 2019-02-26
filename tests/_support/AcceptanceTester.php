<?php

class AcceptanceTester extends \Codeception\Actor
{
	use _generated\AcceptanceTesterActions;

	public function getCSSValue($selector, $property)
	{
		$I = $this;
		return $I->executeInSelenium(
			function(\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver
		) use ($selector, $property) {
			return $webdriver
				->findElement(WebDriverBy::cssSelector($selector))
				->getCSSValue($property);
		});
	}

}
