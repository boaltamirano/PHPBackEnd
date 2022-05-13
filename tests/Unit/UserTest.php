<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_users_has_many_posts()
    {
        $users = new User;
        $this->assertInstanceOf(Collection::class, $users->posts);
    }
}
