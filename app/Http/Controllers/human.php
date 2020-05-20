<?php
namespace App\Http\Controllers;

use App\Humaninterface;
use Illuminate\Http\Request;
use App\Humanmodel;
use Illuminate\Support\Facades\App;

use Illuminate\Container\Container;
class human extends Controller 
{

    private $Humaninterface;
    public function __construct(Humaninterface $Humaninterface)
    {
        $this->Humaninterface = $Humaninterface;
    }

    public  function index()
    {

        echo "<pre>";
        print_r($this->Humaninterface->index());
        echo "</pre>";
      
    }

   
}
