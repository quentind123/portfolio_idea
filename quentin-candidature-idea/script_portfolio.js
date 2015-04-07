
document.write('<div id="hp" style="position:fixed; z-index:5000; bottom:30%; right:3%; display:none;"><a href="javascript:;" onclick="retourHaut();"><img src="src/img/arrow.png" alt="Haut de Page"  width="30px" height="30px"/></a></div>');
    function retourHaut() {
        if (navigator.appName == "Microsoft Internet Explorer"){
            var scroll = document.documentElement.scrollTop;
        }
    
        else {
            var scroll = window.pageYOffset;
        }
    
        for (var i = 0; i < scroll; i++){ 
            scrollBy(0,-35); 
        }
    }
    
    function scrollingDetector(){
        if (navigator.appName == "Microsoft Internet Explorer"){
            var position=document.documentElement.scrollTop;
        }
    
        else {
            var position = window.pageYOffset;
        }
    
        if (position >= 250) {
            document.getElementById('hp').style.display = "block";
        }
    
        else {
            document.getElementById('hp').style.display = "none";
        }
    }
    
setInterval("scrollingDetector()", 250);



