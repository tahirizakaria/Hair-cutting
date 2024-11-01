<?php

// Initiates a session if none is currently active.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determines the language file to load based on the session and query parameters, defaulting to 'en'.
require get_language_file();
function get_language_file() {
    $_SESSION["lang"] = $_SESSION["lang"] ?? 'en';
    $_SESSION["lang"] = $_GET["lang"] ?? $_SESSION["lang"];

    // Include RTL CSS for Arabic language
    if ($_SESSION["lang"] === 'ar') {
        echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
        echo '<link rel="stylesheet" type="text/css" href="css/style-ar.css">';
    }
    else{
        echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
    }
    return "languages/" . $_SESSION["lang"] . ".php";
}

//Retrieves the translation for a given key from the global language array, or returns the key if not found.
function _first($str) {
    global $lang;
    if(!empty($lang[$str])) {
        return $lang[$str];
    }
    return $str;
}

// Get the current URL without the query string
$current_page = strtok($_SERVER["REQUEST_URI"], '?');

?>
