<?php

function language_list(...$languages) {
    return $languages;
}

function add_to_language_list($languages, $language):array {
    $languages[] = $language;
    return $languages;
}

function prune_language_list($languages):array {
    array_shift($languages);
    return $languages;
}

function current_language($languages) {
    $first_item = $languages[0];   
    return $first_item;    
}

function language_list_length($languages) {
    return count($languages);    
}