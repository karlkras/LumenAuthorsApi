<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponder;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the full list of authors
     * @return Illuminate\Http\Response
     */
    public function index() {

    }

    /**
     * Create an author
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {

    }

    /**
     * Provides details of existing author
     * @param $author
     * @return Illuminate\Http\Response
     */
    public function show($author) {

    }

    /**
     * Updates an existing author information
     * @param Request $request
     * @param $author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author) {

    }

    /**
     * Deletes an existing author
     * @param $author
     * @return Illuminate\Http\Response
     */
    public function destroy($author) {

    }
}
