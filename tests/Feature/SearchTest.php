<?php

namespace Tests\Feature;

use App\Comparison;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_search()
    {
        // Arrange
        $php = factory(Comparison::class)->create([
            'lang' => 'php',
            'method' => 'array_search',
        ]);
        $javascript = factory(Comparison::class)->create([
            'lang' => 'javascript',
            'method' => 'indexOf',
        ]);
        $javascriptTwo = factory(Comparison::class)->create([
            'lang' => 'javascript',
            'method' => 'findIndex',
        ]);
        $php->matches()->attach($javascript);
        $php->matches()->attach($javascriptTwo);

        // Act
        $response = $this->get('/api/search?q=array_search&lang=php');

        // Assert
        $response->assertSuccessful();
        $response->assertExactJson([
            [
                'id' => 1,
                'lang' => 'javascript',
                'method' => 'indexOf'
            ],
            [
                'id' => 2,
                'lang' => 'javascript',
                'method' => 'findIndex'
            ]
        ]);
    }
}
