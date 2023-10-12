<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function index()
  {
    return [
      [
        "title" => "Attack on Titan",
        "genre" => "Azione",
        "episodes" => 75,
        "img" => '/img/aot.jpg',
        "year" => 2013
      ],
      [
        "title" => "My Hero Academia",
        "genre" => "Azione",
        "episodes" => 113,
        'img' => '/img/mya.jpeg',
        "year" => 2016
      ],
      [
        "title" => "Death Note",
        "genre" => "Mistero",
        "episodes" => 37,
        'img' => '/img/death.jpg',
        "year" => 2006
      ],
      [
        "title" => "Sailor Moon",
        "genre" => "Magia",
        "episodes" => 200,
        'img' => '/img/sailor.jpg',
        "year" => 1992
      ],

    ];
  }
}
