<template>
    <highlight>
        <slot></slot>
    </highlight>
</template>

<script>
    import hljs from 'highlight.js'
    import Highlight from 'vue-Highlight-component'

    export default
    {
        data: () =>
        ({
            code: 'code',
        }),

        components:
        {
            Highlight,
        }
    }
</script>
