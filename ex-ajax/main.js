const app = new Vue({
    el: '#app',

    created() {
        this.getAlbum()
    },

    data: {
        album: [],
    },

    methods: {
        
        getAlbum() {
            axios.get('http://localhost:8888/php-ajax-dischi/ex-ajax/database.php')
            .then(results => {
                
                this.album = results.data;
            })
            .catch(err => {
                console.log(err);
            })
        }

    }


}) 