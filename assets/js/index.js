$(function() {
    $('#example').DataTable();

    $('#wpForm').on("submit", function() {
        $.post(url+"/api/get_nonce/?controller=posts&method=create_post", function(response) {
            let nonce = response.nonce;
            const frmData= "nonce="+nonce+"&"+$('#wpForm').serialize()+"&status=publish";
            $.post(url+"/api/posts/create_post/", frmData, function(response) {
                alert("post hax been created");
                setTimeout(function() {
                    location.reload(); 
                }, 1200);
            });
        });
    });
});
