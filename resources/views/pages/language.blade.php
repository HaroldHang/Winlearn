@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="">
    <div class="container pb-7 px-6 py-6 sm:px-0 sm:py-10 sm:text-left text-left">
        <h1 class=" font-bold text-2xl sm:text-4xl bg-clip-text mb-2 sm:mb-4 text-color-prime">How to learn Python?</h1>
        <p class="hidden sm:block text-write text-lg">
            Learn Python the right way
        </p>
        <p class="block text-md px-0 sm:hidden text-gray-400">Community created roadmaps, guides and articles to help developers grow in their career.
        </p>
        <div class="flex gap-2">
            <a class="my-btn w-fit mt-2">
                <span>Get the pdf</span>
            </a>
            <a class="my-btn-state w-fit mt-2">
                <span>Visit projects</span>
            </a>
        </div>
    </div>
</div>
<div class="py-10 relative sm:py-14 bg-gray-200 sm:pt-2">
    <div class="container concept-ctn">
        <h2 class="left-0 mb-7 px-3 py-1  sm:left-1/2 title-headline">Learn the concepts
            <div class="line"></div>
        </h2>
        <div class="flex justify-between gap-5">
            <ul class="px-1 gap-6 grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2  w-2/3 h-fit">
                <li>
                    <div class="concept-start"><span></span>
                        <span>Start Here</span>
                    </div>
                </li>
                <li>
                    <div class="concept-single group">
                        <span>1</span> <span class="dash"></span> <span>Learn the basics</span>
                    </div>
                </li>
                <li>
                    <div class="concept-single group">
                        <span>2</span> <span class="dash"></span> <span>Basic syntax</span>
                    </div>
                </li>
                <li>
                    <div class="concept-single group">
                        <span>3</span> <span class="dash"></span> <span>Learn the basics</span>
                    </div>
                </li>
                <li>
                    <div class="concept-single group">
                        <span>4</span> <span class="dash"></span> <span>Learn the basics</span>
                    </div>
                </li>
                <li>
                    <div class="concept-single group">
                        <span>5</span> <span class="dash"></span> <span>Learn the basics</span>
                    </div>
                </li>
            </ul>
            <div class="concept-desc w-1/3">
                <h3 class="concept-title">Python Language</h3>
                <p class="concept-short">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore omnis corrupti sunt maxime autem accusantium, rerum qui? Velit recusandae accusamus nobis dolorum, qui non! Nam quod minima soluta ratione.
                </p>
                <p class="concept-link-enter">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <ul class="concept-link list-disc list-outside">
                    <li>
                        <a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                    </li>
                    <li>
                        <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit</a>
                    </li>
                    <li>
                        <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit</a>
                    </li>
                    <li>
                        <a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="py-10 relative sm:py-14">
    <div class=container>
        <h2 class="left-0 mb-7 px-3 py-1  sm:left-1/2 title-headline">More Links
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
