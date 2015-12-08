<?php

class WpCodeceptTest extends WP_UnitTestCase
{
    private $wpCodecept;

    public function setUp()
    {
        parent::setUp();
        $this->wpCodecept = new WpCodecept();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    // tests
    public function testSay()
    {
        $this->assertEquals($this->wpCodecept->say(), "Hello. This is WpCodecept Plugin.");
    }
}
