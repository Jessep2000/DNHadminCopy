<?php

namespace Tests\Feature;

use Tests\TestCase;

class ShipsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndexViewHasAvailableShips()
    {
        $response = $this->get('/ships');

        $response->assertStatus(200);
        $response->assertViewIs('Ships.shipsIndex');
        $response->assertViewHas('Ships');
    }

    public function testItWritesGoodFormToDatabaseAndRedirectsToIndex()
    {
        $token = 'covfefe';
        $Name = 'Stomme cursus';
        $Size = 90;
        $image_url = 'laravel.jpg';

        $response = $this
            ->withSession(['_token' => $token])
            ->post(
                '/ships',
                [
                    '_token' => $token,
                    'Name' => $Name,
                    'Size' => $Size,
                    'image_url' => $image_url,
                ]
        );
        $this->assertDatabaseHas(
            'ships',
            [
                'Name' => $Name,
                'Size' => $Size,
                'image_url' => $image_url
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect('ships');
    }
}
