for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        rm -Rf $f;
        php populate.php;
        php check.php;
        git checkout $f/;
        php bets.php $f;
        php sets.php $f;
        git checkout history.php;
        git checkout condition.php;
    fi
done