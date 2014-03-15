<?php
class UserSeeder
extends DatabaseSeeder
{
    public function run()
    {
        $users =  array();
        foreach ($users as $user)
        {
            User::create($user);
        }
        User::create(array(
                        'username' => "christopher.pitt",
                         "password" => Hash::make("7h3¡MOST!53cu23"),
                         "email" => "chris@example.com"
                         )
                    );
    }
}