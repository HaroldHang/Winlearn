@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="">
    <div class="container pb-7 px-6 py-6 sm:px-0 sm:py-10 sm:text-left text-left">
        <h1 class=" font-bold text-2xl sm:text-4xl bg-clip-text mb-2 sm:mb-4 text-color-prime">Python Projects</h1>
        <p class="sm:block text-write text-lg">
            Explore a complete list of projects to master your programming skills
        </p>
        <p class="block text-md px-0 sm:hidden text-gray-400">Community created roadmaps, guides and articles to help developers grow in their career.
        </p>
        {{-- <div class="flex gap-2">
            <a class="my-btn w-fit mt-2">
                <span>Get the pdf</span>
            </a>
            <a class="my-btn-state w-fit mt-2">
                <span>Visit projects</span>
            </a>
        </div> --}}
    </div>
</div>
<div class="py-10 relative sm:py-14 bg-gray-200 sm:pt-2">
    <div class="container">
        <h2 class="mb-7 px-3 py-1 title-headline">Handful Projects
            <div class="line"></div>
        </h2>
        <div class="flex justify-between gap-5">
            <ul class="px-1 gap-6 grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3  w-full h-fit">
                <li>
                    <div class="project-ctn w-full">
                        <h3 class="project-title">Tic Tac Toe</h3>
                        <div class="project-banner">
                            <img src="/assets/images/hand-project.jpg"/>
                        </div>
                        <p class="project-short">
                            It is a handful project made for it. Leran python form your confort of your home and gaining unrealistic experience in a short amount of time.
                        </p>
                        <div class="project-link">
                            <a href="#">
                                <i data-lucide="github"></i>
                            </a>

                        </div>
                    </div>

                </li>
                <li>
                    <div class="project-ctn w-full">
                        <h3 class="project-title">Tic Tac Toe</h3>
                        <div class="project-banner">
                            <img src="/assets/images/hand-project.jpg"/>
                        </div>
                        <p class="project-short">
                            It is a handful project made for it. Leran python form your confort of your home and gaining unrealistic experience in a short amount of time.
                        </p>
                        <div class="project-link">
                            <a href="#">
                                <i data-lucide="github"></i>
                            </a>

                        </div>
                    </div>

                </li>
                <li>
                    <div class="project-ctn w-full">
                        <h3 class="project-title">Tic Tac Toe</h3>
                        <div class="project-banner">
                            <img src="/assets/images/hand-project.jpg"/>
                        </div>
                        <p class="project-short">
                            It is a handful project made for it. Leran python form your confort of your home and gaining unrealistic experience in a short amount of time.
                        </p>
                        <div class="project-link">
                            <a href="#">
                                <i data-lucide="github"></i>
                            </a>

                        </div>
                    </div>

                </li>
                <li>
                    <div class="project-ctn w-full">
                        <h3 class="project-title">Tic Tac Toe</h3>
                        <div class="project-banner">
                            <img src="/assets/images/hand-project.jpg"/>
                        </div>
                        <p class="project-short">
                            It is a handful project made for it. Leran python form your confort of your home and gaining unrealistic experience in a short amount of time.
                        </p>
                        <div class="project-link">
                            <a href="#">
                                <i data-lucide="github"></i>
                            </a>

                        </div>
                    </div>

                </li>
                <li>
                    <div class="project-ctn w-full">
                        <h3 class="project-title">Tic Tac Toe</h3>
                        <div class="project-banner">
                            <img src="/assets/images/hand-project.jpg"/>
                        </div>
                        <p class="project-short">
                            It is a handful project made for it. Leran python form your confort of your home and gaining unrealistic experience in a short amount of time.
                        </p>
                        <div class="project-link">
                            <a href="#">
                                <i data-lucide="github"></i>
                            </a>

                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</div>

<div class="py-10 relative sm:py-14">
    <div class=container>
        <h2 class="mb-7 px-3 py-1 title-headline">More Links
            <div class="line"></div>
        </h2>
        <div class="mt-3 sm:my-5 px-3">
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs
                    {{-- <span class="text-xs font-medium bg-green-300 ml-1.5 px-1.5 py-0.5 rounded-sm text-green-900 uppercase">New
                        <span class="hidden sm:inline">&middot; May</span>
                    </span> --}}
                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>
                <span class="block sm:hidden text-gray-400 text-xs">&raquo;</span>
            </a>
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs
                    {{-- <span class="text-xs font-medium bg-green-300 ml-1.5 px-1.5 py-0.5 rounded-sm text-green-900 uppercase">New
                        <span class="hidden sm:inline">&middot; May</span>
                    </span> --}}
                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>
                <span class="block sm:hidden text-gray-400 text-xs">&raquo;</span>
            </a>
            <a href="guides/free-resources-to-learn-llms.html" class="popul-link group ">
                <span class=" transition-transform">5 Free Resources to Master LLMs
                    {{-- <span class="text-xs font-medium bg-green-300 ml-1.5 px-1.5 py-0.5 rounded-sm text-green-900 uppercase">New
                        <span class="hidden sm:inline">&middot; May</span>
                    </span> --}}
                </span>
                <span class="btn-follow group-hover:-translate-y-1 transition-transform">visit</span>
                <span class="block sm:hidden text-gray-400 text-xs">&raquo;</span>
            </a>
        </div>
    </div>
</div>
@stop
