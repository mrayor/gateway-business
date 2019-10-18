@extends('layouts.master')

@section('title','All Listings')

@section('header')
@include('includes.navbar')
<section class="mt-4">
    <div class="container">
        <div class="flex items-center justify-between">
            <a href="" class="btn btn-primary">Go back</a>
            <a href="" class="text-sm font-bold"><i class="fas fa-filter mr-2"></i>Show Filters</a>
        </div>
        <div class="mt-5 hidden">
            @include('includes.form')
            <div class="border-t-tiny mt-2 border-gray-500"></div>
            <form action="">

                <div class="flex flex-wrap justify-between">
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                    <div class="mt-2 w-5/12 md:w-1/3 lg:w-1/4">
                        <label class="items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-xs">Porpular Category</span>
                        </label>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
        </div>
        </form>
        <h2 class="text-2xl font-bold mt-6">Listings</h2>
    </div>
</section>
@endsection

@section('content')
<div class="container mx-auto flex pb-8 px-4 overflow-hidden flex-wrap justify-between">
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>
    <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
        <img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image">
        <div class="px-6 py-2">
            <a href="" class="bg-gray-200 rounded-full px-3 py-1 text-xs text-gray-700 font-bold">hotels</a>
            <span>
        </div>
        <div class="px-6 pb-4">
            <div class="font-bold text-xl mb-2"><a href="" class="hover:text-primary">Duram Hotels</a> </div>
            <p class="text-gray-700 text-sm">
                Great Hotel with very good ambience and it is the right place to be. There is no where better.
            </p>
        </div>
        <div class="flex justify-between px-6 pb-4 text-sm">
            <p><i class="fas fa-location-arrow mr-1 text-primary"></i>Kuto, Abeokuta</p>
            <a href=""><i class="fas fa-phone-alt mr-1 text-primary"></i>0703-234-2234</a>
        </div>
    </div>

</div>
<div class="container mx-auto text-center md:mb-5">
    <a href="" class="btn btn-primary shadow">View More</a>
</div>
@endsection
@section('footer')
@include('includes.footer')

@endsection