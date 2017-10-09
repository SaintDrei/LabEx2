<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataEntryController extends Controller
{
    public function index(){
        return view("dataentry");
    }

    public function submit(Request $request){

        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $name = $fname . '' . $lname;
        $birthdate = $request->input('birthdate');
        $org = $request->input('origin');
        $dest = $request->input('dest');
        $fare = '$23.52';
        $age = date('Y') - $request->input('birthdate');
        $locimg = 'http://static.islandhoppinginthephilippines.com/2015/02/manila-philippines-facebook-cover.jpg';
        if ($fname == ""){
            return view('error', ['customerror' => 'First Name is empty']);
        } elseif ($lname == ''){
            return view('error', ['customerror' => 'Last Name is empty']);
        } elseif ($birthdate == ''){
            return view('error', ['customerror' => 'Birthdate is empty']);
        } elseif ($org=='' or $dest==''){
            return view('error', ['customerror' => "City of Origin/Destination is empty!"]);
        } elseif ($org==$dest){
            return view('error', ['customerror' => 'You cannot select the same city of destination.']);
        } else{
            if($org =='1' && $dest =='2'){
                $origin = "Manila";
                $destination = "Boracay";
                $locimg="https://i.ytimg.com/vi/Y29TKiKrHQI/maxresdefault.jpg";
                $fare = "₱ 1,000.00";
            } elseif($org=='1'&& $dest =='3'){
                $origin = "Manila";
                $destination = "Cebu";
                $locimg="http://bayanworldwide.com/wp-content/uploads/2011/08/Charming-Cebu.jpg";
                $fare = "₱ 2,000.00";
            } elseif($org=='2'&&$dest=='1'){
                $origin = "Boracay";
                $destination = "Manila";
                $locimg="http://static.islandhoppinginthephilippines.com/2015/02/manila-philippines-facebook-cover.jpg";
                $fare = "₱ 1,000.00";

            } elseif($org=='2'&&$dest=='3'){
                $origin = "Boracay";
                $destination = "Cebu";
                $locimg="http://bayanworldwide.com/wp-content/uploads/2011/08/Charming-Cebu.jpg";
                $fare = "₱ 1,000.00";

            } elseif($org=='3'&&$dest=='2'){
                $origin = "Cebu";
                $destination = "Boracay";
                $locimg="https://i.ytimg.com/vi/Y29TKiKrHQI/maxresdefault.jpg";
                $fare = "₱ 1,000.00";
            }elseif($org=='3'&&$dest=='2'){
                $origin = "Cebu";
                $destination = "Manila";
                $locimg="http://static.islandhoppinginthephilippines.com/2015/02/manila-philippines-facebook-cover.jpg";
                $fare = "₱ 2,000.00";
            }
            return view('result', ['name' => $name, 'birthdate' => $birthdate, 'origin' => $origin, 'destination' => $destination, 'fare' => $fare, 'locimg' => $locimg]);
        }

//        return view('result', ['fullname' => $fname . ' ' . $lname, 'age'=>$age]);
    }
}
