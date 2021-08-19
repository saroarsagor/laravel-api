@extends('layouts.app')
@section('title')
    Registration Here
@endsection
@section('styles')
    {{-- <style>
        .vertical-layout.vertical-menu-modern .main-menu {
            width: 0px;
        }

        html .content {
            margin-left: 0px;
        }

        html .content.app-content {
            padding: 0px;
        }

    </style> --}}
@endsection

@section('content')

    {{-- <div class="content-body">
        <div class="auth-wrapper auth-v2">
            <div class="auth-inner row m-0">
                <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">
                    <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                        <defs>
                            <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                <stop stop-color="#000000" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </lineargradient>
                            <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                y2="100%">
                                <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" offset="100%"></stop>
                            </lineargradient>
                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                <g id="Group" transform="translate(400.000000, 178.000000)">
                                    <path class="text-primary" id="Path"
                                        d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                        style="fill: currentColor"></path>
                                    <path id="Path1"
                                        d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                        fill="url(#linearGradient-1)" opacity="0.2"></path>
                                    <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                    </polygon>
                                    <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                        points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                    </polygon>
                                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                        points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h2 class="brand-text text-primary ml-1">Vuexy</h2>
                </a>
                <!-- /Brand logo-->
                <!-- Left Text-->
                <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                    <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid"
                            src="{{ asset('backend/app-assets/images/pages/register-v2.svg') }}" alt="Register V2" /></div>
                </div>
                <!-- /Left Text-->
                <!-- Register-->
                <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                        <h2 class="card-title font-weight-bold mb-1">Adventure starts here 🚀</h2>
                        <p class="card-text mb-2">Make your app management easy and fun!</p>
                        <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="register-username">Coaching Name</label>
                                <input class="form-control" id="register-username" type="text" name="name"
                                    placeholder="johndoe" aria-describedby="register-username" autofocus="" tabindex="1" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="register-email">Email</label>
                                <input class="form-control" id="register-email" type="text" name="email"
                                    placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="register-password">Password</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input class="form-control form-control-merge" id="register-password" type="password"
                                        name="password" placeholder="············" aria-describedby="register-password"
                                        tabindex="3" />
                                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                                data-feather="eye"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="register-password">Confirm Password</label>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input class="form-control form-control-merge" id="register-password" type="password"
                                        name="password_confirmation" placeholder="············"
                                        aria-describedby="register-password" tabindex="3" />
                                    <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                                data-feather="eye"></i></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="register-privacy-policy" type="checkbox"
                                        tabindex="4" />
                                    <label class="custom-control-label" for="register-privacy-policy">I agree to<a
                                            href="javascript:void(0);">&nbsp;privacy policy & terms</a></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" tabindex="5">Sign up</button>
                        </form>
                        <p class="text-center mt-2"><span>Already have an account?</span><a
                                href="{{ route('login') }}"><span>&nbsp;Sign in instead</span></a></p>
                        <div class="divider my-2">
                            <div class="divider-text">or</div>
                        </div>
                        <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook"
                                href="javascript:void(0)"><i data-feather="facebook"></i></a><a
                                class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a
                                class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a
                                class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>
                    </div>
                </div>
                <!-- /Register-->
            </div>
        </div>
    </div> --}}

    <section class="faq-area ptb-80 mt-5 login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="faq-accordion">
                        <div id="toggleBtn1" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমি কিভাবে শুরু করতে পারি?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText1">
                            <p>
                                আমার ক্লায়েন্ট ব্যবহার করার জন্য আপনাকে অবশ্যই নিবন্ধন করতে
                                হবে নিবন্ধন আপনি মোবাইল অ্যাপ ব্যবহার করে বা ওয়েব সাইট ব্রাউজ
                                করে কম্পিউটারের মাধ্যমে খুব সহজেই করতে পারবেন ।
                            </p>
                        </div>

                        <div id="toggleBtn2" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমাকে প্রতি মাসে কত পেমেন্ট করতে হবে ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText2">
                            <p>
                                আপনাকে প্রতি মাসে সফটওয়্যারটি ব্যবহারের জন্য 250 টাকা সার্ভিস
                                চার্জ প্রদান করতে হবে। আমাদের মাসিক প্যাকেজ টি 30 দিনের জন্য
                                হয় ।
                            </p>
                        </div>

                        <div id="toggleBtn3" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি মাসিক ছাড়া আরো বেশি সময়ের জন্য কোন প্যাকেজ কিনতে
                                        পারব ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText3">
                            <p>
                                আপনি মাসিক প্যাকেজ টি বাদ দিয়েও আমাদের অর্ধ বার্ষিক বা
                                বাৎসরিক প্যাকেজটি নিয়ে দেখতে পারেন আমাদের অর্ধবার্ষিক
                                প্যাকেজটি 180 দিনের হয়, যার মূল্য 1200 টাকা এবং বাৎসরিক
                                প্যাকেজটি 365 দিনের হয়, যার মূল্য 2000 টাকা।
                            </p>
                        </div>

                        <div id="toggleBtn4" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">আমি কি ট্রায়াল নিয়ে দেখতে পারি ?</p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText4">
                            <p>
                                অবশ্যই আপনি ট্রায়াল নিয়ে দেখতে পারেন। ট্রায়াল ব্যবহার করতে
                                প্রমোশনাল কোড ব্যবহার করুন trial । এই কোডটি ব্যবহার করলে আপনি
                                তিন দিন ট্রায়াল হিসাবে আমার ক্লায়েন্ট ব্যবহার করতে পারবেন।
                            </p>
                        </div>

                        <div id="toggleBtn5" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি প্রিন্টার ব্যবহার করে কাস্টমারদের কে ইনভয়েস অথবা
                                        বিল দিতে পারি ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText5">
                            <p>
                                অবশ্যই আপনার যদি প্রিন্টার থাকে তবে খুব সহজেই আমার ক্লাইন্ট এর
                                মাধ্যমে ইনভয়েস অথবা বিল প্রিন্ট করে কাস্টমারদের কে প্রদান করতে
                                পারবেন।
                            </p>
                        </div>

                        <div id="toggleBtn6" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি যদি সফটওয়্যারটি ব্যবহার করতে গিয়ে কোন সমস্যায় পড়ি
                                        তাহলে কিভাবে সমাধান করতে পারি ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText6">
                            <p>
                                আপনি যদি আমার ক্লায়েন্ট ব্যবহার করতে গিয়ে কোন সমস্যায় পড়েন
                                তবে আমাদের সাথে ইমেইলের মাধ্যমে অথবা সরাসরি ফোন করে কাস্টমার
                                কেয়ার এক্সিকিউটিভ এর মাধ্যমে খুব সহজে সমস্যাটির সমাধান করতে
                                পারেন।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 faq-accordion">
                    <div class="login-input">
                        <h4 class="text-capitalize mb-1">welcome to amar client</h4>
                        <p>Create a new account</p>
                        <form action="">
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input id="email" type="email" placeholder="user@example.com" />
                                <label for="password">Password</label>
                                <input type="password" name="" id="password" placeholder="Password" />
                            </div>
                            <input type="checkbox" name="check" id="checkbox" /><label for="checkbox">Remember Me</label>
                            <button class="sign-in-btn rounded" type="submit">
                                Sign Up
                            </button>
                            
                            <p class="text-center create-account-text pb-0 mb-0">Already have an account ? <a
                                    href="{{ route('login') }}">Sign In
                                    </a></p>
                            {{-- <br>Or --}}
                            <p class="text-center create-account-text">Account Password Reset ? <a class=" text-danger"
                                    href="{{ route('password.request') }}">Click Here
                                </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
