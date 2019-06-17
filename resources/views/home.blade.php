@php

// WHY-US
    $array_of_case = __('why-us.list_of_case'); // Why-us

// OUR-CAMPAIGNS

    $array_of_campaign = __('our-campaigns.list_of_case_left');

@endphp

@extends('layout.master')

@section('content')
    <section class="hero | container">
        <div class="hero__inner | col-xl-8 col-lg-10">
            <h1 class="hero__inner__title | title title--big">{!! __('hero.title') !!}</h1>
            <a class="hero__inner__link | link" href="/" title="Lien pour faireun don">{!! __('hero.link') !!}</a>
        </div>
    </section>

    <section class="why-us | layout layout--special-color">
        <div class="why-us__container | container">
            <div class="why-us__inner | offset-1 col-lg-4 col-md-8">
                <ol class="why-us__inner__left">

                    @foreach ($array_of_case as $number => $case)
                        @if($number === 0)
                        <li class="why-us__inner__case | subtitle">
                            <h2 class="why-us__inner__title">{!! $case !!}</h2>
                        </li>
                        @else
                        <li class="why-us__inner__case">
                            <button class="why__us__inner__button">
                                <span class="why-us__inner__number">0{!! $number !!}</span> {!! $case !!}
                            </button>
                        </li>
                        @endif
                    @endforeach

                </ol>
            </div>
            <div class="why-us__inner__right">
                <h3 class="why-us__right__title | title title--medium">{!! __('why-us.title-implant') !!}</h3>
                <p class="why-us__right__body-strong">{!! __('why-us.body-to-implant-1') !!}</p>
                <p class="why-us__right__body">{!! __('why-us.body-to-implant-2') !!}</p>

                <div class="why-us__right__links">
                    <a class="why-us__right__button-read-more | link-different">{!! __('why-us.button-read-more') !!}</a>
                    <a class="why-us__right__button-download | link-different">{!! __('why-us.button-download') !!}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="our-campaigns | container layout layout--no-margin-top">
        <p class="our-campaigns__subtitle">{!! __('our-campaigns.subtitle') !!}</p>
        <h3 class="our-campaigns__title | title title--medium">{!! __('our-campaigns.title') !!}</h3>
        <div class="our-campaigns__inner__container">
            <ul class="our-campaigns__inner__left | col-lg-6 col-md-12">
                <li class="our-campaigns__inner__capital">
                        <header class="our-campaigns__capital__header">
                            <p class="our-campaigns__capital__subtitle">{!! __('our-campaigns.list_of_case_left.capital.subtitle') !!}</p>
                            <h4 class="our-campaigns__capital__title | title title--large">{!! __('our-campaigns.list_of_case_left.capital.title') !!}</h4>
                        </header>
                        <div class="our-campaigns__capital__block">
                            <p class="our-campaigns__capital__contrib">{!! __('our-campaigns.list_of_case_left.capital.contributors') !!}
                            </p>
                            <p class="our-campaigns__capital__win">{!! __('our-campaigns.list_of_case_left.capital.win') !!}</p>
                            <p class="our-campaigns__capital__goal">{!! __('our-campaigns.list_of_case_left.capital.goal') !!}</p>
                            <h4 class="our-campaign__capital__mean | title title--xl">{!! __('our-campaigns.list_of_case_left.capital.mean') !!}</h4>
                        </div>
                </li>

                <li class="our-campaigns__inner__capital | our-campaigns__inner__capital--color">
                        <header class="our-campaigns__capital__header">
                            <p class="our-campaigns__capital__subtitle">{!! __('our-campaigns.list_of_case_left.help.subtitle') !!}</p>
                            <h4 class="our-campaigns__capital__title | title title--large">{!! __('our-campaigns.list_of_case_left.help.title') !!}</h4>
                        </header>
                        <div class="our-campaigns__capital__block">
                            <p class="our-campaigns__capital__contrib">{!! __('our-campaigns.list_of_case_left.help.contributors') !!}
                            </p>
                            <p class="our-campaigns__capital__win">{!! __('our-campaigns.list_of_case_left.help.win') !!}</p>
                            <p class="our-campaigns__capital__goal">{!! __('our-campaigns.list_of_case_left.help.goal') !!}</p>
                            <h4 class="our-campaign__capital__mean | title title--xl">{!! __('our-campaigns.list_of_case_left.help.mean') !!}</h4>
                        </div>
                </li>

                <li class="our-campaigns__inner__capital">
                        <header class="our-campaigns__capital__header">
                            <p class="our-campaigns__capital__subtitle">{!! __('our-campaigns.list_of_case_left.video.subtitle') !!}</p>
                            <h4 class="our-campaigns__capital__title | title title--large">{!! __('our-campaigns.list_of_case_left.video.title') !!}</h4>
                        </header>
                        <div class="our-campaigns__capital__block">
                            <p class="our-campaigns__capital__contrib">{!! __('our-campaigns.list_of_case_left.video.contributors') !!}
                            </p>
                            <p class="our-campaigns__capital__win">{!! __('our-campaigns.list_of_case_left.video.win') !!}</p>
                            <p class="our-campaigns__capital__goal">{!! __('our-campaigns.list_of_case_left.video.goal') !!}</p>
                            <h4 class="our-campaign__capital__mean | title title--xl">{!! __('our-campaigns.list_of_case_left.video.mean') !!}</h4>
                        </div>
                    </li>
            </ul>

            <ul class="our-campaigns__inner__right | col-lg-6 col-md-12">

                <li class="our-campaigns__inner__different">
                        <header class="our-campaigns__capital__header--different">
                            <p class="our-campaigns__capital__subtitle">{!! __('our-campaigns.list_of_case_right.white-ear.subtitle') !!}</p>
                            <h4 class="our-campaigns__capital__title | title title--large">{!! __('our-campaigns.list_of_case_right.white-ear.title') !!}</h4>
                            <p class="our-campaigns__capital__text">{!! __('our-campaigns.list_of_case_right.white-ear.text') !!}</p>
                        </header>
                        <div class="our-campaigns__capital__different">
                            <a href="/" class="our-campaigns__capital__link">{!! __('our-campaigns.list_of_case_right.white-ear.link') !!}</a>
                        </div>
                </li>

                <li class="our-campaigns__inner__capital">
                        <header class="our-campaigns__capital__header">
                            <p class="our-campaigns__capital__subtitle">{!! __('our-campaigns.list_of_case_right.title.subtitle') !!}</p>
                            <h4 class="our-campaigns__capital__title | title title--large">{!! __('our-campaigns.list_of_case_right.title.title') !!}</h4>
                        </header>
                        <div class="our-campaigns__capital__block">
                            <p class="our-campaigns__capital__contrib">{!! __('our-campaigns.list_of_case_right.title.contributors') !!}
                            </p>
                            <p class="our-campaigns__capital__win">{!! __('our-campaigns.list_of_case_right.title.win') !!}</p>
                            <p class="our-campaigns__capital__goal">{!! __('our-campaigns.list_of_case_right.title.goal') !!}</p>
                            <h4 class="our-campaign__capital__mean | title title--xl">{!! __('our-campaigns.list_of_case_right.title.mean') !!}</h4>
                        </div>
                </li>
            </ul>
        </div>
    </section>
@endsection