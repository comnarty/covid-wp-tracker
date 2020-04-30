(function( $ ) {
	'use strict';
	$(document).ready(function(){
	// API URL's //	
    let url = "//corona.lmao.ninja/V2/all";
    let urlt = "//corona.lmao.ninja/V2/countries/sudan";
    //Fetch Stats for Total //
    $.getJSON(url,function(data,status){
        $("#covid19-total-confirm").append(data["cases"]);
        $("#covid19-total-recoverd").append(data["recovered"]);
        $("#covid19-total-dead").append(data["deaths"]); 
		$(".covid-wp-loading1").fadeOut("slow");
    }).fail(function () {
        $("#corona-down").html('The API server may be down, please check your firewall settings and try again later.'); 
    });
	//Fetch Stats for Sudan//
	$.getJSON(urlt,function(data,status){
        $("#covid19-sudan-confirm").append(data["cases"]).cases ? data["0"].cases : ' لايوجد';
        $("#covid19-sudan-recoverd").append(data["recovered"].recovered ? data["0"].recovered : ' لايوجد'); 
        $("#covid19-sudan-dead").append(data["deaths"]).deaths ? data["0"].deaths : ' لايوجد'; 
        $(".covid-wp-loading2").fadeOut("slow");
    }).fail(function () {
        $("#corona-down").html('The API server may be down, please check your firewall settings and try again later.'); 
    });
});
})( jQuery );