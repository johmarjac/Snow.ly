<template>
    <ul id="header-menu">
        <li v-for="header in headers">
            <a :href="header.link">{{ header.text }}</a>
            <ul>
                <li v-for="subheader in header.subheaders">
                    <a :href="subheader.link">{{ subheader.text }}</a>
                </li>
            </ul>
        </li>
    </ul>
</template>

<script>
    var headers = []

    var hasBigHeaders = ($('h3').length > 0);

    if( !hasBigHeaders )
        headers.push({ text: '', link: '', subheaders: [] })

    $('h3, h4').each(function(i, e)
    {
        var header = { text: e.textContent, link: e.textContent.replace(/ /gm, "-").toLowerCase() }

        $(e).prepend(`<a name='${header.link}'></a>`)

        header.link = "#" + header.link
        if(e.tagName == "H3")
        {
            header.subheaders = []

            headers.push(header)
        }
        else
        {
            headers[headers.length - 1].subheaders.push(header)
        }
    })

    export default
    {
        data: () =>
        ({
            headers: headers
        }),
    }
</script>
