Vue.prototype.$http = axios;
const app = new Vue({
    el: '#cont',
    /*Realizar el montaje del ciclo de vida*/
    mounted() {
        console.log('instancia Montada');
        this.cargarpersonasAxios();
    },
    data: {
        personasAxios: [],
    },
    methods: {
        //Traer los datos del enlace randomUser, https://randomuser.me/documentation#multiple
        cargarpersonasAxios() {
            axios.get("https://randomuser.me/api/?results=50").then(respuesta => {
                this.personasAxios = respuesta.data.results;
                console.log(respuesta);
            });
        }
    },
});