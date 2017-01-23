<?php


class LoginCest
{
    public function _before(FunctionalTester $I)
    {
        # similar to phpUnit setUp
        // parent::setUp();
        // Artisan::call('migrate');
        // Artisan::call('db:seed');
    }

    public function _after(FunctionalTester $I)
    {
        # similar to phpUnit tearDown
        // Artisan::call('migrate:rollback');
    }

    // tests
    public function login(FunctionalTester $I)
    {
        $I->amOnPage('/login');
        $I->see('Username');
    }
}
