// polyfill for vue custom element
import "document-register-element/build/document-register-element";
import Vue from "vue";
import "./styles/style.scss";
import VueCustomElement from "vue-custom-element";
import NavigationComponent from "./components/navigation/Navigation.vue";

Vue.use(VueCustomElement);

Vue.customElement("m-navigation", NavigationComponent);
