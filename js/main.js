$(document).ready(function(){
    $('.ajax_post').click(function (event){
        event.preventDefault();
        const id=$(this).attr("data-id");
     
        $.ajax({
            url: `ajax_post.php?id=${id}`,
            type:'post',
            data:{id: id},
            success: function(response){
                $('.modal-body').html(response);

            }
        });


    });
});