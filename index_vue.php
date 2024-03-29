<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
  <!-- /google font -->
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- /fontawesome -->
  <!-- axios cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
  <!-- /axios cdn -->
  <!-- vue js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- /vue js cdn -->
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- /css -->
  <title>Vue Dischi Musicali</title>
</head>

<body>
  <div id="root" class="container">
    <!-- header -->
    <header>
      <div class="logo">
        <i class="fab fa-spotify"></i>
      </div>
    </header>
    <!-- /header -->
    <select v-model="selected">
      <option value="">Tutti</option>
      <option value="Rock">Rock</option>
      <option value="Jazz">Jazz</option>
      <option value="Pop">Pop</option>
      <option value="Metal">Metal</option>
    </select>
    <button v-on:click="cercaGenere">Cerca</button>
    <!-- main -->
    <main>
      <!-- main box -->
      <div class="box" v-for="album in albums">
        <div class="album">
          <img :src="album.poster" :alt="album.title">
        </div>
        <h1>{{album.title}}</h1>
        <h2>{{album.author}}</h2>
        <p>{{album.genre}}</p>
        <p>{{album.year}}</p>
      </div>
      <!-- /main box -->
    </main>
    <!-- /main -->
  </div>
  <!-- js -->
  <script src="js/script.js" charset="utf-8"></script>
  <!-- /js -->
</body>

</html>