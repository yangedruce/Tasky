@extends('layouts.app-dashboard')

@section('title')
{{ __('Team Members') }}
@endsection

@section('content')
<div class="d-flex position-fixed align-items-center end-0 bottom-0 mb-3 mb-md-5 me-3 me-md-5">
    <div class="d-block me-3">
        <p class="fs-6 mb-0 text dark">Add members</p>
    </div>
    <div class="d-block">
        <button class="bg-transparent add-button">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="#0C0B0B" viewBox="0 0 24 24" style="height: 20px; width: 20px;">
                <path d="M 11 3 L 11 11 L 3 11 L 3 13 L 11 13 L 11 21 L 13 21 L 13 13 L 21 13 L 21 11 L 13 11 L 13 3 L 11 3 z"></path>
            </svg>
        </button>
    </div>
</div>
<div class="container px-xl-5">
    <h1 class="ff-baloo text-dark">Team Members</h1>
    <div class="row g-3 mt-4">
        <div class="col-12 col-md-4">
            <div class="bg-grey main-box">
                <div class="d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img') }}/avatar.svg" alt="" class="avatar me-3">
                        <p class="fs-6 text-dark ff-baloo mb-0">
                            Peter
                            <small class="d-block ff-roboto text-green">Admin</small>
                        </p>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="3" height="13" viewBox="0 0 3 13" fill="#0C0B0B" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="6.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="11.5" r="1.5" fill="#0C0B0B"/>
                            </svg>                                
                        </button>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton1" style="border: none;">
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make admin</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make manager</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Remove member</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="bg-grey main-box">
                <div class="d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img') }}/avatar.svg" alt="" class="avatar me-3">
                        <p class="fs-6 text-dark ff-baloo mb-0">
                            Ethan
                            <small class="d-block ff-roboto text-dark">Member</small>
                        </p>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="3" height="13" viewBox="0 0 3 13" fill="#0C0B0B" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="6.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="11.5" r="1.5" fill="#0C0B0B"/>
                            </svg>                                
                        </button>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton2" style="border: none;">
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make admin</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make manager</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Remove member</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="bg-grey main-box">
                <div class="d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex">
                        <img src="{{ asset('assets/img') }}/avatar.svg" alt="" class="avatar me-3">
                        <p class="fs-6 text-dark ff-baloo mb-0">
                            Josh
                            <small class="d-block ff-roboto text-dark">Member</small>
                        </p>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="3" height="13" viewBox="0 0 3 13" fill="#0C0B0B" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="6.5" r="1.5" fill="#0C0B0B"/>
                                <circle cx="1.5" cy="11.5" r="1.5" fill="#0C0B0B"/>
                            </svg>                                
                        </button>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton3" style="border: none;">
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make admin</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Make manager</small></a></li>
                            <li><a class="dropdown-item dropdown-box" href="#"><small>Remove member</small></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection