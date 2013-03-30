<?php header("Content-Type: text/cache-manifest"); ?>
CACHE MANIFEST
#explicitly state which files to cache
offline.js
offline.css
index.htm
img/image-online.png

# fallback for images and any page not in cache
# fallback resources implicitly cached
FALLBACK:
img/ img/image-offline.png
/  fallback.htm

# the following won't work
#    img/*.png img/offline-image-offline.png
#    *.png
#    https://raw.github.com/CornerGeeks/HTML-5-offline/master/img/cornergeeks.jpg  img/offline-image-offline.png

# load any image / file from 3rd party sites
# comment out * and corner geek logo will not load since it is on github
NETWORK:
* 