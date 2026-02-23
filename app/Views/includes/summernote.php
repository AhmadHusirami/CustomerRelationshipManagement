<?php

load_css(array(
    "assets/js/summernote/summernote.css",
));

$summernote_locale = app_lang('language_locale_long');
if ($summernote_locale === "ar-SA") {
    $summernote_locale = "ar-AR"; // bundled Summernote Arabic file uses ar-AR
}

load_js(array(
    "assets/js/summernote/summernote.min.js", 
    "assets/js/summernote/lang/summernote-" . $summernote_locale . ".js"
));
