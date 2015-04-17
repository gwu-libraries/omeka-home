# omeka-home
Custom home page for GW Libraries Omeka instance
------------------------------------------------

A portal for our Omeka instance using Omeka APIs to expose content like newly added items and featured exhibits combined with other online collections and content housed outside of Omeka.

Configuration:

Moves files to a directory in root called "portal"

Set .htaccess to redirect root traffic to /portal/index.php
``
# redirect to root traffic from /var/www/index.php to /portal/index.php (custom portal) 
RedirectMatch 303 ^/?$ /portal/index.php
``
