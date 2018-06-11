# Developer Notes

## Fixing `gloss_textual` problems
To replace all occurances of `<ref type="gloss" target="*_textual.php">` to
`<ref type="gloss_textual" target="*_textual.php">`, use the following
find/replace options:

Find: `<ref\s+type="gloss"\s+target="(\w+_textual\.php[#\w]*)"\s*(/?>)`
Replace: `<ref type="gloss_textual" target="$1" $2`

## Discovering duplicates
`name="witnesses" && diff -rq "_Completed/$name" "_In Process/$name" | sort | grep -vE '^Only'`

## Hex Codes
* hyphen (-): `-` (minus sign)
* backslash (&#92;): `&#92;`
* En dash (&ndash;): `&ndash;`
* Em dash (&ndash;): `&mdash;`

## Bibliography format
The bibliography items are in flush and hang indentation.

There are two kinds of bibliographies: books and articles. If article, there will be an `<analytic>` tag.

1. For articles, the general format will be the following:

\<surname\>, \<forename\>. \<analytic/title\>.

For authors,
\<forename\> \<surname\> [, and \<forename\> \<surname\>].

\<monogr/title\>.

\<Vol\>, \<issue\>, \<date\>, \<page number\>. `// (<biblScope>.<biblScope> (<date>): <biblScope>.)`

2. For books, the general format will be the following:

\<surname\>, \<forename\>
[, and \<forename\> \<surname\>].

\<title\>.

Inside \<respStmt\>
\<resp\>
\<forename> \<surname>
[, and \<forename> \<surname>].

If editors,
Ed. \<forename> \<surname>
[, and \<forename> \<surname>].


If publisher first,
\<publisher\>. \<pubPlace\>.
Otherwise,
\<pubPlace\>: \<publisher\>, \<date\>.
