for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        rm -Rf $f;
        php populate.php;
        git checkout $f/;
        php bets.php $f;
        php indication.php $f;
        git checkout history.php;
    fi
done