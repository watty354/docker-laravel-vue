require('./bootstrap');
import VueRouter from 'vue-router';
// import HeaderComponent from "./components/HeaderComponent";
// import TaskListComponent from "./components/TaskListComponent";
// import TaskShowComponent from "./components/TaskShowComponent";
import GameHomeComponent from "./components/GameHomeComponent";
import GameOneComponent from "./components/GameOneComponent";
import GameTwoComponent from "./components/GameTwoComponent";
import GameTreeComponent from "./components/GameTreeComponent";
import GameFourComponent from "./components/GameFourComponent";
import GameFiveComponent from "./components/GameFiveComponent";



window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('game-component', GameHomeComponent);


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/fake.hame/:id',
            name: 'game.home',
            component: GameHomeComponent
        },
        {
            path: '/game_1',
            name: 'game.one',
            component: GameOneComponent,
            props: true
        },
        {
            path: '/game_2',
            name: 'game.two',
            component: GameTwoComponent,
            props: true
        },
        {
            path: '/game_3',
            name: 'game.tree',
            component: GameTreeComponent,
            props: true
        },
        {
            path: '/game_4',
            name: 'game.four',
            component: GameFourComponent,
            props: true
        },
        {
            path: '/game_5',
            name: 'game.five',
            component: GameFiveComponent,
            props: true
        },
    ]
});

const app = new Vue({
    el: '#app',
    router,

    data: {
        todos: [], //←TODO を格納するための配列を用意,
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
        },
    },
    computed: {　
        classColorSet: function() {　　
            return {　　　
                show: this.isActive,
                　　
            }　　
        }　
    }

});