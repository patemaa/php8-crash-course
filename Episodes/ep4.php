<?php

class User
{
    //protected $name;

    public function __construct(protected $name)
    {
        //$this->name = $name;
    }
}
class Plan
{
    //protected $name;

    public function __construct(protected string $name = 'monthly')
    {
        //$this->name = $name;
    }
}

class Signup
{
    //protected User $user;
    //protected Plan $plan;

    public function __construct(protected User $user, protected Plan $plan)
    {
        //$this->user = $user;
        //$this->plan = $plan;
    }

    public function handle()
    {
        echo 'signed in!';
    }
}

$user = new User('John Doe');
$plan = new Plan();

$signup = new SignUp($user, $plan);
$signup->handle();

// Constructor property promotion, allows you to remove much of the tedious class initialization boilerplate code that you likely write for every any that accepts a dependency.