<?php

function fullpath($path, $args = '', $protocol = 'http') {
    if (is_array($args)) {
        $query_string = '?'.http_build_query($args, '\n');
    } else {
        $query_string = '';
    }

    return $protocol.'://'.$path.$query_string;

}