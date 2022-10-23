<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

$(document).ready(function(){
    $("#btron").click(function(){
        $("body").removeClass();              
        $("body").addClass("rave");
    });
    $("#btroff").click(function(){
        $("body").removeClass("rave");
    });
});
