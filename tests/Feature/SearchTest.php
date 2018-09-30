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
            'url' => 'http://php.net/manual/en/function.array-search.php',
        ]);
        $javascript = factory(Comparison::class)->create([
            'lang' => 'javascript',
            'method' => 'indexOf',
            'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/indexOf',
        ]);
        $javascriptTwo = factory(Comparison::class)->create([
            'lang' => 'javascript',
            'method' => 'findIndex',
            'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/findIndex',
        ]);
        $php->matches()->attach($javascript);
        $php->matches()->attach($javascriptTwo);

        // Act
        $response = $this->get('/api/search?q=array_search&lang=php');

        // Assert
        $response->assertSuccessful();
        $response->assertExactJson([
            'comparison' => [
                'id' => 1,
                'lang' => 'php',
                'method' => 'array_search',
                'url' => 'http://php.net/manual/en/function.array-search.php',
            ],
            'matches' => [
                [
                    'id' => 1,
                    'lang' => 'javascript',
                    'method' => 'indexOf',
                    'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/indexOf',
                ],
                [
                    'id' => 2,
                    'lang' => 'javascript',
                    'method' => 'findIndex',
                    'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/findIndex',
                ]
            ]
        ]);
    }
}
