@extends('layout.main')

@section("content")
    <div
        class="flex min-h-screen items-center justify-center bg-[url('../images/map.svg')] bg-cover bg-center dark:bg-[url('../images/map-dark.svg')]">
        <div class="panel m-6 w-full max-w-lg sm:w-[480px]">
            <h2 class="mb-3 text-2xl font-bold">ثبت نام</h2>
            <p class="mb-7">برای ثبت نام ایمیل و رمز عبور خود را وارد کنید</p>
            <form class="space-y-5" action="{{ route('Resister.Store') }}" method="POST">
                @csrf
                <div>
                    <label for="name">نام</label>
                    <input id="name" name="name" type="text" class="form-input" placeholder="نام را وارد کنید" value="{{old('name')}}"/>
                    @error('name')
                    <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="email">ایمیل</label>
                    <input id="email" name="email" type="email" class="form-input" placeholder="ایمیل را وارد کنید" value="{{old('email')}}"/>
                    @error('email')
                    <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password">رمزعبور</label>
                    <input id="password" name="password" type="password" class="form-input" placeholder="رمزعبور را وارد کنید" value="{{old('password')}}"/>
                    @error('password')
                    <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="password_confirmation">تکرار رمزعبور</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-input" placeholder="رمزعبور را وارد کنید" value="{{old('password_confirmation')}}"/>
                    @error('password_confirmation')
                    <p class="mt-2 text-rose-500">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label class="cursor-pointer">
                        <input type="checkbox" class="form-checkbox"/>
                        <span for="custom_checkbox" class="text-white-dark"
                        >موافقم با <a href="javascript:;" class="text-primary hover:underline">شرایط و ضوابط</a></span
                        >
                    </label>
                </div>
                <button type="submit" class="w-full btn btn-primary">ثبت نام</button>
            </form>
            <div
                class="relative my-7 h-5 text-center before:absolute before:inset-0 before:m-auto before:h-[1px] before:w-full before:bg-[#ebedf2] dark:before:bg-[#253b5c]"
            >
            </div>
            <p class="text-center">
                از قبل حساب کاربری دارید؟ <a href="{{route('login')}}"
                                             class="font-bold text-primary hover:underline">ورود</a>
            </p>
        </div>
    </div>
@endsection

