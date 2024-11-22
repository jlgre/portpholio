# Portpholio

This is a simple php-based photography portfolio - it currently just display all the photos in a configured directory at a max width of 500px.

Eventually, I want this to:

- [ ] Be styled pretty
- [ ] Support smart-layouts (think like Flickr)
- [x] Load smaller image previews, and only load full-size when clicked

## Set up

This should be ready to use for anyone with a server.

1. `cp conf.example.php conf.php` and fill in the relevant values
1. Fill whatever directory you chose with your photos
1. Run `php mk_previews.php` to generate smaller preview files
1. then set up your server to serve public/index.php
