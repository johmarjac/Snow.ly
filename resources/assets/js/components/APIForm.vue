<template>
    <form :action="action" :method="method">
        <slot :selectedId="selectedId" :results="results"></slot>
    </form>
</template>

<script>
    export default
    {
        props: ['action', 'method', 'url'],

        data: () =>
        ({
            results: [],
            selectedId: 0,
        }),

        created()
        {
            this.$root.$on('update:selectedId', (value) =>
            {
                this.selectedId = value
            })

            setTimeout(() =>
            {
                axios.get(this.url).then(response => (this.results = response.data))
            }, 500)
        },
    }
</script>
