<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function can_view_home_page()
    {
        // Act
        $response = $this->get('/');

        // Assert
        $response->assertSuccessful();
        $response->assertSee('search-component');
    }
}
