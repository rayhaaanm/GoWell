<?php

namespace App\Models;
use Faker\Provider\Lorem;



class News 
{
    private static $news_post =[
        [
            "title" => "Judul Berita 1",
            "slug" => "judul-berita-1",
            "cover" => "images/cover_article.png",
            "tanggal" => "May 7, 2023",
            "author" => "Jokowi",
            "body" => "ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally",
        ],
        [
            "title" => "Judul Berita 2",
            "slug" => "judul-berita-2",
            "cover" => "images/cover_article.png",
            "tanggal" => "May 1, 2023",
            "author" => "Mustofa",
            "body" => "ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally",
        ],
        [
            "title" => "Judul Berita 3",
            "slug" => "judul-berita-3",
            "cover" => "images/cover_article.png",
            "tanggal" => "April 10, 2023",
            "author" => "Ilham",
            "body" => "ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally",
        ],
        [
            "title" => "Judul Berita 4",
            "slug" => "judul-berita-4",
            "tanggal" => "Februari 7, 2023",
            "author" => "Michael",
            "cover" => "images/cover_article.png",
            "body" => "ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally",
        ]
        ];
    public static function all(){
        return collect(self ::$news_post);
    }
    public static function find($slug){
        $articles = static ::all();
        return $articles->firstWhere('slug',$slug);
    }
}
