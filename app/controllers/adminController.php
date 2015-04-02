<?php
class adminController extends BaseController {
    public function login(){
        return View::make('login');
    }
    public function postLogin() {
        $username = Input::get('username');
        $password = Input::get('password');
        //$auth = Auth::attempt(['username'=>$username, 'password'=>$password]);
        if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')])) {
            return Redirect::route('admin');
        } else {
            return Redirect::route('login');
        }
    }

    public function main(){
        $cars = Car::where('name','!=','')->paginate(10);
        return View::make('admin.main')->with(['cars'=>$cars]);
    }

    public function deleteCar($id){
        $car = Car::find($id);
        $car->delete();
        return Redirect::route('admin');
    }

    public  function getAddCar(){
        return View::make('admin.addCar');
    }

    public function postAddCar(){
        $car = new Car;
        $car->name = Input::get('name');
        $car->factory_id = Input::get('factory');
        $car->price = Input::get('price');
        $car->info = Input::get('info');
        $car->save();
        return Redirect::route('admin');
    }

    public function getEditCar($id){
        $car = Car::find($id);
        return View::make('admin.editCar')->with(['car'=>$car]);
    }

    public function postEditCar($id) {
        $car = Car::find($id);
        $car->name = Input::get('name');
        $car->factory_id = Input::get('factory');
        $car->price = Input::get('price');
        $car->info = Input::get('info');
        $car->save();
        return Redirect::route('admin');
    }
}