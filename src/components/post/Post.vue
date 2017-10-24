<template>
    <div class="post">
        <div class="post__inner">
            <div class="post__image" v-if="image">
                <a :href="link" :title="'Link zur Episode '+title">
                    <img :src="image"/>
                </a>
            </div>

            <div class="post__date">{{date}}</div>
            <h2 class="post__title">
                <a :href="link" :title="'Link zur Episode '+title" class="post__link">{{title}}</a>
            </h2>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['image', 'title', 'date', 'link']
    }
</script>

<style lang="scss" scoped>
    @import "post";
</style>