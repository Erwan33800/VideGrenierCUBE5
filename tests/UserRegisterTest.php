<?php

use PHPUnit\Framework\TestCase;

class UserRegisterTest extends TestCase
{
    public function testView()
    {
        ob_start();
        include './App/Views/User/register.html';
        $output = ob_get_clean();

        // Assertion 1: Check if the CSS class "container-fluid" exists
        $this->assertStringContainsString('class="container-fluid bg-image"', $output);

        // Assertion 2: Check if the HTML contains a specific <h3> element
        $this->assertStringContainsString('<div class="l-head">', $output);

        // Assertion 3: Check if the HTML contains a specific <label> element
        $this->assertStringContainsString('<label for="username">Nom d\'utilisateur</label>', $output);

        // Assertion 4: Check if the HTML contains a specific <input> element
        $this->assertStringContainsString('<input type="text" class="form-control" id="username" name="username"', $output);

        // Assertion 5: Check if the HTML contains a specific <div> element
        $this->assertStringContainsString('<div class="overtext">', $output);
    }
}

