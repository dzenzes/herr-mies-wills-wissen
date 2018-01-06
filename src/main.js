import Vue from "vue";
import "./styles/style.scss";
import NavigationComponent from "./components/navigation/Navigation.vue";
import HeaderComponent from "./components/header/Header.vue";


Vue.component("m-navigation", NavigationComponent);
Vue.component("m-header", HeaderComponent);

new Vue({el: '#app'});
