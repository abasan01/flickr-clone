import {
    createApp
} from 'vue'
import App from './App.vue'
import ExampleComponent from './components/ExampleComponent.vue'

const app = createApp(App)
app.component('example-component', ExampleComponent)
app.mount('#app');

export default {
    components: {
        ExampleComponent
    }
}
