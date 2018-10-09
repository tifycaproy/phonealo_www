<?php
function fullpath($path, $args = '', $protocol = 'https') {
    if (is_array($args)) {
        $query_string = '?'.http_build_query($args, '\n');
    } else {
        $query_string = '';
    }
    return $protocol.'://'.$path.$query_string; 
}