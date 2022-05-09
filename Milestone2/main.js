var app = new Vue({
    el: '#app',
    data: {
      dischi: [],
    },
    created(){
      axios.get( 'http://localhost/php-ajax-dischi/Milestone2/integers.php' )
          .then((res) => {
            console.log(res.data);
            this.dischi = res.data;
        
          })
    }
  })