<?php
namespace App\Repository;
use Illuminate\Support\Facades\Facade;

class Test extends Facade{
    protected static function getFacadeAccessor()   
    {
        return 'jogfolser'; /////akhane amar banano service ar name ta diye diyechi
    }
}

?>