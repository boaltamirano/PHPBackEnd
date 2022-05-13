<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ofertas;
use Illuminate\Database\Eloquent\Collection;

class OfertasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_ofertas_has_many_posts()
    {
        $ofertas = new Ofertas;
        $this->assertInstanceOf(Collection::class, $ofertas->posts);
    }
}
