<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\BaseController;
use App\Http\Repositories\ContactRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends BaseController
{
    protected $contactRepository;


    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

     public function indexContact(Request $request){
        $request->type_query = 'get';

        $contact = $this->contactRepository->get_list($request);
        return view('admin.contract.contact', ['contact' => $contact]);
     }

    public function editContact($id){

        $contact = $this->contactRepository->find($id);

        return view('admin.contract.contactDetail', ['contact' => $contact]);
    }









}
