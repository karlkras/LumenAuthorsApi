<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Http\Response as Response;

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
     * @return Response
     */
    public function index() {
        return $this->successResponse(Author::all());
    }

    /**
     * Create an author
     * @param Request $request
     * @return Response
     */
    public function store(Request $request) {

    }

    /**
     * Provides details of existing author
     * @param $author
     * @return Response
     */
    public function show($author) {

    }

    /**
     * Updates an existing author information
     * @param Request $request
     * @param $author
     * @return Response
     */
    public function update(Request $request, $author) {

    }

    /**
     * Deletes an existing author
     * @param $author
     * @return Response
     */
    public function destroy($author) {

    }
}
