/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// echarts
require('echarts/lib/echarts');
window.echarts = require('echarts');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component',require('./components/ExampleComponent.vue').default );
// Vue.component('hello-vue', require('./components/HelloVue.vue').default  );

Vue.component('barchart-one', require('./components/mycharts/BarchartOne.vue').default  );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
  el: '#app2', 
    // 对应Blade网页模板中的 <div id="app"> ，才能调用已经全局注册的Vue组件
 
});


// 举个例子：定义一个名为 button-counter 的新组件 -------- //
Vue.component('button-counter', {
    data: function () {
      return {
        count: 0
      }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
  })

new Vue({ el: '#components-demo' })
//------------------------------------------------------//
Vue.component('blog-post', {
  props: {
    title: String,
    likes: Number,
    isPublished: Boolean,
    commentIds: Array,
    author: Object,
    callback: Function,
    contactsPromise: Promise // or any other constructor
  },
  
  template:
   '<h3> {{ title }} {{likes}} </h3>  '
})
new Vue({ el: '#blog-post1' })
//----------------------------------------------------------//