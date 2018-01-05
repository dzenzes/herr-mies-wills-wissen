<template>
    <nav class="navigation">
        <ul class="navigation__list">
            <li v-for="(item, index) in items" class="navigation__item" v-bind:class="item.classObject">
                <a :href="item.link" :title="item.title">
                    <i :class="'fa fa-'+item.icon"></i>&nbsp;
                    <span class="navigation__text">{{item.text}}</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
  data: () => ({
    items: [
      {
        link: "/",
        title: "Herr Mies will's wissen",
        icon: "home",
        text: "Home",
        classObject: {
          "navigation__item--active":
            document.URL.endsWith(".me/") || document.URL.endsWith(".dev/")
        }
      },
     /* {
        link: "/episoden",
        title: "Alle Folgen",
        icon: "list",
        text: "Episoden",
        classObject: {
          "navigation__item--active": document.URL.indexOf("episoden") > 0
        }
      },*/
      {
        link: "https://mies.me/feed/mp3/",
        title: "Der Feed zum Podcast",
        icon: "podcast",
        text: "Subscribe",
        classObject: {
          "navigation__item--active": false
        }
      },
      {
        link: "https://twitter.com/herrmies",
        title: "Herr Mies will's wissen auf Twitter",
        icon: "twitter",
        text: "@HerrMies",
        classObject: {
          "navigation__item--active": false
        }
      }
    ]
  })
};
</script>

<style lang="scss" scoped>
    @import "navigation";
</style>
