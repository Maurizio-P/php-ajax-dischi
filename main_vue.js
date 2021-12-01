Vue.config.devtools = true

const Vueapp = new Vue({
    el: "#app",
    data: {
        albums: [],
    },

    mounted() {
        axios.get("http://localhost:80/php-ajax-dischi/api/api_album.php").then(resp => {this.albums = resp.data.listaAlbum});
    }
});