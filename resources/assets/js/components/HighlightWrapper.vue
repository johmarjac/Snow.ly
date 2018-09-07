<template>
    <highlight-code :lang="language">
        <slot></slot>
    </highlight-code>
</template>

<script>
    export default
    {
        props: ['language'],
    }
</script>
