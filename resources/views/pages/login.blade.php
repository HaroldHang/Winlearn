@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="">
    <div class="container pb-14 px-6 py-6 sm:px-0 sm:py-20 sm:text-center text-left">
        <h1 class="font-bold text-2xl sm:text-4xl bg-clip-text mb-2 sm:mb-2 text-color-prime">Welcome back. Sign in here</h1>
        <p class="hidden sm:block px-4 text-write text-lg">
            Each day is a learning day. Don't stop on your journey
        </p>
        
        <div class="auth-ctn w-2/5 mt-3">
            {{-- <h3 class="concept-title">Python Language</h3> --}}
            <form class="flex flex-col gap-2">
                <div class="form-single">
                    <label>Username</label>
                    <input type="text" placeholder="elias20"/>
                    {{-- <span>Error</span> --}}
                </div>
                <div class="form-single">
                    <label>Password</label>
                    <input type="password" placeholder="*******"/>
                    {{-- <span>Error</span> --}}
                </div>
                <div class="special-form-content">
                    <a href="#">Don't have an account?</a>
                </div>
                <div class="form-submit">
                    <button type="submit" class="my-btn">
                        Login
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>


@stop