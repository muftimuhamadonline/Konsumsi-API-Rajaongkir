<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekongkirController extends Controller
{

    public function index()
    {
        return view('cekongkir');
    }


    public function getProvince()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 60,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 29a2f150e6bb7b1a0306409eb3dda802"
        ),
      ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {
          echo "cURL Error #:" . $err;
        } 
          else 
        {
          // $jsondecode = json_decode($response,true);
          // // dd($jsondecode);
          // $responses = $jsondecode['rajaongkir']['results'];
          // dd($responses);
          // return view('cekongkir', compact('responses')); 
            return $response;
        }
  }

  public function getCity($id)
  {
    // dd($prov_id);
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=&province=$id",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 60,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 29a2f150e6bb7b1a0306409eb3dda802"
        ),
      ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {
          echo "cURL Error #:" . $err;
        } 
        else 
        { 
          //  $jsondecode = json_decode($response,true);
          //   $responses = $jsondecode['rajaongkir']['results'];
          // // dd($jsondecode['rajaongkir']['results']);
          // return view('cekongkir', compact('responses')); 
            return $response;
        }
    }

    public function getCost()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1000&courier=jne",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 29a2f150e6bb7b1a0306409eb3dda802"
            ),
          ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
                
            if ($err) 
            {
              echo "cURL Error #:" . $err;
            } 
               else 
            {
              echo $response;
            }
    }
}
