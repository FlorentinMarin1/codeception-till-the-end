<?php

class CheckDetailsPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->see('Player register');
        $I->assertTitlePage('My little page');
        $I->registerPlayer();
        $I->assertDbRows();
    }
}
