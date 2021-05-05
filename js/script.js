var app = new Vue({

  el: '#root',

  data:{

    albums: [],

   
  },


  mounted: function(){

    var myThis = this;

    axios.get('http://localhost/php-ajax-dischi/api.php')
    .then(function(response){

      myThis.albums = response.data;


    });

  }

  
});
