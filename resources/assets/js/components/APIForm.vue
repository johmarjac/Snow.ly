<template>
    <form :action="action" :method="method">
        <slot :selected="selected" :results="results"></slot>
    </form>
</template>

<script>
    export default
    {
        props: ['action', 'method', 'url'],

        data: () =>
        ({
            results: [],
            selected: 0,
        }),

        created()
        {
            setTimeout(() =>
            {
                axios.get(this.url).then(response => (this.results = response.data))
            }, 500)
        },
    }
</script>
