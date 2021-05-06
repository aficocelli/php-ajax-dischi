var app = new Vue({

  el: '#root',

  data:{

    albums: [],

    selected:"",
   
  },
  methods: {

    cercaGenere: function(){

      axios.get('http://localhost/php-ajax-dischi/api.php', {

        params:{

          genere : this.selected
        }

      }).then(function(response){
        
        this.albums = response.data;
        console.log(this.albums);
      });
    }

  },

  mounted: function(){
    console.log("ciao");
    var myThis = this;

    axios.get('http://localhost/php-ajax-dischi/api.php')
    .then(function(response){

      
      myThis.albums = response.data;


    });

  }

  
});
