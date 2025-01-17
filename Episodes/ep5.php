<?php

class Conversation
{
}

$obj = new Conversation();

//switch (get_class($obj)) {
switch ($obj::class) {
    case 'Conversation':
        $type = 'started_conversation';
        break;

    case 'Reply':
        $type = 'replied_to_conversation';
        break;

    case 'Comment';
        $type = 'commented_on_lesson';
        break;
}

// get_class($obj) === $obj::class