<template>
    <form :action="url" method="GET" @submit="onSubmit">
        <slot></slot>
    </form>
</template>

<script>
    export default
    {
        props: ['action'],

        data: () =>
        ({
            url: this.action,
            element: null,
        }),

        mounted()
        {
            this.element = this.$el
        },

        methods:
        {
            onSubmit: function ()
            {
                var elem = this.element

                this.url = this.action.replace(/{(\w+)}/g, function(match)
                {
                    return $( elem ).find(`[name='${match.substring(1, match.length - 1)}']`).val()
                })

                location.href = this.url
            }
        }
    }
</script>
