<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- <header>
        <div class="top-bar">
            <img src="https://www.ore25.it/wp-content/uploads/2020/01/file-spotify-logo-png-4.png" alt="">
        </div>
    </header> -->

    <main class="bg-color" id="app">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col mb-3" v-for="album, i in albums" :key="i">
                    <div class="card">
                        <div class="container-img">
                            <img class="poster card-img-top" :src="album.poster" alt="cover">
                            <div class="overlay">
                                <h5>{{album.genre}}</h5>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">{{album.title}}</div>
                            <div class="card-text">{{album.author}}</div>
                            <div class="card-text">{{album.year}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./main_vue.js"></script>
</body>

</html>