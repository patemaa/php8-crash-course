<?php

////$map = new WeakMap();
//
//$obj = new StdClass();
//
//$store = new SplObjectStorage();
//
//$store[$obj] = 'foobar';
//
//var_dump($store[$obj]);
//
//unset($obj);
//
//var_dump($store->current());

//--------------------------------
//$obj = new StdClass();
//
//$store = new WeakMap();
//
//$store[$obj] = 'foobar';
//
//var_dump($store[$obj]);
//
//unset($obj);
//
//var_dump($store);

interface Event
{

}

class SomeEvent implements Event
{

}

class AnotherEvent implements Event
{

}

class Dispatcher
{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispatch(Event $event)
    {
        $this->incrementDispatches($event);
        //dispatch the event
    }

    protected function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;
//        if (! isset($this->dispatchCount[$event])) {
//            $this->dispatchCount[$event] = 0;
//        }
        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();

$event = new SomeEvent();
$dispatcher->dispatch($event);


$anotherEvent = new AnotherEvent();
$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);

//Weak Maps are effectively key value stores that allow for garbage collection.
