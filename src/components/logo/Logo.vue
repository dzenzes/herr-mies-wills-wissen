<template>
    <img :class="className + ' logo'" :src="path" />
</template>

<script>
export default {
    props: ['path', 'className']
}
</script>

<style lang="scss" scoped>
@import "logo";
</style>