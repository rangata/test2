import ExampleComponent from './components/ExampleComponent';
import home from './components/home';

export const routes = [
    {
        path: '/',
        name: 'homePage',
        component: ExampleComponent
    },

    {
        path:'/home',
        name: 'home',
        component: home
    }
]