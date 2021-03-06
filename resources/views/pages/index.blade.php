@extends('layouts.master')

@section('title','Home')

@section('header')
@include('includes.navbar')
<section class="pb-20 h-full lg:py-24" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/header-image.jpg) top center;

  background-size: cover;">
    <div class="container mx-auto">
        <div class="pt-10 lg:text-center lg:pt-0">
            <h1 class="text-3xl text-white font-bold lg:text-5xl">Products and Services in Ogun State</h1>
            <h3 class="text-white text-small lg:text-2xl">Explore businesses operating in the Gateway State</h3>
        </div>
        <div class="mt-16 lg:mt-8">
            @include('includes.form')
        </div>

    </div>
</section>
@endsection

@section('content')
<div class="container mx-auto mt-10">

    <div class="text-center">
        <h1 class="text-2xl lg:text-3xl">Porpular Categories</h1>
        <div class="w-20 border-t-2 mt-1 border-primary mx-auto"></div>
    </div>
    <div class="mt-5 flex flex-row flex-wrap">
        <a href="#" class="mx-auto">
            <div class="bg-gray-200 rounded-lg max-w-sm p-4 mb-2 " style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/category-image.jpg) top center;
      background-size: cover;">
                <div class="text-center">
                    <h3 class="text-white text-xl">Restaurant</h3>
                    <span class="text-black text-sm bg-gray-200 p-1 rounded-lg">23</span>
                </div>
            </div>
        </a>
        <a href="#" class="mx-auto">
            <div class="bg-gray-200 rounded-lg max-w-sm p-4 mb-2 " style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/category-image.jpg) top center;
      background-size: cover;">
                <div class="text-center">
                    <h3 class="text-white text-xl">Restaurant</h3>
                    <span class="text-black text-sm bg-gray-200 p-1 rounded-lg">23</span>
                </div>
            </div>
        </a>
        <a href="#" class="mx-auto">
            <div class="bg-gray-200 rounded-lg max-w-sm p-4 mb-2 " style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/category-image.jpg) top center;
      background-size: cover;">
                <div class="text-center">
                    <h3 class="text-white text-xl">Restaurant</h3>
                    <span class="text-black text-sm bg-gray-200 p-1 rounded-lg">23</span>
                </div>
            </div>
        </a>
        <a href="#" class="mx-auto">
            <div class="bg-gray-200 rounded-lg max-w-sm p-4 mb-2 " style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/category-image.jpg) top center;
      background-size: cover;">
                <div class="text-center">
                    <h3 class="text-white text-xl">Restaurant</h3>
                    <span class="text-black text-sm bg-gray-200 p-1 rounded-lg">23</span>
                </div>
            </div>
        </a>

    </div>
</div>
<div class="container mx-auto mt-10 text-center">
    <h1 class="text-2xl lg:text-3xl">Premium Adverts</h1>
    <div class="w-20 border-t-2 mt-1 border-primary mx-auto"></div>
</div>
<div
    class="container mx-auto flex overflow-x-auto pb-8 px-4 lg:overflow-hidden lg:flex-wrap lg:justify-between disable-scrollbars">
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
<div class="container mx-auto text-center">
    <a href="" class="btn btn-primary shadow">View More</a>
</div>
<div class="container mx-auto mt-10 text-center">
    <h1 class="text-2xl lg:text-3xl">Our Partners</h1>
    <div class="w-20 border-t-2 mt-1 border-primary mx-auto"></div>
</div>
<div class="flex overflow-x-auto pb-8 px-4 disable-scrollbars">
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">

    </div>
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4 ">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">

    </div>
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4 ">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">
    </div>
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4 ">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">
    </div>
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4 ">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">
    </div>
    <div class="max-w-xs w-full flex-shrink-0 overflow-hidden mt-5 mr-4 ">
        <img class="w-full" src="/img/partner-image.png" alt="partner-image">
    </div>
</div>
@endsection
@section('footer')
@include('includes.footer')

@endsection