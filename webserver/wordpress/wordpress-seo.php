<?php

// Disable JSON-LD
// https://json-ld.org/
// https://developers.google.com/search/docs/guides/intro-structured-data
add_filter( 'wpseo_json_ld_output', '__return_empty_array' );
