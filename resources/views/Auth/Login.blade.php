@extends('layout.main')
@section('content')
    <div
        class="flex min-h-screen items-center justify-center bg-[url('../images/map.svg')] bg-cover bg-center dark:bg-[url('../images/map-dark.svg')]">
        <div class="panel m-6 w-full max-w-lg sm:w-[480px]">
            <h2 class="mb-3 text-2xl font-bold">ورود</h2>
            <p class="mb-7">برای ورود ایمیل و رمز عبور خود را وارد کنید</p>
            <form class="space-y-5" method="POST" action="{{ route('Login.Store') }}">
                @csrf
                <div>
                    <label for="email">ایمیل</label>
                    <input name="email" id="email" type="email" class="form-input" placeholder="ایمیل وارد کنید" value="{{ old('email')  }}"/>
                    @error('email')
                        <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password">رمزعبور</label>
                    <input name="password" id="password" type="password" class="form-input" placeholder="رمزعبور  وارد کنید" value="{{ old('password')  }}"/>
                    @error('password')
                        <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="cursor-pointer">
                        <input type="checkbox" class="form-checkbox"/>
                        <span class="text-white-dark">مشترک شدن در خبرنامه هفتگی</span>
                    </label>
                </div>
                <button type="submit" class="w-full btn btn-primary">ورود</button>
            </form>
            <div
                class="relative my-7 h-5 text-center before:absolute before:inset-0 before:m-auto before:h-[1px] before:w-full before:bg-[#ebedf2] dark:before:bg-[#253b5c]"
            >
            </div>
            <p class="text-center">
                حساب کاربری ندارید؟ <a href="{{ route('register') }}" class="font-bold text-primary hover:underline">ثبت
                    نام</a>
            </p>
        </div>
    </div>
@endsection
