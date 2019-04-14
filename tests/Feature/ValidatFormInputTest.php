<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ValidatFormInputTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIfThereIsInputInForm()
    {
        $this->visit('/account/edit')
            ->type('Taylor', 'name')
            ->check('terms')
            ->press('submit')
            ->seePageIs('/account');
    }
}
