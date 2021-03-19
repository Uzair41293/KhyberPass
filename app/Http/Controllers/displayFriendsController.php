<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class displayFriendsController extends Controller
{
    public static function getFriends($refID){
        $data=DB::select('select * from vw_referred_and_referrel_log where ReferredByID ='.$refID);
        return $data;
}


    public static function friendsData(){
            $data=DB::select('select * from vw_referred_and_referrel_log where ReferredByID=1');
            $table='';
            foreach($data as $obj){
            $table=$table.'<div class="card" style="width: 15rem;" id="friend[]" onclick="friends2('.$obj->ReferredCustomerID.')">
            <div class="card-header">
            <h1>Referred By '.$obj->ReferrelName.'</h1>
            </div>
            <div class="card-body">
            <h1>'.$obj->ReferredCustomerName.'</h1>
            </div>
            <div class="card-footer">
            <h1 >'.$obj->ReferredCustomerID.'</h1>
            </div>
        </div><br>';
    }
            return $table;
          }

          public static function friendsData2($FID){
            
            $data=DB::select('select * from vw_referred_and_referrel_log where ReferredByID='.$FID);
            $table='';
            foreach($data as $obj){
            $table=$table.'<div class="card" style="width: 15rem;" id="friend[]" onclick="friends2('.$obj->ReferredCustomerID.')">
            <div class="card-header">
            <h1>Referred By '.$obj->ReferrelName.'</h1>
            </div>
            <div class="card-body">
            <h1>'.$obj->ReferredCustomerName.'</h1>
            </div>
            <div class="card-footer">
            <h1 >'.$obj->ReferredCustomerID.'</h1>
            </div>
        </div><br>';
        }
            return $table;
    }
}
