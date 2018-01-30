<?php
/* Validate a color
 *
 * @param String color
 * @return boolean
 */
function validColor($color) {
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($string){
    return isset($string) && ctype_alpha($string);
}

$errors = array();

if (!validColor($color)) {
    $errors['color'] = "Please enter a valid color.";
}

if (!validString($name)) {
    $errors['name'] = "Please enter a valid string.";
}

if (!validString($type)) {
    $errors['type'] = "Please enter a valid string.";
}
$f3->set('errors', $errors);
$success = sizeof($errors) == 0;