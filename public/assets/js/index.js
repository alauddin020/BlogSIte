$(function()
{
	$(document).on("click","#delete",function(e)
    {
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are You want to delete this",
            text:  "once,delete",
            icon: "warning",
            buttons: ["Cancel", true],
            dangerMode: true,
        })
        .then((willDelete)=> 
        {
            if(willDelete)
            {
                swal("Poof! Your imaginary file has been deleted!", {
			      icon: "success",
			    });

                window.location.href=link;
            }
            else
            {
                swal("Data save");
            }
        });
    });
});