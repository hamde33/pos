<?php

namespace App\CPU;

use App\Accounting\Def_Accounts;

class DefAccount
{

    public static function createDefAccount(string $name)
    {
        $id = Def_Accounts::create([
            'acc_def_name' => $name,
            'acc_id' => floor(time() - 999999999),
        ]);
        return $id->id;

    }

    

}
