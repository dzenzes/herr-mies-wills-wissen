<template>
    <header class="header">
        <div class="header__container">
            <nav class="navigation">
                <ul class="navigation__list">
                    <li v-for="(item, index) in items" class="navigation__item" :class="{ 'navigation__item--active': item.active }">
                        <a :href="item.link" :title="item.title">
                            <i :class="'fa fa-'+item.icon"></i>&nbsp;<span class="navigation__text">{{item.text}}</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    data: () => ({
        items: [
            {
                link: '/', title: 'Herr Mies will\'s wissen', icon: 'home', text: 'Home',
                active: true

            },
            {
                link: 'https://twitter.com/herrmies',
                title: 'Herr Mies will\'s wissen auf Twitter',
                icon: 'twitter',
                text: '@HerrMies',
            },
            {
                link: 'https://github.com/dmies',
                title: 'Herr Mies will\'s wissen auf GitHub',
                icon: 'github',
                text: 'GitHub'
            },
            {
                link: 'https://mies.me/feed/mp3/',
                title: 'Herr Mies will\'s wissen Podcast Feed',
                icon: 'podcast',
                text: 'Podcast'
            },
        ]
    })
}
</script>

<style lang="scss" scoped>
@import "navigation";
</style>