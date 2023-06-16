@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="">
    <div class="container pb-8 px-6 py-6 sm:px-0 sm:py-12 text-left">
        <h1 class="font-bold text-2xl sm:text-3xl bg-clip-text mb-2 text-color-prime px-4">Welcome Harold!</h1>
        <p class="hidden sm:block px-4 text-write text-base">
            To get started pick up a language of your choice below
        </p>
        <p class="block text-md px-0 sm:hidden text-gray-400">Community created roadmaps, guides and articles to help developers grow in their career.
        </p>
    </div>
</div>
<div class=" py-10 relative sm:py-8">
    <div class=container>
        <h2 class="mb-7 px-3 py-1 title-headline">Popular Languages
            <div class="line"></div>
        </h2>
        <ul class="px-3 gap-5 grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2">
            <li>
                <a href="frontend.html" class="language-ctn group"><span>Python</span>
                    {{-- <ion-icon name="logo-python" class="icon-lang"></ion-icon> --}}
                </a>
            </li>
            <li>
                <a href="backend.html" class="language-ctn group">
                    <span>Java</span>
                </a>
            </li>
            <li>
                <a href="devops.html" class="language-ctn group">
                    <span>Html</span>
                </a>
            </li>
            <li>
                <a href="full-stack.html" class="language-ctn group">
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
                <a href="android.html" class="language-ctn group">
                    <span>Javascript</span>
                </a>
            </li>
            <li>
                <a href="postgresql-dba.html" class="language-ctn group">
                    <span>PHP</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="py-10 relative sm:py-14">
    <div class=container>
        <h2 class="mb-7 px-3 py-1 title-headline">Popular Links
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
