<x-guest-layout>

    @section('content')

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="contact-two">
        <div class="contact-two__shape-1 float-bob-x">
            <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Sign Up.</span>
                <h2 class="section-title__title">Welcome</h2>
                <div class="section-title__icon">
                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                </div>
            </div>
            <div class="contact-two__form-box">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-xl-6">
                            <div class="contact-form__input-box">

                                <input type="text" placeholder="Full Name" name="name">

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="contact-form__input-box">

                                <input type="email" placeholder="Email Address" name="email">

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">

                                <input type="text" placeholder="Password" name="password">
                                 <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">

                                <input type="text" placeholder="Password Confirmation" name="password_confirmation">
                                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-12">

                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-two__btn">Register <i
                                        class="icon-right-arrow"></i> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @endsection

</x-guest-layout>
