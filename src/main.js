// polyfill for vue custom element
import "document-register-element/build/document-register-element";
import Vue from "vue";
import "./styles/style.scss";
import VueCustomElement from "vue-custom-element";
import NavigationComponent from "./components/navigation/Navigation.vue";
import HeaderComponent from "./components/header/Header.vue";
import FooterComponent from "./components/footer/Footer.vue";
import LogoComponent from "./components/logo/Logo.vue";
import IntroComponent from "./components/intro/Intro.vue";
import PostComponent from "./components/post/Post.vue";

Vue.use(VueCustomElement);

Vue.component("m-navigation", NavigationComponent);

Vue.component("m-logo", LogoComponent);
Vue.customElement("m-header", HeaderComponent);
Vue.customElement("m-footer", FooterComponent);
Vue.customElement("m-intro", IntroComponent);
Vue.customElement("m-post", PostComponent);
