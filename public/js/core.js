$( document ).ready(function()
{
    $('.custom-file input').change(function(e)
    {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
    });

    $('.submit-on-change').change(function(e)
    {
        $( this ).closest('form').submit();
    })
})
