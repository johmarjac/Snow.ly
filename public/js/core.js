$( document ).ready(function()
{    
    $('.custom-file input').change(function(e)
    {
        console.log('noh')
        $(this).next('.custom-file-label').html(e.target.files[0].name);
    });
})
