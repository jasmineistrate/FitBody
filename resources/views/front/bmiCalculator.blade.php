@extends('layouts.front')
@section('content')
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md m-6">
        <h2 class="text-2xl font-semibold mb-4">BMI Calculator</h2>
        <p class="font-semibold my-8 mb-8">Welcome to our BMI (Body Mass Index) calculator! This handy tool is designed to help you quickly estimate your body mass index based on your weight and height. Simply input your weight in kilograms and your height in centimeters, then hit the "Calculate" button to find out your BMI. The BMI is a useful measure that gives you an indication of whether your weight is within a healthy range for your height. It's important to remember that BMI is just one factor in assessing your overall health, so be sure to consult with a healthcare professional for a comprehensive evaluation. Use this calculator to gain insights into your body 
            composition and take steps towards a healthier lifestyle. Your health matters, and we're here to support you on your wellness journey!</p>
        <div class="mb-4">
            <label for="weight" class="block text-sm font-medium text-gray-700">Weight (kg):</label>
            <input type="text" id="weight" name="weight" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
        </div>
        <div class="mb-4">
            <label for="height" class="block text-sm font-medium text-gray-700">Height (cm):</label>
            <input type="text" id="height" name="height" class="mt-1 p-2 w-full border-2 rounded-md border-pink-200">
        </div>
        <div class="mb-4">
            <button id="calculate" class="bg-pink-600 text-white p-2 rounded-md hover:bg-pink-200 mt-6 w-full">Calculate</button>
        </div>
        <div id="result" class="text-xl font-semibold"></div>
    </div>
</body>
@endsection