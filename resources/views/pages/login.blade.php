@extends('../templates/main')

@section('template-header')

@stop

@section('template-footer')
    <!-- Chart JS -->

@stop

@section('content')

<div class="">
    <div class="container pb-14 px-6 py-6 sm:px-0 sm:py-20 sm:text-center text-center">
        <h1 class="font-bold text-2xl sm:text-4xl bg-clip-text mb-2 sm:mb-2 text-color-prime">Welcome back. Sign in here</h1>
        <p class="hidden sm:block px-4 text-write text-lg">
            Each day is a learning day. Don't stop on your journey
        </p>
        <div class="auth-ctn sm:w-2/5 mt-3">
            {{-- <h3 class="concept-title">Python Language</h3> --}}
            <form class="flex flex-col gap-2" method="POST" action="{{ route('login_post') }}">
                @csrf
                <div class="auth-error">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="form-single">
                    <label>Username</label>
                    <input type="text" placeholder="elias20" name="username"/>
                    {{-- <span>Error</span> --}}
                </div>
                <div class="form-single">
                    <label>Password</label>
                    <input type="password" placeholder="*******" name="password"/>
                    {{-- <span>Error</span> --}}
                </div>
                <div class="special-form-content">
                    <a href="{{route('signup')}}">Don't have an account?</a>
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
