<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipateInForumTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function an_unauthenticated_user_may_not_participate_in_forum_threads()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->withoutExceptionHandling();
        $this->post('threads/1/replies', []);

    }

    /** @test */
    function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->be(User::factory()->create());

        $thread = Thread::factory()->create();

        $this->withoutExceptionHandling();

        $reply = Reply::factory()->make();
        $this->post($thread->path().'/replies', $reply->toArray());

        $this->get($thread->path())
            ->assertSee($reply->body);
    }
}
