for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "random" ]; then
        php bets.php $f;
        php gen.php $f;
    fi
done
