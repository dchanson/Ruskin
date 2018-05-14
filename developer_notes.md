# Developer Notes

* To replace all occurances of `<ref type="gloss" target="*_textual.php">` to
`<ref type="gloss_textual" target="*_textual.php">`, use the following
find/replace options:

Find: `<ref\s+type="gloss"\s+target="(\w+_textual\.php[#\w]*)"\s*(/?>)`
Replace: `<ref type="gloss_textual" target="$1" $2`
