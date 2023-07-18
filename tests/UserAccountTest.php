<?php

use PHPUnit\Framework\TestCase;

class UserAccountTest extends TestCase
{
    public function testView()
    {
        ob_start();
        include './App/Views/User/account.html';
        $output = ob_get_clean();

        // Assertion 1: Check if the CSS class "content-wrapper" exists
        $this->assertStringContainsString('class="content-wrapper"', $output);

        // Assertion 2: Check if the HTML contains a specific <h1> element
        $this->assertStringContainsString('<h1>', $output);

        // Assertion 3: Check if the HTML contains a specific CSS class "channel-details"
        $this->assertStringContainsString('class="channel-details"', $output);

        // Assertion 4: Check if the HTML contains a specific CSS class "content-block"
        $this->assertStringContainsString('class="content-block"', $output);

        // Assertion 5: Check if the HTML contains a specific CSS class "cb-header"
        $this->assertStringContainsString('class="cb-header"', $output);

        // Assertion 6: Check if the HTML contains a specific CSS class "btn-group"
        $this->assertStringContainsString('class="btn-group bg-clean"', $output);

        // Assertion 7: Check if the HTML contains a specific CSS class "clearfix"
        $this->assertStringContainsString('class="clearfix"', $output);

        // Assertion 8: Check if the HTML contains a specific CSS class "cb-content"
        $this->assertStringContainsString('class="cb-content articlelist"', $output);

        // Assertion 9: Check if the HTML contains a specific <div> element with nested <a> elements
        $this->assertStringContainsString('<div class="v-desc">', $output);
        $this->assertStringContainsString('<div class="v-views">', $output);

        // Assertion 10: Check if the HTML contains a specific CSS class "container-fluid"
        $this->assertStringContainsString('class="container-fluid account-header"', $output);
    }
}
