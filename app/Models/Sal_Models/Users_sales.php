<?php

namespace App\Models\Sal_Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

use Laravel\Passport\HasApiTokens;
class Users_sales extends Authenticatable
{
    use Notifiable;
    // use SearchableTrait;
    use HasRoles;
    use SoftDeletes;

    // use SearchableTrait;
    // protected $searchable = [
    //     'columns'=>[
    //         'phone'=>12,
    //         'name'=>50,
    //         'link'=>50,


    //     ],
    // ];

    /**
     * The attributes that are mass assignable.
     *

     */
    protected $table = "users_sales";

    public $fillable = ['name','phone', 'password','updated_at','delete_by','rate','job','active','link','access','personal_picture','delete_by','created_by','updated_by'];

    protected $appends = ['rolesD'];
    public function getRolesDAttribute()
    {
        return $this->roles->pluck('name')->all();
    }
    protected $casts = [
        'access' => 'array',
    ];
    // public function scopeOfLinks($query)
    // {
    //     // ->orWhere('order_sales.user_link',Auth::user()->link)
    //     // ->whereIn('users_sales.id',json_decode(Auth::user()->access))
    //     $links = [];
    //     $links = Users_sales::whereIn('id',json_decode(Auth::user()->access))->pluck("link")->all();
    //     $links[] = Auth::user()->link;
    //     if (count($links) > 0) {
    //         return $query->whereIn('order_sales.user_link',$links);
    //     }
    //     return $query;
    // }

    // protected $casts = [
    //     'access' => Users_sales::class,
    // ];
    // protected $casts = [
    //     return json_encode($value);
    //     'access' => Json::class,
    // ];
    // public function set($access)
    // {
    //     return json_encode($access);
    // }

    // protected $casts = [
    //     'access' => 'array',
    // ];
//     public function getXyzAttribute($array)
// {
//     // array_map('intval', explode(',', $request->data)
//     // return array_map('array');
// }
//     protected $casts = [
//         'access' =>  'array.[]',
//     ];
//     public function getXyzAttribute($access)
// {
//     return json_decode($access);
// }
    /**
     * The attributes that should be hidden for arrays.
     *

     */


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */



}

