<?php

namespace App\Events;

use App\Models\MessageDetail;
use App\Models\MessageRoom;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public $messageRoom;

    public $messageDetail;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, MessageRoom $messageRoom, MessageDetail $messageDetail)
    {
        $this->user = $user;
        $this->messageRoom = $messageRoom;
        $this->messageDetail = $messageDetail;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat-app');
    }
}
