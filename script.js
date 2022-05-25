const app = new Vue({
    el: '#app',
    data: {
        disc : [],
        filteredDisc: [],
        genre: [],
        selectedGenre: ''
    },
    methods: {
        search(){
            this.filteredDisc = []
            this.disc.forEach(element => {
                console.log(element.genre)
                if(element.genre.includes(this.selectedGenre)){
                  this.filteredDisc.push(element)
                }
            });
        }
    },
    mounted(){
        
      axios
        .get("server.php")
        .then((res) => {
          this.disc = res.data;
          this.filteredDisc = res.data
          this.disc.forEach(element => {
              if(!this.genre.includes(element.genre)){
                this.genre.push(element.genre)
              }
          });
          console.log(this.disc)
          console.log(this.filteredDisc);
        });
    },
})