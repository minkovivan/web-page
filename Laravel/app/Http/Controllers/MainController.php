<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index(){
        return view("index");
    }

    public function order(){
        return view("order");
    }

    public function gallery(){
        return view("gallery");
    }

    public function singleGallery($id){
        $text = [
            'Хімчистка салону Mercedes-Benz GLS',
            'Stage 1 тюнінг Mercedes-Benz GT 63 AMG',
            'Полірування деталей інтер’єру Mercedes AMG GT',
            'Нанесення захисної керамічної плівки',
            'Повне полірування салону та встановлення додаткової шумоізоляції',
            'Обслуговування Mercedes-Benz S class',
            'Догляд за інтер’єром Porsche Panamera 4S',
            'Опрацювання блискучих матеріалів Porsche Panamera 4S'
        ];
        return view("gallery_single")->with([
            'id'=>$id,
            'text'=>$text[$id-1]
        ]);
    }

    public function postOrder(Request $request){
        $order = new Order;
        $order->fill($request->toArray());
        //$order->save();
        return redirect()->back()->with(["status"=>"ok"]);
    }
}
