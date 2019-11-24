## WordPress Whoops Plugin

Adds the outstanding [filp/whoops](https://github.com/filp/whoops/) library to WordPress to make it easier to debug issues. 

This really isn't something you should be using in production, although you could. It only loads the Whoops library when in `WP_DEBUG` mode. 

### Setup

There really isn't any. Install it into a folder in `/wp-content/plugins` like any other plugin (I use `/wp-content/plugins/wordpress-whoops`) and activate. There aren't any settings. When activated, it's working. When deactivated, it's not. You do need to set `WP_DEBUG` to true. 

### Credits

99.9% of the credit for this belongs to [Filipe Dobreira](https://github.com/filp).  The only thing I did was wrap it in about 5 lines of PHP to make it work as a WordPress plugin. 

