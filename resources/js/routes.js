import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from './components/ExampleComponent.vue';
import BlogComponent from './components/BlogComponent.vue';
import TestComponent from './components/TestComponent.vue';

Vue.use(VueRouter);

const routes = [
	{
		path: "/products",
		component: Vue.component('example-component', ExampleComponent)
	},
	{
		path: "/products/blog",
		component: Vue.component('blog-component', BlogComponent )
	},
	{
		path: "/products/test",
		component: Vue.component('test-component', TestComponent)
	}
];

const router = new VueRouter({
	hashband: false,
	history: true,
	mode: "history",
	routes
});

export default router;