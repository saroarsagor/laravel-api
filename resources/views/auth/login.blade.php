@extends('layouts.app')
@section('title')
    Login Here
@endsection
@section('styles')
@endsection
@section('content')
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
                                আমার ক্লায়েন্ট ব্যবহার করার জন্য আপনাকে অবশ্যই নিবন্ধন করতে হবে
                                নিবন্ধন আপনি মোবাইল অ্যাপ ব্যবহার করে বা ওয়েব সাইট ব্রাউজ করে
                                কম্পিউটারের মাধ্যমে খুব সহজেই করতে পারবেন ।
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
                                চার্জ প্রদান করতে হবে। আমাদের মাসিক প্যাকেজ টি 30 দিনের জন্য হয় ।
                            </p>
                        </div>

                        <div id="toggleBtn3" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি মাসিক ছাড়া আরো বেশি সময়ের জন্য কোন প্যাকেজ কিনতে পারব
                                        ?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="toggleText" id="toggleText3">
                            <p>
                                আপনি মাসিক প্যাকেজ টি বাদ দিয়েও আমাদের অর্ধ বার্ষিক বা বাৎসরিক
                                প্যাকেজটি নিয়ে দেখতে পারেন আমাদের অর্ধবার্ষিক প্যাকেজটি 180 দিনের
                                হয়, যার মূল্য 1200 টাকা এবং বাৎসরিক প্যাকেজটি 365 দিনের হয়, যার
                                মূল্য 2000 টাকা।
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
                                প্রমোশনাল কোড ব্যবহার করুন trial । এই কোডটি ব্যবহার করলে আপনি তিন
                                দিন ট্রায়াল হিসাবে আমার ক্লায়েন্ট ব্যবহার করতে পারবেন।
                            </p>
                        </div>

                        <div id="toggleBtn5" class="accordion__item">
                            <div class="accordion__title">
                                <div>
                                    <span class="icon"><i class="fas fa-plus"></i></span>
                                    <p class="text">
                                        আমি কি প্রিন্টার ব্যবহার করে কাস্টমারদের কে ইনভয়েস অথবা বিল
                                        দিতে পারি ?
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
                                আপনি যদি আমার ক্লায়েন্ট ব্যবহার করতে গিয়ে কোন সমস্যায় পড়েন তবে
                                আমাদের সাথে ইমেইলের মাধ্যমে অথবা সরাসরি ফোন করে কাস্টমার কেয়ার
                                এক্সিকিউটিভ এর মাধ্যমে খুব সহজে সমস্যাটির সমাধান করতে পারেন।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 faq-accordion">
                    <div class="login-input">
                        <h4 class="text-capitalize mb-1">welcome to amar client</h4>
                        <p>Please sign-in to your account</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" placeholder="user@example.com">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <input type="checkbox" name="remember" id="checkbox"><label for="checkbox">Remember Me</label>
                            <button class="sign-in-btn rounded" type="submit">Sign in</button>
                            <p class="text-center create-account-text pb-0 mb-0">New on our platform? <a href="{{ route('register') }}">Create an
                                    account</a></p>
                                    {{-- <br>Or --}}
                            <p class="text-center create-account-text">Account Password Reset ? <a class=" text-danger" href="{{ route('password.request') }}">Click Here
                                    </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
