@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="main-page">
    <div class="container pb-14 px-6 py-6 sm:px-0 sm:py-5 sm:text-center">
        <h1 class="font-bold text-2xl sm:text-5xl bg-clip-text mb-2 sm:mb-4 text-color-prime text-center">No more complaining from Developers</h1>
        <p class="text-base text-center sm:block px-4 text-write sm:text-lg">
            Empowering Developers to Win Their Coding Journey with the Ultimate Resource Hub.
        </p>

        <a href="/signup" class="my-btn w-fit mx-auto mt-2">Get Started</a>
        <div class="mx-auto w-10/12 flex justify-center mt-10">
            <img src="/assets/images/languages.png" class="rounded-2xl"/>
        </div>
    </div>
</div>
<div class="py-10 relative sm:py-8">
    <div class="container flex flex-col justify-end items-center">
        <h1 class="title-headline mb-7">Why WinLearn <div class="line-center"></div></h1>
        <p class="sm:block px-4 text-write text-base  leading-tight text-center">
            WinLearn is a website ressources where new beginners and advanced developers can find an easy roadmap to learn a programming language step by step.
        </p>
    </div>
</div>

<div class="py-10 relative sm:py-8">
    <div class="container flex flex-col justify-end items-center">
        <h1 class="title-headline mb-7">Our Key Features<div class="line-center"></div></h1>
        <div class="features">
            <div class="group">
                <h3>Structure Roadmap</h3>
                <div class="feature-img">
                    <img src="/assets/images/roadmap.png"/>
                </div>
                <p>
                    Guided learning path tailored to programming languages, providing a step-by-step roadmap for beginners and advanced programmers.
                </p>
            </div>
            <div class="group">
                <h3>Accurate Resources</h3>
                <div class="feature-img">
                    <img src="/assets/images/link.png"/>
                </div>
                <p>
                    Curated collection of high-quality articles, tutorials, and blog posts offering valuable insights and in-depth knowledge on various programming topics.
                </p>
            </div>
            <div class="group">
                <h3>Hands-On Projects</h3>
                <div class="feature-img">
                    <img src="/assets/images/project.png"/>
                </div>
                <p>
                    Engaging coding projects with clear instructions and challenges to apply learned skills, fostering practical experience and enhancing problem-solving abilities.
                </p>
            </div>

        </div>

    </div>
</div>

<div class="py-10 relative sm:py-8">
    <div class="container flex flex-col items-center">
        <h2 class="mb-7 px-3 py-1  title-headline">Popular Languages
            <div class="line-center"></div>
        </h2>
        <ul class="px-3 w-full gap-5 grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2">
            <li>
                <a  class="language-ctn group"><span>Python</span>
                </a>
            </li>
            <li>
                <a  class="language-ctn group">
                    <span>Java</span>
                </a>
            </li>
            <li>
                <a  class="language-ctn group">
                    <span>Html</span>
                </a>
            </li>
            <li>
                <a  class="language-ctn group">
                    <span>Css</span>
                    {{-- <span class="flex items-center font-medium absolute bottom-1.5 right-2 rounded-br rounded-tl text-xs text-purple-300">
                        <span class="flex h-2 mr-1.5 w-2">
                            <span class="h-2 w-2 inline-flex rounded-full absolute animate-ping opacity-75 bg-purple-400"></span>
                            <span class="h-2 w-2 inline-flex rounded-full relative bg-purple-500">

                            </span>
                        </span>
                        New
                    </span> --}}
                </a>
            </li>
            <li>
                <a  class="language-ctn group">
                    <span>Javascript</span>
                </a>
            </li>
            <li>
                <a  class="language-ctn group">
                    <span>PHP</span>
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- <div class="py-10 relative sm:py-8">
    <div class="container flex flex-col items-center">
        <h2 class=" mb-5 px-3 py-1 title-headline">Popular Links
            <div class="line-center"></div>
        </h2>
        <div class="mt-3 sm:my-5 px-3 w-full">
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs

                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>

            </a>
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs

                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>

            </a>
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs

                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>

            </a>
        </div>
    </div>
</div> --}}
@include('../../components/team')

@stop
