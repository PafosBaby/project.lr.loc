<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable= [
        'nickname',
        'email',
        'comment',
        'article_id'
    ];

    public function article(){
        $this->belongsTo(Article::class);

    }
    public static function add(array $fields, $article){
        $comment =new static;
        $comment->article_id= $article->id;
        $comment->fill([
            'nickname'=>$fields['sendername'],
            'email'=>$fields['emailaddress'],
            'comment'=>$fields['sendermessage'],
        ]);

        $comment->save();
        return $comment;
    }

}
