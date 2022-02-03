const App = new Vue(
    {
    el: '#app',
    data: {
        products: [],
        textSearch: '',
    },
    created() {
        axios.get('http://localhost:8888/php-snack-8/server/controller-api.php?type=all').then((result) => {
        this.products = result.data.results;
        }).catch((error) => { console.log(error); });
    },
    methods: {
        changeType(){
            console.log(this.textSearch);
            axios.get('http://localhost:8888/php-snack-8/server/controller-api.php?type=' + this.textSearch).then((result) => {
            this.products = result.data.results;
            }).catch((error) => { console.log(error); });
        }
    }
    }
);
