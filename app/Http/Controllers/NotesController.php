<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Yajra\DataTables\Facades\DataTables;

class NotesController extends Controller
{
    //

    public function getIndex()
    {
        return view('notes.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Note::query())->make(true);
    }
}
