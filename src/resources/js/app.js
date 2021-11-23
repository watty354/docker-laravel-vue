require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',


    data: {
        todos: [], //←TODO を格納するための配列を用意
        message: 'Hello World!!'
    },
    methods: {
        fetchTodos: function() { //←axios.get で TODO リストを取得しています
            axios.get('/api/get').then((res) => {
                this.todos = res.data //← 取得した TODO リストを todos に格納
            })
        },
        addTodo: function() { //← 追記
            axios.post('/api/add', {
                title: this.new_todo
            }).then((res) => {
                this.todos = res.data
                this.new_todo = ''
            })
        }
    },
    created() { //← インスタンス生成時に fetchTodos()を実行したいので、created フックに登録します。
        this.fetchTodos()
    },






});