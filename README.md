# covid WP Tracker
a small wordpress Plugin to fetch Covid Stats for Total and Sudan specific Stats.
├── inc/
│----── class-data.php                     - The file that defines the core plugin class.
│----── class-loader.php                   - Register all actions and filters for the plugin.
│ -...   
│ ── pub/
│----── assets/                            - character maps (required by core)
│-------── css/                            - PDF file for testing purposes
│          publisc.css                     - helpful debugging features
│-------── js/                             - images for the viewer and annotation icons
│          public.js                       - translation files
│-------── images/                         - viewer style sheet
│          loading.svg                     - viewer layout
│---├── class-public.php                   - viewer layer
│---└── index.php                          - viewer layer's source map
└── covid-wp-tracker.php

If You want to use it for another country just change (let urlt) value in /pub/assets/js/public.js file, and change the the country name in /inc/class-data.php.

# This plugin use the below API :
 https://github.com/NovelCOVID/API
