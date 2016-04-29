<?php
/*
 * Functions for the YUMM!! theme.
 *
 * Functions will be pluggable in child themes via the use of !function_exists() prior to definition.
 */

/*
 * Array of files to include.
 */
$files = [
    "lib/init.php",
    "lib/cpt.php",
    "lib/scripts.php",
    "lib/template-tags.php",
    "lib/extras.php"
];

/*
 * Loop through and include all the files in $files Array.
 */
foreach ($files as $file) {
    include $file;
}

