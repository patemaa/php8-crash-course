<?php declare(strict_types=1);

//class User
//{
//    public function makeFriendsWith(?User $user)
//    {
//        var_dump('yay friends');
//    }
//}
//
//$joe = new User();
//$sam = new User();
//
//$joe->makeFriendsWith(null);

//-----------------------------
//class User
//{
//    // or you can search for params
//    public function makeFriendsWith(User|null $user)
//    {
//        var_dump('yay friends');
//    }
//}
//
//$joe = new User();
//$sam = new User();
//
//$joe->makeFriendsWith(null);

//-----------------------------
class User
{
//    public function cancel(mixed $immediate = false)
//    public function cancel(iterable $immediate = false)
//    public function cancel(callable $immediate = false)
    public function cancel(bool|string $immediate = false)
    {
        var_dump($immediate);
    }

    public function cancelNow()
    {
        $this->cancel(true);
    }

    public function cancelOn(string|DateTime $when)
    {
        $this->cancel($when);
    }
}

$joe = new User();

$joe->cancel();
$joe->cancelNow();
$joe->cancelOn('thursday');

//$joe->cancel(true);
//$joe->cancel(false);
//
//$joe->cancel('next week');


//union types, as well as a new catch-all mixed pseudo-type. We can now - without resorting to docblocks - specify that a method parameter may accept multiple types.
