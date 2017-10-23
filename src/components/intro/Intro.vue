<template>
    <section class="intro">
        <div class="intro__inner">
            <h1 class="intro__title">Herr Mies will's wissen</h1>
            <m-logo :path="path" className="intro__logo"></m-logo>
            <section class="intro__text">
                <p>
                    <b>
                        <i>Herr Mies will's wissen</i>
                    </b>
                    ist die zweiwöchige Interview-Reihe rund um IT Themen von und mit Daniel Mies.
                </p>
                <p>
                    Der Podcast kann via
                    <a class="hello_abo" href="https://mies.me/feed/mp3/">RSS</a>
                    abonniert werden und ist ebenfalls im
                    <a class="hello_abo"
                       href="https://itunes.apple.com/de/podcast/herr-mies-wills-wissen/id1257454170?l=en">iTunes Store</a>
                    gelistet.</p>
            </section>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['path']
    }
</script>

<style lang="scss" scoped>
    @import "intro";
</style>