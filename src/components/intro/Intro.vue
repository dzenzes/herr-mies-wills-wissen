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
                    gelistet.
                </p>
                <div class="intro__buttons">
                    <a href="https://itunes.apple.com/de/podcast/herr-mies-wills-wissen/id1257454170?mt=2" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/assets/shared/badges/de-de/podcast-lrg.svg) no-repeat;width:133px;height:34px;background-size:contain;"></a>
                </div>
            </section>
        </div>
    </section>
</template>

<script>
export default {
  props: ["path"]
};
</script>

<style lang="scss" scoped>
@import "intro";
</style>