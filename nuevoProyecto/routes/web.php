<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miRuta', function() {
    return '<h1>Mi primera ruta en Laravel</h1>';
});

Route::get('/peliculas', function(){
    $peliculas = [
    ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
    ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
    ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
    ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
    ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
    ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
    ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
    ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
    ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
    ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
    ];
    echo '<h1>Listado de Pelis </h1>';
    echo '<br>';
    echo '<ul>';
    foreach ($peliculas as $peli) {
      echo '<li>'.$peli["title"].'-'.$peli["genre"].'</li>';
      echo '<img src='.$peli["poster"].' width="100px">';
    }
    echo '</ul>';

});

Route::get('/pelicula/{titulo}', function ($titulo){
  $peliculas = [
  ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
  ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
  ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
  ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
  ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
  ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
  ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
  ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
  ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
  ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
  ];
    if(in_array($titulo, $peliculas) ){
        foreach ($peliculas as $peli) {
          if ($peli == $titulo) {
            echo '<li>'.$peli["title"].'-'.$peli["genre"].'</li>';
            echo '<img src='.$peli["poster"].' width="100px">';
          }
        }
    }
  else {
    echo 'No existe la pelicula';
  }

});
