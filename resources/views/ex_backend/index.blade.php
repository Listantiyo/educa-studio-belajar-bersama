<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
  <body>
      <div id="app">
        @{{radio}}
        <select name="" v-model="radio" class="filter" id="">
          <option value="" disabled selected>Pilihlah</option>
          <option v-for="(mapel,ix) in filter.film" value="">@{{ix+1}} @{{mapel.nama_mapel}} @{{mapel.id}}</option>
        </select>
        <select name="" class="filter" id="">
          <option value="" disabled selected>Pilihlah</option>
          <option v-for="clase in filter.filc" value="@{{clase.id}}">@{{clase.nama_class}}</option>
        </select>
        <select name="" class="filter" id="">
          <option value="" disabled selected>Pilihlah</option>
          <option v-for="type in filter.filt" value="@{{type.id}}">@{{type.nama_type}}</option>
        </select>
        
        <button id="klik">jancok</button>

        <div>
          {{-- @{{filc}}
          @{{filt}} --}}
          <p v-for="mapel in filter.film">
            @{{mapel.id}}
            @{{mapel.nama_mapel}}
          </p>
          @{{filter.film}}
          @{{items}}
        </div>
        {{-- <div>
          @{{users}}
        </div> --}}
        {{-- <div>
          @{{filter.filt}}
        </div>
        <div>
          @{{filter.filc}}
        </div> --}}
        <h4>@{{items}}</h4>
        {{-- @{{all}}
        @{{ message }} --}}

        @{{all}}
          <ul v-for="a in all">
            <p>@{{ a.question }}</p>
          </ul>
          
 
      </div>

  </body>

</html>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3"></script>

  <script>
    $(document).ready(function(){
      $(".filter").change(function(){
        // console.log(data)
        $.each( vues.filter.filc, function( key, value ) {
      alert( key + ": " + value );
    });
      });
    });

  </script>

  <script>
    const { createApp } = Vue

    const vues = createApp({
      data() {
        return {
          radio:'',
          message: 'Hello Vue!',
          items :[{nama:'satu'},{nama:'dua'},{nama:'tiga'}],
          all : [],
          filter : [],
        }
      },
      mounted(){
              $.ajax({
              url: "/api/data/q",
              success: function(rsp){
                  vues.all = rsp;
                  // appComponent.products = rsp;
                  // console.log(rsp);
              }
          });
          $.ajax({
              url: "/api/data/f",
              success: function(rsp){
                  vues.filter = rsp;
                  // appComponent.products = rsp;
                  // console.log(rsp);
              }
          });
        },
    }).mount('#app')
  </script>
