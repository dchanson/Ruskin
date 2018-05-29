# Developer Notes

## Fixing `gloss_textual` problems
To replace all occurances of `<ref type="gloss" target="*_textual.php">` to
`<ref type="gloss_textual" target="*_textual.php">`, use the following
find/replace options:

Find: `<ref\s+type="gloss"\s+target="(\w+_textual\.php[#\w]*)"\s*(/?>)`
Replace: `<ref type="gloss_textual" target="$1" $2`

## Merging organized git branches
* Pull latest on master
* Checkout 253c976~ on a new branch
* Merge 253c976 on this branch
* Resolve conflicts. General rule of thumb: accept ours on merge conflict
* Merge the organized branch to this branch. General rule of thumb: accept ours
on merge conflict

And we're done.
