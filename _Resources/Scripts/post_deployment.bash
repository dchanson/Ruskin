#!/bin/bash
echo "Running post deployment script"

echo "current working directory: $(pwd)"
echo "Changing permissions on scss_cache directory"
mkdir -p private/css_styles/scss_cache
chmod o+rwx private/css_styles/scss_cache


echo "Complete."