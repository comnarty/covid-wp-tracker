# covid WP Tracker
A small wordpress Plugin to fetch Covid-19 Stats for Total and Sudan in specific.


### Plugin Contents:
.
├── inc/
│   ├── class-data.php                     - The file that defines the core plugin class.
│   └── class-loader.php                   - Register all actions and filters for the plugin.
│   
├── pub/
│   ├── assets/                            
│   │── css/                            
│   │    ─ publisc.css                     - CSS for front-end side.
│   │── js/                             
│   │     ─ public.js                      - js file to fetch API data.
│   │── images/                         
│   │     ─ loading.svg                    - Small loading svg during loading data.
│   ├── class-public.php                   - Calling Public files.
│   └── index.php                          
└── covid-wp-tracker.php                   - The plugin main file.

If You want to use it for another country just change (let urlt) value in /pub/assets/js/public.js file, and change the the country name in /inc/class-data.php.

# This plugin use the below API :
 https://github.com/NovelCOVID/API
