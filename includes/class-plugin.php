<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WPHI_Plugin {

    public function init() {
         error_log("init");
        // Plugin initialization will go here.
        add_action('init', array($this, 'test_function'));
   add_filter(
    'the_title',
    array( $this, 'test_filter' )
);
add_action(
    'init',
    array( $this, 'callback_a' ),
    5
);

add_action(
    'init',
    array( $this, 'callback_b' ),
    10
);
add_action(
    'init',
    array( $this, 'callback_c' ),
    20
);
    }
   

    public function activate() {
        // Plugin activation logic will be added here later.
    }

    public function deactivate() {
        // Plugin deactivation logic will be added here later.
    }
    public function test_function(){
        error_log("Wp hook fired!!");
    }

public function test_filter( $title ) {
    return $title . ' | Hook Inspector Test';
}
public function callback_a() {
    // error_log( 'Priority 5' );
    error_log( 'Callback A' );
}

public function callback_b() {
    //  error_log( 'Priority 10' );
    error_log( 'CALLBACK B' );
}
public function callback_c() {

    error_log( 'CALLBACK C' );
}
}