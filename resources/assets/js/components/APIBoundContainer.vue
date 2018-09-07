<template>
    <div>
        <slot :selectedId="selectedId" :results="results"></slot>
    </div>
</template>

<script>
    export default
    {
        props: ['url'],
        
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
