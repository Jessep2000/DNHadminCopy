<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IsAccountOnIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexViewHasAvailableAccounts()
    {
        $response = $this->get('/account');

        $response->assertStatus(200);
        $response->assertViewIs('account.index');
        $response->assertViewHas('accounts');
    }
}
