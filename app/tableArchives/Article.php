<?php
/**
 * Created by PhpStorm.
 * User: Lukz0r
 * Date: 13/08/2017
 * Time: 16:20
 */

namespace App\Table;
use App\App;
use App\Table\Categorie;
use App\Table\Table;

    class Article extends Table {

        protected static $table='posts';

        public static function find($id){
            return self::query('SELECT articles.id,articles.titre, articles.content, categories.titre as categories 
                                                        FROM articles 
                                                        LEFT JOIN categories ON categorie_id = categories.id
                                                        WHERE articles.id = ? 
                                            ',[$id],true);
        }

        public static function getLast(){

            return self::query('SELECT articles.id,articles.titre, articles.content, categories.titre as categories 
                                                        FROM articles 
                                                        LEFT JOIN categories ON categorie_id = categories.id
                                                        ORDER BY  articles.date DESC');

        }

        public static function lastByCategory($categorie_id){


            return self::query('SELECT articles.id,articles.titre, articles.content, categories.titre as categories
                                                        FROM articles
                                                        LEFT JOIN categories
                                                        ON categorie_id = categories.id
                                                        WHERE categorie_id = ?
                                                        ORDER BY  articles.date DESC',[$categorie_id]);

        }

        public function getURL(){

            return 'index.php?p=article&id='. $this->id;

        }


        public function getExtrait(){
            $html = '<p>' .substr($this->content,0, 100). '...</p>';
            $html.= '<p><a href="'. $this->getURL(). '">Voir la Suite</a></p>';

            return $html ;
        }

    }