<?php

namespace App\Models\Sal_Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Nicolaslopezj\Searchable\SearchableTrait;

class Order_sales extends Model
{
    use HasFactory;

    use SearchableTrait;
    protected $searchable = [
        'columns'=>[
            'phone'=>12,
            'created_at'=>10,
            'user_link'=>10,
            'name'=>10,
            'neo_leap'=>20,
            'id'=>10,

        ],
    ];
// link = user_link
// وorder_rate = pay
// order_value = order_status
    public $fillable = ['not','user_link','name','pay',
    'phone','requir','active','order_value','neo_leap','import_id','work_active',
    'current_status','status_id','contact_id','delete_by','created_by','updated_by'];
    // public $timestamps = false;
    protected $table = "order_sales";

    // protected $appends = ['ordercases22','usersclakshin'];


    // protected $with = ['ordercases22'];
    // public function usersname()
    // {
    //     return $this->hasOne('App\Models\Sal_Models\Users_sales', 'link', 'link');
    // }
    // protected $casts = [
    //     'access' => 'access',
    // ];
    public function usersclakshin()
    {
        return $this->hasOne('App\Models\Sal_Models\Users_sales',  'link','user_link');
        // ->where('user.rate','order.link');
            // ->groupBy('name');
    }
    public function importan()
    {
        return $this->hasOne('App\Models\Sal_Models\Importance_sales',  'id','import_id');
        // ->where('user.rate','order.link');
            // ->groupBy('name');
    }
    // public function ordercases22()
    // {
    //     return $this->hasOne('App\Models\Sal_Models\Orders_status_sales', 'order_id', 'id')
    //    ->latest('Orders_status_sales.updated_at')->first();


    // }

    public function ordercases22()
    {
        return $this->hasOne('App\Models\Sal_Models\Orders_status_sales', 'order_id', 'id')
        // ->where('order_id', $id)
        ->latest();

    }
    public function scopeOfLinks($query)
    {
        // ->orWhere('order_sales.user_link',Auth::user()->link)
        // ->whereIn('users_sales.id',json_decode(Auth::user()->access))
        if(Auth::user()->access == "null"){

           $links = Order_sales::where('user_link', Auth::user()->link);
        //    return $links;
        }
        else{
        $links = [];
        $links = Users_sales::whereIn('id',json_decode(Auth::user()->access))->pluck("link")->all();
        $links[] = Auth::user()->link;
        if (count($links) > 0) {
            return $query->whereIn('order_sales.user_link',$links);
        }

    }
    return $query;
    }

    // public function getusersclakshinAttribute()
    // {
    //     return $this->usersclakshin()->select('user.rate');
    // }

    // public function setrequestAttribute($value)
    // {
    //     $this->attributes['request'] = json_encode($value);
    // }

    // public function getrequestAttribute($value)
    // {
    //     return $this->attributes['request'] = json_decode($value);
    // }

    /**
     * Get the index name for the model.
     *
    * @return string
*/
// ,'salary_deposit_bank','Commitments','old','request_yes','communication',
//     'created_at','Request_Accept','received','Request_not','Request_not_date','Request_Accept_date','received_date','communication_date','request_yes_date'

}
