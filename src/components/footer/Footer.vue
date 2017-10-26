<template>
<footer class="footer">
    <div class="footer__inner">
        <section class="about">
            <h2 class="about__title"><i class="fa fa-info-circle"></i>&nbsp;&Uuml;ber diesen Podcast</h2>
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
            <section class="license">
            <h2 class="license__title"><i class="fa fa-gavel"></i>&nbsp;Lizenz</h2>
            <p>
                Der Podcast <i>Herr Mies will's wissen</i> wird unter der Lizenz <a
                        href="https://creativecommons.org/licenses/by-sa/3.0/legalcode">Creative Commons
                    Attribution/Share
                    Alike</a> veröffentlicht.
            </p>
            </section>
        </section>

        <nav class="footer_nav">
            <h2 class="footer_nav__title"><i class="fa fa-map-signs"></i>&nbsp;Navigation</h2>
            <ul>
            <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
            </ul>
        </nav>
    </div>

</footer>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
@import "footer";
</style>