<?php
/* Validate a color
 *
 * @param String color
 * @return boolean
 */
function validColor($color) {
    global $f3;
    return in_array($color, $f3-get('colors'));
}

function validString($string){
    return isset($string) && ctype_alpha($string);
}

$errors = array();

if (!validColor($color)) {
    $errors['color'] = "Please enter a valid color.";
}

if (validString($string)) {
    $errors['string'] = "Please enter a valid string.";
}

$success = sizeof($errors) == 0;