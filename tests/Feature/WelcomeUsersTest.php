<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('greeting/luis/imyosoy')
            ->assertStatus(200)
            ->assertSee('Welcome: luis your nickname is: imyosoy');
    }

    /** @test */
    function it_welcome_users_without_nickname(){
        $this->get('greeting/luis')
            ->assertStatus(200)
            ->assertSee('Welcome: luis');
    }
}
