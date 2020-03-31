# covid WP Tracker
A small wordpress Plugin to fetch Covid Stats Worldwide and for Sudan specificly.

### Plugin Contents:
------------
-  inc/class-data.php                   	|       file that defines the core plugin class
- inc/class-loader.php          	     	|       register all actions and filters for the plugin
- pub/assets/css/public.css		            |       stylesheet for front-end side
- pub/assets/js/public.js    	    	    |       fetch COVID-19 API
- pub/assets/images/loading.svg         	|       loading img during loading data
- pub/class-public.php                	    |       register front-end files
- covid-wp-tracker.php        	    	    |       plugin main php file


# If You want to use it for another country just change (let urlt) value in /pub/assets/js/public.js file, and change the the country name in /inc/class-data.php.

### This plugin use the below API :
 https://github.com/NovelCOVID/API
