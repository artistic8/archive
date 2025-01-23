for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        rm -Rf $f;
        php populate.php;
        php minpopulate.php;
        php maxpopulate.php;
        php favpopulate.php;
        php allfavpopulate.php;
        git checkout $f/;
        php bets.php $f;
        git checkout history.php;
        git checkout favhistory.php;
        git checkout allfavhistory.php;
    fi
done