import axios from 'axios';
import $ from 'jquery';

//axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

//jQuery
window.$ = window.jQuery = $;
