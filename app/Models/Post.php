<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query,$search) //Kalau ada search maka ambil apapun yang ada di dalam searchnya, kalau tidak ada maka false, artinya skip wherenya, langsung ke get
        {
            return $query
            ->where('title','like','%'.$search.'%')
            ->orWhere('body','like','%'.$search.'%');
        });

        // Join tabel category agar bisa search postingan sesuai kriteria search yg dicari, sekaligus sesuai sama category-nya
        $query->when($filters['category'] ?? false, function($query,$category)
        {
            return $query->whereHas('category', function($query) use( $category ) 
            {
                $query->where('slug','like','%'.$category.'%');
            });
        });

        // $query->when($filters['author'] ?? false, function($query,$author)
        // {
        //     return $query->whereHas('author', function($query) use( $author ) 
        //     {
        //         $query->where('username','like','%'.$author.'%');
        //     });
        // });

        // Versi Arrow Function
        $query->when($filters['author'] ?? false, fn($query,$author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

