index=1691;
for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        rm -Rf $f;
        php populate.php;
        cp history.php history$index.php;
        git checkout $f/;
        git checkout history.php;
        index=$((index+1));
    fi
done