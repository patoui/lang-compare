<?php

namespace Tests\Feature;

use App\Comparison;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuggestionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_gets_suggestions()
    {
        // Arrange
        $arrayKeyExists = factory(Comparison::class)->create([
            'lang' => 'php',
            'method' => 'array_key_exists',
            'url' => 'http://php.net/manual/en/function.array-key-exists.php',
        ]);
        $arrayKeyFirst = factory(Comparison::class)->create([
            'lang' => 'php',
            'method' => 'array_key_first',
            'url' => 'http://php.net/manual/en/function.array-key-first.php',
        ]);
        $arrayKeyLast = factory(Comparison::class)->create([
            'lang' => 'php',
            'method' => 'array_key_last',
            'url' => 'http://php.net/manual/en/function.array-key-last.php',
        ]);
        $arrayKeys = factory(Comparison::class)->create([
            'lang' => 'php',
            'method' => 'array_keys',
            'url' => 'http://php.net/manual/en/function.array-keys.php',
        ]);

        // Act
        $response = $this->getJson('/api/suggestion?q=array_ke&lang=php');

        // Assert
        $response->assertSuccessful();
        $response->assertExactJson([
            'array_key_exists',
            'array_key_first',
            'array_key_last',
            'array_keys',
        ]);
    }
}
