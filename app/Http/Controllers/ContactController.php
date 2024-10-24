<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact',[
            'title' => 'Contact',
            'nama' => 'Narayana Cokro',
            'kelas' => '11 PPLG 2',
            'linkedin' => 'https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile',
            'github' => 'https://github.com/nrico25?tab=repositories'

        ]);
    }
}
