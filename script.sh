for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "random" ]; then
        # rm -Rf $f;
        # php populate.php;
        # git checkout $f/;
        # php bets.php $f;
        # git checkout winhistory.php;
        cp $f/bets.php $f/alt.php;
    fi
done