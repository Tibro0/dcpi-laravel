<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubscriberDataTable;
use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(SubscriberDataTable $dataTable){
        return $dataTable->render('admin.subscriber.index');
    }

    public function destroy(string $id){
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
