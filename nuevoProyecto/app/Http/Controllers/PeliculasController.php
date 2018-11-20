<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{

  public function buscarPeliculasId($id){
    $peliculas = [
    1 => "Toy Story",
    2 => "Buscando a Nemo",
    3 => "Avatar",
    4 => "Star Wars: Episodio V",
    5 => "Up",
    6 => "Mary and Max"
    ];
    if (array_key_exists($id, $peliculas)) {
      foreach ($peliculas as $key => $peli) {

         if ($key == $id) {
           return view('peliculas')->width('peli', $peli);

         }
      }
    }else {
       echo "Pelicula no existente";
    }

  }
  public function buscarPeliculaNombre($nombre){
    $peliculas = [
    1 => "Toy Story",
    2 => "Buscando a Nemo",
    3 => "Avatar",
    4 => "Star Wars: Episodio V",
    5 => "Up",
    6 => "Mary and Max"
    ];
    if (in_array($nombre, $peliculas)) {
      echo $nombre;
    }else {
      echo "Pelicula no existente";
    }


  }

}
