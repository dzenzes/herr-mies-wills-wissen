<template>
    <div class="talk-bubble tri-right left-in round">
        <div class="talktext">
            <p>{{text}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['text']
    }
</script>

<style lang="scss" scoped>
    @import "speechbubble";
</style>