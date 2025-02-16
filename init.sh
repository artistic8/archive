index=34;
for f in 20*; do
    if [ -d "$f" ]; then
        rm -Rf $f;
        for g in 20*; do
            if [ -d "$g" ] && [ $g != "archive" ]; then
                rm -Rf $g;
                php populate.php;
                cp history.php history$index.php;
                git checkout $g;
                git checkout history.php;
                index=$((index+1));
            fi
        done
        git checkout $f/;
    fi
done