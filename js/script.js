var app = new Vue({
    el: '#root',
    data: {
      discs: []
    },
    mounted() {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php') 
        .then((response) => {
            this.discs = response.data;
        })
    }
  })