(function($){var nooOpenHouse={url:openHouseL10n.home_url+'wp-admin/customize.php',initialize:function(){iThis=this;iThis.build();},build:function(){var iThis=this;nooOpenHouse=$("<div />").attr("id","nooOpenHouse").addClass("noo-open-house visible-md visible-lg").append($("<a />").addClass("demo-customizer-link").attr("href","javascript:void(0)").append($("<h4 />").addClass("selector-title").html("Live Customizer"),$("<div />").addClass("icon-wrap").append($("<i />").addClass("fa fa-eye"))));$("body").append(nooOpenHouse);nooOpenHouse.find(".demo-customizer-link").hover(function(e){e.preventDefault();if(!nooOpenHouse.hasClass("active")){nooOpenHouse.animate({left:"0"},300).addClass("active");}},function(e){if(nooOpenHouse.hasClass("active")){nooOpenHouse.animate({left:"-"+ nooOpenHouse.width()+"px"},300).removeClass("active");}});nooOpenHouse.find(".demo-customizer-link").click(function(e){e.preventDefault();$.ajax({type:'POST',url:openHouseL10n.ajax_url,data:{'action':'noo_demo_customizer_login','nonce':openHouseL10n.nonce},success:function(){window.location.replace(iThis.url);},error:function(errorThrown){}});});}};if((typeof nooCustomizerL10n==='undefined')||(nooCustomizerL10n.is_preview!=="true")){nooOpenHouse.initialize();}})(jQuery);