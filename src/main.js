import Vue from "vue";
import "./styles/style.scss";
import NavigationComponent from "./components/navigation/Navigation.vue";
import HeaderComponent from "./components/header/Header.vue";
import IntroComponent from "./components/intro/Intro.vue";
import SupportComponent from "./components/support/Support.vue";

Vue.component("m-navigation", NavigationComponent);
Vue.component("m-header", HeaderComponent);
Vue.component("m-intro", IntroComponent);
Vue.component("m-support", SupportComponent);

new Vue({ el: "#app" });
