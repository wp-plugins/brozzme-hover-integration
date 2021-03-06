<?php
/*!
 * Set of functions created by Benoît Faure to choose and play with Hover.css (Ian Lunn)
 * Version: 1.0.0
 * Author: Benoît Faure
 * Author URL: http://brozzme.com
 * Github: https://github.com/Benoti/Brozzme Hover
 *
 * MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Hover.css (http://ianlunn.github.io/Hover/)
 * Version: 2.0.0
 * Author: Ian Lunn @IanLunn
 * Author URL: http://ianlunn.co.uk/
 * Github: https://github.com/IanLunn/Hover

 * Made available under a MIT License:
 * http://www.opensource.org/licenses/mit-license.php

*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$hover_class_array = array(
    'version'        => '2.0.0',
    'prefix'         => 'hvr-',
    'hoverclass'     => array (
        'transition' => array(
            'grow' => 'Grow', 'shrink' => 'Shrink', 'pulse' => 'Pulse', 'pulse-grow' => 'Pulse grow', 'pulse-shrink' => 'Pulse Shrink', 'push' => 'Push', 'pop' => 'Pop', 'bounce-in' => 'Bounce in',
            'bounce-out' => 'Bounce out', 'rotate' => 'Rotate', 'grow-rotate' => 'Grow rotate', 'float' => 'Float', 'sink' => 'Sink', 'bob' => 'Bob', 'bob-float' => 'Bob float', 'hang' => 'Hang',
            'hang-sink' => 'Hang sink', 'skew' => 'Skew', 'skew-forward' => 'Skew forward', 'skew-backward' => 'Skew backward', 'wobble-vertical' => 'Wobble vertical', 'wobble-horizontal' => 'Wobble horizontal',
            'wobble-to-bottom-right' => 'Wobble to bottom right', 'wobble-to-top-right' => 'Wobble to top right', 'wobble-top' => 'Wobble top', 'wobble-bottom' => 'Wobble bottom',
            'wobble-skew' => 'Wobble skew', 'buzz' => 'Buzz', 'buzz-out' => 'Buzz out', 'wobble-to-bottom-left' => 'Wooble to bottom left', 'wobble-to-top-left' => 'Wobble to top left'
        ),
        'background' => array(
            'fade' => 'Fade', 'sweep-to-right' => 'Sweep to right', 'sweep-to-left' => 'Sweep to left', 'sweep-to-bottom' => 'Sweep to bottom', 'sweep-to-top' => 'Sweep to top', 'bounce-to-right' => 'Bounce to right',
            'bounce-to-left' => 'Bounce to left', 'bounce-to-bottom' => 'Bounce to bottom', 'bounce-to-top' => 'Bounce to top', 'radial-out' => 'Radial out', 'radial-in' => 'Radial in', 'rectangle-in' => 'Rectangle in',
            'rectangle-out' => 'Rectangle out', 'shutter-in-horizontal' => 'Shutter in horizontal', 'shutter-out-horizontal' => 'Shutter out horizontal', 'shutter-in-vertical' => 'Shutter in vertical',
            'shutter-out-vertical' => 'Shutter out vertical'
        ),
        'border' => array(
            'border-fade' => 'Border fade', 'hollow' => 'Hollow', 'trim' => 'Trim', 'ripple-out' => 'Ripple out', 'ripple-in' => 'Ripple in', 'outline-out' => 'Outline out', 'outline-in' => 'Outline in',
            'round-corners' => 'Round corners', 'underline-from-left' => 'Underline from left', 'underline-from-center' => 'Underline from center', 'underline-from-right' => 'Underline from right',
            'overline-from-left' => 'Overline from left', 'overline-from-center' => 'Overline from center', 'overline-from-right' => 'Overline from right', 'reveal' => 'Reveal', 'underline-reveal' => 'Underline reveal',
            'overline-reveal' => 'Overline reveal'
        ),
        'shadow-glow' => array(
            'glow' => 'Glow', 'shadow' => 'Shadow', 'grow-shadow' => 'Grow shadow', 'box-shadow-outset' => 'Box shadow outset', 'box-shadow-inset' => 'Box shadow inset', 'float-shadow' => 'Float shadow',
            'shadow-radial' => 'Shadow radial'
        ),
        'speech-bubbles' => array(
            'bubble-top' => 'Bubble top', 'bubble-right' => 'Bubble right', 'bubble-bottom' => 'Bubble bottom', 'bubble-left' => 'Bubble left', 'bubble-float-top' => 'Bubble float top', 'bubble-float-right' => 'Bubble float right',
            'bubble-float-bottom' => 'Bubble float bottom', 'bubble-float-left' => 'Bubble float left'
        ),
        'icons' => array(
            'icon-back' => 'Icon back', 'icon-forward' => 'Icon forward', 'icon-down' => 'Icon down', 'icon-up' => 'Icon up', 'icon-spin' => 'Icon spin', 'icon-drop' => 'Icon drop', 'icon-fade' => 'Icon fade',
            'icon-float-away' => 'Icon float away', 'icon-sink-away' => 'Icon sink away', 'icon-grow' => 'Icon grow', 'icon-shrink' => 'Icon shrink', 'icon-pulse' => 'Icon pulse',
            'icon-pulse-grow' => 'Icon pulse grow', 'icon-pulse-shrink' => 'Icon pulse shrink', 'icon-push' => 'Icon push', 'icon-pop' => 'Icon pop', 'icon-bounce' => 'Icon bounce', 'icon-rotate' => 'Icon rotate',
            'icon-grow-rotate' => 'Icon grow rotate', 'icon-float' => 'Icon float', 'icon-sink' => 'Icon sink', 'icon-bob' => 'Icon bob', 'icon-hang' => 'Icon hang', 'icon-hang-sink' => 'Icon hang sink',
            'icon-wobble-horizontal' => 'Icon wobble horizontal', 'icon-wobble-vertical' => 'Icon wobble vertical', 'icon-buzz' => 'Icon buzz', 'icon-buzz-out' => 'Icon buzz out'
        ),
        'curls' => array(
            'curl-top-left' => 'Curl top left', 'curl-top-right' => 'Curl top right', 'curl-bottom-right' => 'Curl bottom right', 'curl-bottom-left' => 'Curl bottom left'
        )
    ),
    'hovertypes' => array('transition'=>'2d Transitions', 'background'=>'Background transitions', 'border'=>'Border transitions',
        'shadow-glow'=>'Shadow and Glow', 'speech-bubbles'=>'Speech Bubbles',
        'icons'=>'Icons', 'curls'=>'Curls')
);
