for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        cp $f/bets.php $f/bets1.php;
    fi
done