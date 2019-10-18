@extends('layouts.master')

@section('title','Single Listing Name')

@section('header')
@include('includes.navbar')
<section>
    <div class="pb-64 h-full lg:py-24"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/listing-image.jpg) top center;background-size: cover;">
    </div>
    <div class="mt-4">
        <div class="container">
            <a href="" class="btn btn-primary">Go back</a>
            <h2 class="text-2xl font-bold mt-6">The Lounge and Bar</h2>
        </div>
    </div>
</section>
@endsection


@section('content')
<div>
    <div class="container mx-auto">

        <div class="mt-5">
            <div class="bg-grey rounded p-4">
                <p class="font-bold">$ Lorem ipsum dolor sit amet |</p>
                <p class="font-bold">$ 0803-122-3223 |</p>
            </div>

        </div>
        <div class="mt-5">
            <h4 class="text-2xl">Description</h4>
            <div class="border-t-tiny mt-2 border-gray-500"></div>
            <p class="mt-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ab quia excepturi unde adipisci quam ullam
                inventore doloribus assumenda asperiores!. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Molestiae, dolorem?
            </p>
        </div>
        <div class="mt-5">
            <h4 class="text-2xl">Services</h4>
            <div class="border-t-tiny mt-2 border-gray-500"></div>
            <p class="mt-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ab quia excepturi unde adipisci quam ullam
                inventore doloribus assumenda asperiores!. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Molestiae, dolorem?
            </p>
        </div>
        <div class="mt-5">
            <h4 class="text-2xl">Gallery</h4>
            <div class="border-t-tiny mt-2 border-gray-500"></div>

        </div>
    </div>
    <div
        class="container mx-auto flex overflow-x-auto pb-8 px-4 lg:overflow-hidden lg:flex-wrap lg:justify-between disable-scrollbars">
        <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
            <a href=""><img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image"></a>
        </div>
        <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
            <a href=""><img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image"></a>
        </div>
        <div class="max-w-xs lg:mr-0 w-full flex-shrink-0 rounded overflow-hidden shadow-lg mt-5 mr-4 lg:w-1/3 ">
            <a href=""><img class="w-full" src="/img/hotel-image.jpg" alt="hotel-image"></a>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="mt-5">
            <h4 class="text-2xl">Business Details</h4>
            <div class="border-t-tiny mt-2 border-gray-500"></div>
            <div class="flex flex-col my-2">
                <div class="md:flex md:justify-between">

                    <p class="mt-2">
                        <a href=""><i class="fas fa-phone-alt mr-1"></i>0803-122-3223</a>
                    </p>
                    <p class="mt-2">
                        <a href=""><i class="fas fa-map-marker-alt mr-1"></i>Lorem ipsum dolor sit amet.</a>
                    </p>
                    <p class="mt-2">
                        <a href="">
                            <i class="fab fa-firefox mr-1"></i></i>company.com
                        </a>
                    </p>
                    <p class="mt-2">
                        <a href=""><i class="fas fa-at mr-1"></i>info@company.com</a>
                    </p>
                </div>
                <div class="md:flex">

                    <p class="mt-2 md:mr-4">
                        <a href=""><i class="fab fa-facebook-f mr-1"></i>Facebook</a>
                    </p>
                    <p class="mt-2 md:mr-4">
                        <a href=""><i class="fab fa-twitter mr-1"></i>Twitter</a>
                    </p>
                    <p class="mt-2 md:mr-4">
                        <a href=""><i class="fab fa-instagram mr-1"></i>Instagram</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
@section('footer')
@include('includes.footer')

@endsection