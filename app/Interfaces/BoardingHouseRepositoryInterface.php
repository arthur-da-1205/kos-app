<?php

namespace App\Interfaces;

interface BoardinHouseRepositoryInterface {
    public function getAllBoardingHouses($search=null, $city=null, $category=null);
    public function getPopularBoardingHouse($limit=5);
    public function getBoardingHouseByCitySlug($slug);
    public function getBoardingHouseByCategorySlug($slug);
    public function getBoardingHouseBySlug($slug);
}
