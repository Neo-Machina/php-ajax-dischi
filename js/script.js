var app = new Vue({
    el: '#root',
    data: {
      discs: [],
      genreArray:[
        'Rock',
        'Pop',
        'Jazz',
        'Metal'
      ]
    },
    methods: {
      changeGenre(musicGenre) {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php?genre=' + musicGenre.target.value.toLowerCase()) 
        .then((response) => {
            this.discs = response.data;
        })
      }
    },
    mounted() {
        axios.get('http://localhost:8888/php-ajax-dischi/api.php') 
        .then((response) => {
            this.discs = response.data;
        })
    }
  })