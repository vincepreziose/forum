<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function test_a_user_can_browse_threads()
    {
        $this->actingAs(User::factory()->create());

        $thread = Thread::factory()->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title);
    }

    /** @test */
    public function test_a_user_can_read_a_single_thread()
    {
        $this->actingAs(User::factory()->create());

        $thread = Thread::factory()->create();

        $response = $this->get('/thread/' . $thread->id);
        $response->assertSee($thread->title);
    }
}
