<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://www.soundslates.com/js/lib/history/html4+html5/jquery.history.js"></script> 
 
<ul class="content_links"> 
    <li><a href="/test/op.php">Main</a></li> 
    <li><a href="/test/op1.php">Content page 1</a></li> 
    <li><a href="/test/op2.php">Content page 2</a></li>     
</ul> 
 
<div id="content"> 
    Load Here 
</div> 
 
<script> 
    function isPushstateSupport(){
        return (window.history && history.pushState);
    }
$(function() { 
    
    // Prepare 
    var History = window.History; // Note: We are using a capital H instead of a lower h 
    
    if ( !History.enabled ) {     
         // History.js is disabled for this browser. 
         // This is because we can optionally choose to support HTML4 browsers or not. 
        return false; 
    } 
 
    // Bind to StateChange Event 
    History.Adapter.bind(window,'statechange',function() { // Note: We are using statechange instead of popstate 
        var State = History.getState(); 
        
        $('#content').load(State.url);         
    }); 
 
    $('a').click(function(evt) {        
        //alert('Click') 
        evt.preventDefault(); 
        History.pushState(null, $(this).text(), $(this).attr('href')); 
    }); 
}); 
</script>