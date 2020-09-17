<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * ReplyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a new reply to a thread
     *
     * @param Thread $thread
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Thread $thread, Request $request)
    {
        $thread->addReply([
            'body' => $request->body,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
