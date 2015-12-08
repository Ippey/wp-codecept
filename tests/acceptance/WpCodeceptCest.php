<?php
use \AcceptanceTester;

class WpCodeceptCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage("/wp-login.php");
        $I->fillField("#user_login", 'admin');
        $I->fillField("#user_pass", 'admin');
        $I->click("#wp-submit");
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testRender(AcceptanceTester $I)
    {
        $wpCodecept = new WpCodecept();
        $I->canSee($wpCodecept->say());
    }
}
