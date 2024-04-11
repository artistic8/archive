for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "random" ]; then
        php bets.php $f;
    fi
done