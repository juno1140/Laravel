<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'kiyo@kiyo.com')
                    ->type('password', 'kiyokiyo')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
