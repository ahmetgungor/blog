<?php

namespace App;


use Illuminate\Support\Facades\DB;
use App\Humaninterface;

class Humanmodel  implements Humaninterface 
{
    //
    private $data =[];
    private $push_id =[];
   public function index()
    {

        $human = DB::table('customers')->get();
        foreach ($human as $key => $value) :
                $this->data[$value->id] = [
                    'name'=>$value->first_name,
                    'gender'=>$value->gender,
                    'animal'=>$this->gender_to_animal($value->gender),
                ];
        endforeach;
        return $this->data;
    }

    function gender_to_animal($val)
    {
        $data = [];
        $animal_name =  DB::table('hayvanlar')->whereNotIn("id", ($this->push_id));
        switch ($val) {
            case 'Female':
                if($animal_name->count()!=0)
                {
                $get = $animal_name->take(3)->get();
                foreach ($get as $key => $value):
                    $this->push_idd($value->id);
                    $data[] = $value->animal_name;
                  endforeach;
                }else{
                    $data[] = 'Barınakta Hayvan Kalmadı';
                }
                break;
            case 'Male':
                if($animal_name->count()!=0)
                {
                $get = $animal_name->take(1)->get();
                foreach ($get as $key => $value):
                    $this->push_idd($value->id);
                    $data[] = $value->animal_name;
                  endforeach;
                }else{
                    $data[] = 'Barınakta Hayvan Kalmadı';
                }
            break;
            default:
            
             break;
        }
      return $data;
    }

    function push_idd($id)
    {
       
        $this->push_id[$id]=$id;
        
    }

   
  

    
}
