$( document ).ready(function()
{
    $('.custom-file input').change(function(e)
    {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
    });

    $('.submit-on-change').change(function(e)
    {
        $( this ).each(function(i, e)
        {
            if( e.closest('form').__vue__ )
                e.closest('form').__vue__.onSubmit()
            else
                $( this ).closest('form').submit()
        })
    })

    $('*[data-close-on-click]').click(function(e)
    {
        $( this ).closest($( this ).data('close-on-click')).remove();
    })
})
