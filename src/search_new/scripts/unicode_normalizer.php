<?php
function normalize_unicode_to_ascii(string $text): string
{
    static $map = [
        // Quotes and Apostrophes
        "\u{2018}" => "'",
        "\u{2019}" => "'",
        "\u{02BC}" => "'",
        "\u{2032}" => "'",
        "\u{201C}" => '"',
        "\u{201D}" => '"',

        // Dashes
        "\u{2013}" => "-",
        "\u{2014}" => "-",
        "\u{2010}" => "-",

        // Common Punctuation
        "\u{0026}" => "&",
        "\u{0040}" => "@",
        "\u{0023}" => "#",
        "\u{002A}" => "*",
        "\u{2038}" => "~",
        "\u{007C}" => "|",
        "\u{3008}" => "<",
        "\u{3009}" => ">",
        "\u{00B6}" => "¶",
        "\u{007E}" => "~",

        // Math and Symbols
        "\u{002B}" => "+",
        "\u{2212}" => "-",
        "\u{00D7}" => "x",
        "\u{00F7}" => "/",
        "\u{003E}" => ">",
        "\u{003C}" => "<",
        "\u{003D}" => "=",
        "\u{00BC}" => "1/4",
        "\u{00BD}" => "1/2",
        "\u{00BE}" => "3/4",
        "\u{0025}" => "%",
        "\u{00A3}" => "£",
        "\u{0024}" => "$",
        "\u{00A2}" => "¢",

        // Letters with accents (normalize to base)
        "\u{00C0}" => "A",
        "\u{00C1}" => "A",
        "\u{00C2}" => "A",
        "\u{00C3}" => "A",
        "\u{00C4}" => "A",
        "\u{00C5}" => "A",
        "\u{00E0}" => "a",
        "\u{00E1}" => "a",
        "\u{00E2}" => "a",
        "\u{00E3}" => "a",
        "\u{00E4}" => "a",
        "\u{00E5}" => "a",
        "\u{00C7}" => "C",
        "\u{00E7}" => "c",
        "\u{00C8}" => "E",
        "\u{00C9}" => "E",
        "\u{00CA}" => "E",
        "\u{00CB}" => "E",
        "\u{00E8}" => "e",
        "\u{00E9}" => "e",
        "\u{00EA}" => "e",
        "\u{00EB}" => "e",
        "\u{00CC}" => "I",
        "\u{00CD}" => "I",
        "\u{00CE}" => "I",
        "\u{00CF}" => "I",
        "\u{00EC}" => "i",
        "\u{00ED}" => "i",
        "\u{00EE}" => "i",
        "\u{00EF}" => "i",
        "\u{00D1}" => "N",
        "\u{00F1}" => "n",
        "\u{00D2}" => "O",
        "\u{00D3}" => "O",
        "\u{00D4}" => "O",
        "\u{00D5}" => "O",
        "\u{00D6}" => "O",
        "\u{00F2}" => "o",
        "\u{00F3}" => "o",
        "\u{00F4}" => "o",
        "\u{00F5}" => "o",
        "\u{00F6}" => "o",
        "\u{00D9}" => "U",
        "\u{00DA}" => "U",
        "\u{00DB}" => "U",
        "\u{00DC}" => "U",
        "\u{00F9}" => "u",
        "\u{00FA}" => "u",
        "\u{00FB}" => "u",
        "\u{00FC}" => "u",
        "\u{00FF}" => "y",
        "\u{0178}" => "Y",
        "\u{00C6}" => "AE",
        "\u{00E6}" => "ae",
    ];

    // Decode numeric and named entities
    $text = html_entity_decode($text, ENT_QUOTES | ENT_XML1, 'UTF-8');

    // Convert all mapped characters
    return strtr($text, $map);
}
