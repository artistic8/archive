for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        rm -Rf $f;
        php triopopulate.php;
        php winpopulate.php;
        git checkout $f/;
        php bets.php $f;
        git checkout winhistory.php;
    fi
done