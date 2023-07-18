<?php

use PHPUnit\Framework\TestCase;

class UserLoginTest extends TestCase
{
    public function testView()
    {
        ob_start();
        include './App/Views/User/login.html';
        $output = ob_get_clean();

        // Assertion 1: Check if the HTML contains a specific CSS class "container-fluid"
        $this->assertStringContainsString('class="container-fluid bg-image"', $output);

        // Assertion 2: Check if the HTML contains a specific <img> element with the src attribute
        $this->assertStringContainsString('<img src="images/login.jpg"', $output);

        // Assertion 3: Check if the HTML contains a specific CSS class "banner-text"
        $this->assertStringContainsString('class="banner-text hidden-xs"', $output);

        // Assertion 4: Check if the HTML contains a specific <div> element with class "l-head"
        $this->assertStringContainsString('<div class="l-head">Connexion</div>', $output);

       
        // Assertion 8: Check if the HTML contains a specific <a> element with href "register"
        $this->assertStringContainsString('<a href="register">Inscription</a>', $output);

        // Assertion 9: Check if the HTML contains a specific <a> element with href "#"
        $this->assertStringContainsString('<a href="#">Mot de passe oublié ?</a>', $output);
    }
}
