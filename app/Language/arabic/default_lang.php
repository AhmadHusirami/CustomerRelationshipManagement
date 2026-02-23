<?php

/*
 * Arabic language pack base.
 *
 * Strategy:
 * 1) Load English defaults (complete key set / safe fallback)
 * 2) Override Arabic locale + RTL settings
 * 3) Merge Arabic translations from custom_lang.php
 *
 * This avoids maintaining a duplicated 2000+ line file and guarantees no missing keys.
 */

$lang = include __DIR__ . '/../english/default_lang.php';

// Locale metadata for Arabic
$lang['language_locale'] = 'ar';
$lang['language_locale_long'] = 'ar-SA';
$lang['text_direction'] = 'rtl';

// Merge Arabic overrides if present
$custom_lang_file = __DIR__ . '/custom_lang.php';
if (is_file($custom_lang_file)) {
    $custom_lang = include $custom_lang_file;
    if (is_array($custom_lang)) {
        $lang = array_merge($lang, $custom_lang);
    }
}

return $lang;
