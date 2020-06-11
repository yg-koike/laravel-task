<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Http\Requests\CreateChannel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();

        return view('channels/index', [
            'channels' => $channels,
        ]);
    }

    public function new()
    {
        return view('channels/new');
    }

    public function create(CreateChannel $request)
    {
        $channel = new Channel();
        $channel->name = $request->name;
        $channel->save();

        return redirect()->route('tasks.index', [
            'id' => $channel->id,
        ]);
    }
}
