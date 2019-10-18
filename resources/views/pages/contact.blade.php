@extends('layouts.master')

@section('title','Contact')

@section('header')
@include('includes.navbar')
<section class="mt-4">
    <div class="container">
        <a href="" class="btn btn-primary">Go back</a>
        <h2 class="text-2xl font-bold mt-6 lg:text-center">Contact Us</h2>
    </div>
</section>
@endsection

@section('content')
<section class="container mx-auto mt-5">
    <form action="" class="lg:max-w-3xl lg:mx-auto">
        <div>
            <div class="bg-secondary text-white flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.308" height="19.314">
                    <g fill="none" stroke="#fff" data-name="Group 26">
                        <path d="M.5.5v18.314h14.308V4.792L10.516.5z" data-name="Path 50" />
                        <path d="M14.808 5.139h-4.056V.712" data-name="Path 51" />
                    </g>
                </svg>
                <h2 class="text-base ml-4">Get in touch with us!</h2>
            </div>
            <div class="bg-grey p-4">
                <div class="mt-2">
                    <label for="name" class="block font-bold text-gray-700 text-xs mb-2">
                        Name
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Name">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Email Address
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="example@mail.com">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Subject
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Subject">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Message
                    </label>
                    <textarea class="form-input border border-gray-200" type="text"
                        placeholder="Please enter your message" rows="8"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-5 md:mb-5">
            <button type="submit" class="btn btn-primary">Submit Message</button>
        </div>
    </form>
</section>
@endsection
@section('footer')
@include('includes.footer')

@endsection