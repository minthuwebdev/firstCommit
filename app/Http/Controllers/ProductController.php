<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ProductController extends Controller
{
    //
    public function index() {
    	return view("product.index");
    }

    public function getProducts() {
    	$students = Student::get();
    	return $students;
    }
}
