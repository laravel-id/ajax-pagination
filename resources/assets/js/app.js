
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        api: {
            userIndex: '/api/user/index'
        },
    	users: null
    },

    mounted() {
        console.log('hai')
    	// initial user
    	this.getUsers(this.api.userIndex);
    },

    methods: {

    	getUsers(url) {
    		axios.get(url).then(response => {
    			this.users = response.data;
    		}).catch(errors => {
    			console.error(errors);
    		})
    	}
    }
});
