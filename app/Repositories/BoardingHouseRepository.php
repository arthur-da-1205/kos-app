<?php

namespace App\Repositories;

use App\Interfaces\BoardinHouseRepositoryInterface;
use App\Models\BoardingHouse;
use Filament\Forms\Components\Builder;

class BoardingHouseRepository implements BoardinHouseRepositoryInterface {
    public function getAllBoardingHouses($search=null, $city=null, $category=null) {
        $query=BoardingHouse::query();

        if($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        if($city) {
            $query->whereHas('city', function (Builder $query) use ($city) {
                $query->where('slug', $city);
            });
        }

        if($category) {
            $query->whereHas('city', function (Builder $query) use ($category) {
                $query->where('slug', $category);
            });
        }

        return $query->get();
    }

    public function getPopularBoardingHouse($limit=5) {
        return BoardingHouse::withCount('transactions')->orderBy('transactions_count', 'desc')->take($limit)->get();
    }

    public function getBoardingHouseByCitySlug($slug) {
        return BoardingHouse::whereHas('city', function (Builder $query) use ($slug) {
            $query->where('slug', $slug);
        })->get();
    }

    public function getBoardingHouseByCategorySlug($slug) {
        return BoardingHouse::whereHas('category', function (Builder $query) use ($slug) {
            $query->where('slug', $slug);
        })->get();
    }

    public function getBoardingHouseBySlug($slug) {
        return BoardingHouse::where('slug', $slug)->get();
    }
}