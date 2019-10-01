$(document).ready(function(){
    
    $('#pokelist').on('change', function(){
        var link = this.value;
        $.ajax({type: 'post', url: "getDetails.php", data: {'id': link}, success: function(result){
            $("#details").html(result);
        }});
    });
    
    $('#searchList').keyup(function() {
        var filter = $(this).val();
        $('#pokelist option').each(function() {
            if ($(this).text().includes(filter)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
  
});