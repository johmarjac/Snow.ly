<template>
    <iframe :srcdoc="rawHtml + rawStyle" v-escape>
        <slot name="body"></slot>
        <slot name="style"></slot>
    </iframe>
</template>

<script>
    export default
    {
        props: ['html'],

        data: () =>
        ({
            rawHtml: '',
            rawStyle: '',
        }),

        mounted()
        {
            var rawHtml = ''

            this.$slots.body.forEach(function(e)
            {
                rawHtml += e.elm.outerHTML || e.elm.textContent
            })

            this.rawHtml = rawHtml
            this.$el.textContent = ""

            this.rawStyle = "<style>" + this.$slots.style[0].text + "</style>"
        },

        directives:
        {
            escape:
            {
                bind(el)
                {
                    const html = el.innerHTML

                    el.textContent = html;
                }
            }
        }
    }
</script>
