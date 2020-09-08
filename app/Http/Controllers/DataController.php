<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Exception\GuzzleException;

class DataController extends Controller
{
    private $__client;

     public function __construct() {
          $this->_client = new Client([
               'base_uri' => 'https://api.binderbyte.com/cekktp?nik=xxxxxxxxxxxxxxxx&nama=x&api_key=eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02 HTTP/1.1',
               'headers'  => [
                                'api_key'      => 'eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02',
                                'Content-Type' => 'application/xml',
                              ]
          ]);
    }

    public function datapenerima()
    {
        return view('CekIdentitas');
    }

    public function resultdata()
    {
        return view('ResultData');
    }

    public function ceknik(Request $request)
    {
        // $response = Http::get('https://api.binderbyte.com/cekktp?nik=xxxxxxxxxxxxxxxx&nama=x&api_key=eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02 HTTP/1.1', [
        //     'api_key'   => 'eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02',
        //     'nik'       => $nik,
        //     'nama'      => $nama,
        // ]);

        // $data           = $response->json();

        // //bikin if disini
        // //jika data null redirect back ke halaman sebelumnya
        // //jika data ada
        // //kehalaman result dan view datanya


        // $datapublik     = $data['data'];
        // $data1          = $datapublik['nama'];
        // $data2          = $datapublik['tempat_lahir'];
        // $data3          = $datapublik['jenis_kelamin'];
        // $data4          = $datapublik['namaPropinsi'];
        // $data5          = $datapublik['namaKabko'];
        // $data6          = $datapublik['namaKec'];
        // $data7          = $datapublik['namaKel'];
        // return view('Result')->with([
        //     'nik'               => $nik,
        //     'nama'              => $data1,
        //     'tempat_lahir'      => $data2,
        //     'jenis_kelamin'     => $data3,
        //     'namaPropinsi'      => $data4,
        //     'namaKabko'         => $data5,
        //     'namaKec'           => $data6,
        //     'namaKel'           => $data7,
        // ]);

        // $client     = new Client();
        // $response   = $client->request('GET','https://api.binderbyte.com/cekktp?nik=xxxxxxxxxxxxxxxx&nama=x&api_key=xxxxxx HTTP/1.1', [
        //     'form_params' => [
        //                         'api_key'    => 'eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02',
        //                         'nama'       => $nama,
        //                         'nik'        => $nik,
        //                     ],
        //     'json'    => ['nama' => $nama],
        // ]);

        $nama   = $request->nama;
        $nik    = $request->nik;

        $client     = new Client();
        $response   = $client->request('GET','https://api.binderbyte.com/cekktp?nik=xxxxxxxxxxxxxxxx&nama=x&api_key=xxxxxx HTTP/1.1', [
            'query' => [
                            'api_key'    => 'eaf432778a1641195cb7919eb3ee101c85b3b0dae74fac74600b41f57c70ea02',
                            'nama'       => $nama,
                            'nik'        => $nik,
                        ],
        ]);
        $body       =  $response->getBody()->getContents();
        $arr_body   = json_decode($body);
        // $datapublik     = $arr_body['data'];
        // dd($arr_body);
        return view("ResultData")->with([
            'result'    => $arr_body,
            'nik'       => $nik,
        ]);

    }

}
