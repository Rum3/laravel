<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Message;

class RecordContactMessage implements ShouldQueue
{
    public function handle($event)
    {
        $messageData = $event->message;

        Message::create([
            'name' => $messageData['name'],
            'email' => $messageData['email'],
            'subject' => $messageData['subject'],
            'message' => $messageData['message'],
        ]);
    }
}
