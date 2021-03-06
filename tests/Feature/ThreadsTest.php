<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /** @test */
    public function test_a_user_can_browse_threads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
