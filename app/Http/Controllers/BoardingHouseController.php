<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\CityRepositoryInterface;
use Illuminate\Http\Request;

class BoardingHouseController extends Controller{
    private CityRepositoryInterface $cityRepository;
    private CategoryRepositoryInterface  $categoryRepository;

    public function __construct(
        CityRepositoryInterface $cityRepository,
        CategoryRepositoryInterface $categoryRepository,
    ) {
        $this->cityRepository=$cityRepository;
        $this->categoryRepository=$categoryRepository;
    }

    public function find(){

        $cities = $this->cityRepository->getAllCities();
        $categories = $this->categoryRepository->getAllCategories();

        return view('pages.boarding-house.find-boarding-house', compact('cities', 'categories'));
    }
}
