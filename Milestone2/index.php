<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body{
        background-color: #1e2d3b;
    }

    .carte{
        background-color: #2e3a46;
    }
    
</style>
</head>
<body>

    <div id="app">

    <div v-for="(element,index) in dischi" class="carte row col-2">

        <img src="{{element.poster}}" alt="">
        <h3 class='text-white'>{{element.title}}</h3>
        <h6 class='text-muted'>{{element.author}}</h6>
        <h6 class='text-muted'>{{element.year}}</h6>
        <h6 class='text-muted d-none'>{{element.genre}}</h6>
      
    </div>
        
    </div>


    <!-- Vue 2 cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Nostro main js -->
    <script src="./main.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>