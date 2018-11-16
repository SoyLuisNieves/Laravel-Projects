<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_user_list_page()
    {
        $this->get('/users')
        	->assertStatus(200)
        	->assertSee('List of users');
    }

    /** @test */
    function it_loads_the_user_detail_page(){
    	$this->get('/users/1')
    		->assertStatus(200)
    		->assertSee('Showing users detail: 1');
    }

    /** @test */
    function it_loads_new_user_page(){

        // Ver logs de laravel
        // $this->withoutExceptionHandling();

    	$this->get('/users/new')
    		->assertStatus(200)
    		->assertSee('Create new user');
    }
}
