<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReadThreadTest extends TestCase
{

    use RefreshDatabase;

    protected $thread;

    public function setUp():void
    {
        parent::setUp();

        $this->thread = Thread::factory()->create();

    }

    /** @test  */
    function a_user_can_view_all_threads()
    {
        $this->get($this->thread->path())
        ->assertSee($this->thread->title);
    }

    /** @test  */
    function a_user_can_read_a_single_thread()
    {
        $this->get($this->thread->path())
            ->assertSee($this->thread->title);
    }

    /** @test  */
    function a_user_can_read_replies_that_are_associated_with_a_thread()
    {
        $reply = Reply::factory()
            ->create(['thread_id' => $this->thread->id]);

        $this->get($this->thread->path())
            ->assertSee($reply->body);
    }
}
