const app = new Vue({
    el: '#app',
    data: {
      dischi : []
    },
    mounted() {
      axios
        .get('/api/dischi.php')
        .then(response => {
          console.log(response);
          this.dischi = response.data
          console.log(this.dischi);
        }).catch(error => {
          console.log(error);
        })
    }
  })