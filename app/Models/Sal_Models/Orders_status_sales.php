<?php

namespace App\Models\Sal_Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Orders_status_sales extends Model
{
    use HasFactory;
    use SearchableTrait;
    protected $searchable = [
        'columns'=>[
            'status_sales_id'=>100,
            'order_id'=>10,

        ],
    ];
    // user_link = user_name

    public $fillable = ['status_sales_id','order_id','updated_at','user_link','created_by'];
    public $timestamps = false;

    protected $table = "orders_status_sales";
    protected $with = ['ordercases','orderuser_name'];
    public function ordercases()
    {
        return $this->hasOne('App\Models\Sal_Models\Status_sales', 'id', 'status_sales_id');

    }
    public function orderuser_name()
    {
        return $this->hasOne('App\Models\Sal_Models\Users_sales', 'link', 'user_link');

    }
    

    // protected static $logAttributes =['status_sales_id'];
    // public function orderstatus()
    // {
    //     return $this->hasOne('App\Models\Sal_Models\Order_cases', 'id', 'status_sales_id');
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
