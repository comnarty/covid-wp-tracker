# covid WP Tracker
A small wordpress Plugin to fetch Covid Stats Worldwide and for Sudan specificly.
### Plugin Contents:
├-── inc/
│----── class-data.php                     - the file that defines the core plugin class.
│----── class-loader.php                   - register all actions and filters for the plugin.
│-...   
│── pub/
│----── assets/                            
│-------── css/                            
│          publisc.css                     - plugin frontend stylesheet.
│-------── js/                             
│          public.js                       - fetch COVID-19 API URL.
│-------── images/                         
│          loading.svg                     
│---├── class-public.php                   - frontent plugin required files.
│---└── index.php                          
└── covid-wp-tracker.php                   - plugin main php file.

If You want to use it for another country just change (let urlt) value in /pub/assets/js/public.js file, and change the the country name in /inc/class-data.php.

# This plugin use the below API :
 https://github.com/NovelCOVID/API
