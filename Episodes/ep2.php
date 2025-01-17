<?php

class User
{
    public function profile()
    {
        //return new Profile;
        return null;
    }
}

class Profile
{
    public function employement()
    {
        return 'web developer';
    }
}

$user = new User();

//echo $user->profile()->employement();

//-------------------------------------
//$profile = $user->profile();
//
//if ($profile) {
//    echo $profile->employement();
//}

//--------------------------------------
//echo $user->profile()?->employement();

echo $user ->profile()?->employement() ?? 'Not Provided';

//The Nullsafe Operator
//This operator - represented as a question mark - allows you to call a method on the result of any expression if it does not evaluate to null.