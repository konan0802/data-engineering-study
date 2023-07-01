sudo rsync \
  -avz --delete \
  --exclude='.ssh/' \
  --exclude='App.md' \
  --exclude='deploy.sh' \
  --exclude='.bash_logout' \
  --exclude='.bashrc' \
  --exclude='.profile' \
  --exclude='.viminfo' \
  /home/konanforbis/data-engineering-study/Practice/App/ /var/www/html/
