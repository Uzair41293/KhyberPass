<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tblCustomerController;
use App\Http\Controllers\CUDproduct;
use App\Http\Controllers\salesflowController;
use App\Http\Controllers\shiftDataController;
use App\Http\Controllers\signInController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\StockUpdateController;
use App\Http\Controllers\displayFriendsController;
use App\Http\Controllers\loyaltyManagmentController;
use Illuminate\Http\Request;
use App\Http\Controllers\orderViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/instock/{data}',[StockUpdateController::class, 'UpdateInStock'] );
Route::get('/updateDes/{data}',[CUDproduct::class, 'updateDescription'] );
Route::get('/DelId/{ID}',[CUDproduct::class, 'DeletionofProductID'] );
Route::get('/customerinfo/{data}',[tblCustomerController::class, 'customerorder'] );
Route::get('/checkOutOrder/{data}',[shiftDataController::class, 'transferOrderToReview'] );
Route::get('/fetchAllmenu',[menuController::class, 'fetchAllMenu'] );
                                       //-----------------
Route::get('/adp/{data}',[CUDproduct::class, 'insertProduct']);
                  //-----------------
            //---------------------
Route::get('/orderreview/{data}',[CUDproduct::class, 'insertProduct'] );
Route::get('/addCustomer/{data}',[tblCustomerController::class, 'addCustomer'] );
    //--------------------------------------------------
//---------------------------------------------
Route::get('/customer/{data}',[tblCustomerController::class, 'customerinfo'] );
//------------------------------------------
Route::get('/AddInSales/{data}',[salesflowController::class, 'salesflowCheckout'] );
//------------------------------------------
Route::get('/getsignin/{data}',[signInController::class, 'UserLogin'] );
Route::get('/uc',[signInController::class, 'signIn'] );
Route::get('/fetchMenu/{CID}',[menuController::class, 'fetchMenu'] );
Route::get('/fetchCategories',[menuController::class, 'getCategories'] );
Route::get('/fetchCategoriesInOptions',[menuController::class, 'getCategoriesForSelectMenu'] );
Route::get('/friendsData',[displayFriendsController::class, 'friendsData'] );
Route::get('/friendsData2/{FID}',[displayFriendsController::class, 'friendsData2'] );
Route::get('/friendsData3/{FID}',[displayFriendsController::class, 'friendsData3'] );
Route::get('/getFriends/{refID}',[displayFriendsController::class, 'getFriends'] );
Route::get('/mTree/{CID}',[tblCustomerController::class, 'customerTree'] );
Route::get('/getOrders',[orderViewController::class, 'getOrders'] );
Route::get('/PlaceOrder/{id}',[orderViewController::class, 'PlaceOrder'] );
Route::get('/getPreparingOrders',[orderViewController::class, 'getPreparingOrders'] );
Route::get('/setPrepared/{id}',[orderViewController::class, 'setPreparedOrders'] );
Route::get('/getDeliveryPendingOrders',[orderViewController::class, 'getDeliveryPendingOrders'] );
Route::get('/setDelivered/{id}',[orderViewController::class, 'setDelivered'] );
Route::get('/deliveredOrders',[orderViewController::class, 'deliveredOrders'] );

Route::get('/rev', function () {
    
$value = Session::get('orderReview');

    //Session::forget('pass');
return $value;   
});

Route::get('/r', function () {
    
    
    return view('referfriend');
});
Route::get('/sign', function () {
    return view('signInSignUp');
});
Route::get('/myorder', function () {
    return view('orderReview');
});
Route::get('/zuha', function () {
    return view('orderReview');
});
Route::get('/newmenu', function () {
    return view('newMenu');
});
Route::get('/orev', function () {
    return view('orderReview');
});
Route::get('/add', function () {
    return view('Addproduct');
});
Route::get('/', function () {
    return view('index');
 });
Route::get('/ot', function () {
    return view('OrderTracking');
});
Route::get('/or', function () {
    return view('orderView');
}); 
Route::get('/ks', function () {
return view('NewUpdate');
});
Route::get('/ac', function () {
    return view('newCustomer');
});
Route::get('/ff', function () {
    return view('friendsFlow');
});
Route::get('/ss', function () {
    return view('sales');
});
Route::get('/stripe', function () {
    return view('StripeForm');
});


Route::post ( '/abc', function (Request $request,$data) {
    
    \Stripe\Stripe::setApiKey ( 'sk_test_51Hx51vDF9fotRLlU3yPRSDi1udE8vfZEw0JeqeommznSNcj56IWHjGpQMhR2mvgZPvHkvnVLk0wvuNo40AR2DtlE00PIw1QQez' );
    try {
        \Stripe\Charge::create ( array (
                "amount" => 300 * 100,
                "currency" => "usd",
                "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                "description" => "Test payment." 
        ) );
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return "OK";
        //return Redirect::back ();
    } catch ( \Exception $e ) {
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return "NO";
        //return Redirect::back ();
    }
} );
Route::get('/nc', function () {
    return view('newCheckout');
});
Route::get('/p', function () {
    return view('profile');
});

Route::get('/ov', function () {
    return view('orderView');
});


Route::get('/adi', function () {
    return view('adminDineIn');
});

Route::get('/kv', function () {
    return view('kitchenView');
});


Route::get('/dpo', function () {
    return view('deliveryPendingOrders');
});

Route::get('/do', function () {
    return view('deliveredOrders');
});