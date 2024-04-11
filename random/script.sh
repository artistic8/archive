for f in `ls [0-9]*`; do
        php bets.php $f;
done