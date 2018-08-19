<template>
    <ul id="article-show-menu-headers">
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
    $('h3, h4').each(function(i, e)
    {
        var header = { text: e.textContent, link: e.textContent.replace(/ /gm, "-") }

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

    console.log(JSON.stringify(headers))

    export default
    {
        data: () =>
        ({
            headers: headers
        }),
    }
</script>
