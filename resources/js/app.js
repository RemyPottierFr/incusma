import {headerToggle} from "./header";

require('@fortawesome/fontawesome-free/js/all.js');

(
    function () {
        headerToggle()
    }
)()

window.Vue = require('vue');

const files = require.context('./components/', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
});
