<?php

namespace App\Models\Sal_Models;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_sales extends Model
{
    use HasFactory;



    public $fillable = ['name'];

    protected $table = "status_sales";

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
