@extends('layouts.master')

@section('title','Get Listed')

@section('header')
@include('includes.navbar')
<section class="mt-4">
    <div class="container">
        <a href="" class="btn btn-primary">Go back</a>
        <h2 class="text-2xl font-bold mt-6 lg:text-center">Add Listing</h2>
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
                <h2 class="text-base ml-4">Basic Information</h2>
            </div>
            <div class="bg-grey p-4">
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Company Name
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Company Name">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Categories
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Categories">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Keywords
                    </label>
                    <input class="form-input border border-gray-200" type="text"
                        placeholder="Keywords (seperate with comma)">
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="bg-secondary text-white flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.308" height="19.314">
                    <g fill="none" stroke="#fff" data-name="Group 26">
                        <path d="M.5.5v18.314h14.308V4.792L10.516.5z" data-name="Path 50" />
                        <path d="M14.808 5.139h-4.056V.712" data-name="Path 51" />
                    </g>
                </svg>
                <h2 class="text-base ml-4">Location</h2>
            </div>
            <div class="bg-grey p-4">
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Address
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Address">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        City
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="City">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        State
                    </label>
                    <div class="relative">
                        <select class="form-input">
                            <option>Ogun</option>
                            <option>Lagos</option>
                            <option>Bauchi</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="bg-secondary text-white flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.308" height="19.314">
                    <g fill="none" stroke="#fff" data-name="Group 26">
                        <path d="M.5.5v18.314h14.308V4.792L10.516.5z" data-name="Path 50" />
                        <path d="M14.808 5.139h-4.056V.712" data-name="Path 51" />
                    </g>
                </svg>
                <h2 class="text-base ml-4">Gallery</h2>
            </div>
            <div class="bg-grey p-4">
                <div class="p-20 border border-gray-500 bg-white border-dashed rounded">
                    <a href=""> <svg class="mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                            <g fill="none" stroke="#707070" stroke-width="2" data-name="Group 32">
                                <g data-name="Ellipse 2">
                                    <circle cx="13" cy="13" r="13" stroke="none" />
                                    <circle cx="13" cy="13" r="12" />
                                </g>
                                <g data-name="Group 31">
                                    <path d="M13.392 6.5v12.855" data-name="Line 18" />
                                    <path d="M6.5 12.928h14" data-name="Line 19" />
                                </g>
                            </g>
                        </svg>
                        <p class="text-xs text-center">Click here or drop files to upload</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div class="bg-secondary text-white flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.308" height="19.314">
                    <g fill="none" stroke="#fff" data-name="Group 26">
                        <path d="M.5.5v18.314h14.308V4.792L10.516.5z" data-name="Path 50" />
                        <path d="M14.808 5.139h-4.056V.712" data-name="Path 51" />
                    </g>
                </svg>
                <h2 class="text-base ml-4">Details</h2>
            </div>
            <div class="bg-grey p-4">
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Description
                    </label>
                    <textarea class="form-input border border-gray-200" cols="5" type="text"
                        placeholder="Description"></textarea>
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Services
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Services">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Phone (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="number" placeholder="Phone">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Website (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Website">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Email (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Email">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Facebook Link (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Facebook">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Twitter Link (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Twitter">
                </div>
                <div class="mt-2">
                    <label for="company-name" class="block font-bold text-gray-700 text-xs mb-2">
                        Instagram Link (Optional)
                    </label>
                    <input class="form-input border border-gray-200" type="text" placeholder="Instagram">
                </div>
                <div class="mt-2">
                    <label class="items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-xs">I agree to the <span class="underline">terms and
                                condition</span></span>
                    </label>
                </div>

            </div>
        </div>
        <div class="mt-5 md:mb-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>
@endsection
@section('footer')
@include('includes.footer')

@endsection