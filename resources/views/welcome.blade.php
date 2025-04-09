@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-br from-white via-green-50 to-white py-16">
        <div class="container mx-auto px-4 flex flex-col-reverse lg:flex-row items-center gap-10">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                    Welcome to <span class="text-green-600">University Alumni Tracer</span><br>
                    Empowering Your Journey After Graduation
                </h1>
                <p class="text-gray-600 mb-6">
                    Stay connected and track your success with our integrated alumni information system.
                    Discover how your career is growing and contribute to our alumni network.
                </p>
                <div class="flex justify-center lg:justify-start gap-4">
                    <a href="#" class="bg-green-600 text-white px-6 py-3 rounded-full hover:bg-green-700 transition">
                        Learn More
                    </a>
                    <span class="text-sm text-gray-400 self-center">
                        Powered by <b>UMY</b>
                    </span>
                </div>
            </div>
            <div class="lg:w-1/2 relative">
                <img src="assets/hero2.webp" alt="man" class="w-[600px] mx-auto z-10 relative">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 bg-gradient-to-t from-green-600/70 via-green-400/20 to-transparent rounded-b-3xl blur-sm z-0">
                </div>
            </div>
        </div>
    </section>

    <div class="h-8 bg-gradient-to-b from-transparent to-green-50"></div>

    <section class="py-20 bg-gradient-to-b from-green-50 to-white text-center relative overflow-hidden">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-green-600 mb-2">Apa yang akan kamu dapatkan di Tracer Study?</h2>
            <p class="text-gray-600 mb-10">Start filling out the questionnaire and create your CV easily</p>

            <div class="grid md:grid-cols-2 gap-8 relative z-10">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-gradient-to-r from-orange-300 via-pink-300 to-purple-300 opacity-40 blur-3xl rounded-full z-0">
                </div>

                <div class="bg-white rounded-xl shadow-xl p-8 relative z-10 hover:shadow-2xl transition">
                    <div class="text-orange-500 text-4xl mb-4">📄</div>
                    <h3 class="text-xl font-semibold mb-2">Data Kuesioner</h3>
                    <p class="text-gray-600">Manage your profile after graduation from university.</p>
                    <a href="#" class="mt-4 inline-block text-green-600 font-medium hover:underline">Get Started →</a>
                </div>

                <div class="bg-white rounded-xl shadow-xl p-8 relative z-10 hover:shadow-2xl transition">
                    <div class="text-blue-500 text-4xl mb-4">📘</div>
                    <h3 class="text-xl font-semibold mb-2">CV Builder</h3>
                    <p class="text-gray-600">Priority support and multi-user access to maximize your productivity.</p>
                    <a href="#" class="mt-4 inline-block text-green-600 font-medium hover:underline">Get Started →</a>
                </div>
            </div>
        </div>


    </section>

    <section class="py-20 bg-gradient-to-b from-white via-green-50 to-white px-4">
        <div class="container mx-auto grid md:grid-cols-2 items-center gap-10">
            <div>
                <h2 class="text-4xl font-bold mb-4 text-green-700">Career Development Center UMY</h2>
                <p class="text-gray-700 mb-6">
                    The distribution of data especially from the alumni campus career network, alumni empowerment
                    activities, career education, internship guidance or tracking, and job service application support...
                </p>
                <p class="text-gray-700">
                    We disseminate information to all alumni through Career Development Center UMY to enable and drive
                    confident people dedicated to their future careers.
                </p>
            </div>
            <div class="text-center">
                <img src="assets/hero-woman.webp" alt="woman" class="max-w-xs mx-auto">
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-white to-green-50 py-16 px-4">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <!-- Stat Cards -->
            @php
                $stats = [
                    ['value' => 25, 'label' => 'Teaching Fields of Responsibility', 'color' => 'green'],
                    ['value' => 120, 'label' => 'University', 'color' => 'blue'],
                    ['value' => 120, 'label' => 'CV Built', 'color' => 'yellow'],
                    ['value' => 120, 'label' => 'Graduates', 'color' => 'pink'],
                ];
            @endphp

            @foreach ($stats as $stat)
                <div class="bg-white rounded-xl p-6 shadow text-gray-700 relative">
                    <div class="text-3xl font-bold text-green-600">{{ $stat['value'] }}</div>
                    <div class="mt-2">{{ $stat['label'] }}</div>
                    <div class="h-1 mt-4 rounded-full bg-{{ $stat['color'] }}-400 w-full"></div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
