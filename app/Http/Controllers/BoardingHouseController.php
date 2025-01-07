<?php

namespace App\Http\Controllers;

use App\Interfaces\BoardingHouseRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\CityRepositoryInterface;
use App\Repositories\BoardingHouseRepository;
use Illuminate\Http\Request;

class BoardingHouseController extends Controller{
    private BoardingHouseRepositoryInterface $boardingHouseRepository;
    private CityRepositoryInterface $cityRepository;
    private CategoryRepositoryInterface  $categoryRepository;

    public function __construct(
        BoardingHouseRepositoryInterface $boardingHouseRepository,
        CityRepositoryInterface $cityRepository,
        CategoryRepositoryInterface $categoryRepository,
    ) {
        $this->boardingHouseRepository=$boardingHouseRepository;
        $this->cityRepository=$cityRepository;
        $this->categoryRepository=$categoryRepository;
    }

    public function find(){

        $cities = $this->cityRepository->getAllCities();
        $categories = $this->categoryRepository->getAllCategories();

        return view('pages.boarding-house.find-boarding-house', compact('cities', 'categories'));
    }

    public function findResult(Request $request) {
        $boardingHouse = $this->boardingHouseRepository->getAllBoardingHouses($request->search, $request->city, $request->category);

        return view('pages.boarding-house.index', compact('boardingHouse'));
    }
}
