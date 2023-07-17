<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Document_file_uploadController extends Controller
{


   function document_file_upload($module_name=NULL,$data_field_name=NULL){
        return view('Upload_File_view',['data_field_name'=>$data_field_name,'module_name'=>$module_name]);
   }

}
