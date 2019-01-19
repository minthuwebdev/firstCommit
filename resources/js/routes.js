import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
	{
		path: "/products",
		component: Vue.component('example-component', require('./components/ExampleComponent.vue').default)
	},
	{
		path: "/products/blog",
		component: Vue.component('blog-component', require('./components/BlogComponent.vue').default )
	},
	{
		path: "/products/test",
		component: Vue.component('test-component', require('./components/TestComponent.vue').default)
	}
];

const router = new VueRouter({
	hashband: false,
	history: true,
	mode: "history",
	routes
});

export default router;