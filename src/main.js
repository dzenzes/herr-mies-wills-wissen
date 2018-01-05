// polyfill for vue custom element
// import "document-register-element/build/document-register-element";
import Vue from "vue";
import "./styles/style.scss";
import NavigationComponent from "./components/navigation/Navigation.vue";


Vue.component("m-navigation", NavigationComponent);

new Vue({el: '#app'});
