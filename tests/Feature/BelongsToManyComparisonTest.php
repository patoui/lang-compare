<?php

namespace Tests\Feature;

use App\Comparison;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BelongsToManyComparisonTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function comparison_belongs_to_many()
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

        // Pre-assert
        $this->assertEquals(
            BelongsToMany::class,
            get_class($php->matches())
        );

        // Act
        $php->matches()->attach($javascript);

        // Assert
        $this->assertEquals(
            Collection::class,
            get_class($php->matches)
        );

        $this->assertEquals(
            Comparison::class,
            get_class($php->matches()->first())
        );
    }
}
