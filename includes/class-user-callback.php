<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
class User{
    public static function say_hello(){
        error_log("Hello") ;
    }
    public static function say_hello2( $name, $age ) {
        error_log( "Hello {$name}, you are {$age} years old." );
    }
//    $user = new User;

}
 User::say_hello();
 add_action(
    'wphi_user_greeting',
    array( 'User', 'say_hello2' ),
    10,
    2
);

do_action(
    'wphi_user_greeting',
    'Aishvarya',
    25
);