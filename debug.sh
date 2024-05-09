for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "random" ]; then
        rm -Rf $f;
        php populate.php;
        git checkout $f/;
        php bets.php $f;
        git checkout winhistory.php;
    fi
done