for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        php bets.php $f;
        php sortodds.php $f;
    fi
done