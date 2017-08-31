<?php
/**
 * Created by PhpStorm.
 * User: Wildy
 * Date: 28/08/2017
 * Time: 13:07
 */

namespace App\Table;

use Core\Table\Table;


class PostTable extends Table
{

    protected $table = 'articles';

    /**Récupère les derniers posts en retournant un array**/
    public function last()
    {

        return $this->query('SELECT articles.id,articles.titre, articles.content, categories.titre AS categories 
                                                        FROM articles 
                                                        LEFT JOIN categories ON categorie_id = categories.id
                                                        ORDER BY  articles.date DESC');

    }

    /**récupere artciles + lien categorie associée **/

    public function findWithCategory($id)
    {
        return $this->query('SELECT articles.id, articles.titre, articles.content, articles.date, articles.categorie_id, categories.titre as categorie
                                                        FROM articles 
                                                        LEFT JOIN categories ON categorie_id = categories.id
                                                        WHERE articles.id = ? 
                                            ', [$id], true);
    }

    /**récupère dernier articles categore demandes **/

    public function lastByCategory($categorie_id)
    {


        return $this->query('SELECT articles.id,articles.titre, articles.content, categories.titre AS categories
                                                        FROM articles
                                                        LEFT JOIN categories
                                                        ON categorie_id = categories.id
                                                        WHERE categorie_id = ?
                                                        ORDER BY  articles.date DESC', [$categorie_id]);

    }

}