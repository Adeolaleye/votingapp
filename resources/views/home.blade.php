@extends('layout')

@section ('content')
<div class="section-xl section-hero section-shaped">
    <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
    </div>
    <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 text-center">
                        <p class="sub-title">VOTING TIME</p>
                        <h1 class="text-white display-1">Vote Your Favourite</h1> 
                        {{-- Your name={{ isset(auth()->user()->name) ?  auth()->user()->name : ''}} --}}
                        <h2 class="display-4 font-weight-normal text-white">Powered by Stardom Global Television</h2>
                        <div class="btn-wrapper mt-4">
                            <a href="#vote" class="btn btn-primary btn-icon mt-3 mb-sm-0">
                                <span class="btn-inner--text">Vote Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<div class="section features-6" id="vote">
    <div class="container">
        <div class="py-3 mb-3 border-bottom text-center">
            <div class="row justify-content-center">
              <div class="col-lg-9">
                <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                <a href="http://sgtv.tv/">Show more</a>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title display-3 text-center">Categories</h2>
            </div>
            @foreach ($contestantCat as $contestant)
            <div class="col-lg-6">
                <div class="info info-horizontal info-hover-primary card shadow m-4">
                    <div class="description p-4">
                        <p class="text-center">{{$contestant->contestantcategories}}</p>
                        <a href="{{ route('contestant.show', $contestant->id) }}"
                            class="btn btn-primary mb-4 mt-4 center">Click to vote</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br /><br />
@endsection
