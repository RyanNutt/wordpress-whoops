## WordPress Whoops Plugin

Over the past year or so I've been doing quite a bit of development with Laravel. But I still really like WordPress. There are a couple of libraries in Laravel that I really miss though when I'm working on WordPress plugins.  

The first one is the outstanding [filp/whoops](https://github.com/filp/whoops/) library. It catches exceptions and makes it much easier to figure out what's going on. 

The other is the `dump()` and `dd()` methods from the `syfony/var-dumper` package. 

With this plugin activated, both of these libraries are loaded so you can use them while developing your plugins or themes. But they're only loaded when `WP_DEBUG` is `true`.

Probably not a plugin to use on a production server. 

### Setup

There really isn't any. Install it into a folder in `/wp-content/plugins` like any other plugin (I use `/wp-content/plugins/wordpress-whoops`) and activate. There aren't any settings. When activated, it's working. When deactivated, it's not. You do need to set `WP_DEBUG` to true. 

### Credits

99.9% of the credit for this belongs to [Filipe Dobreira](https://github.com/filp) for `Whoops` and the authors of `var-dumper`.  The only thing I did was wrap them in about 5 lines of PHP to make it work as a WordPress plugin. 

