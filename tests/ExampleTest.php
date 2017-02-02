<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    /*public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }*/

    public function testasd()
    {
        $this->assertTrue(true);
    }

    public function testHome()
    {
        //$this->withoutMiddleware();
        $this->visit('/')->see('Home');
    }

    public function testForm()
    {
        Session::start();
        $response = $this->call('POST', '/apply-for-attendance', ['name' => 'Taylor', '_token' => csrf_token()]);
        $this->assertResponseOk();//->assertRedirectedTo('/apply-for-attendance');
    }
}
