document.getElementById('calculate').addEventListener('click', function() {
    var weight = parseFloat(document.getElementById('weight').value);
    var height = parseFloat(document.getElementById('height').value) / 100;

    if (isNaN(weight) || isNaN(height) || height <= 0 || weight <= 0 || height >= 300 || weight >= 700) {
        document.getElementById('result').innerText = 'Please enter valid weight and height.';
        return;
    }

    var bmi = weight / (height * height);

    if(bmi < 18)
    {
        document.getElementById('result').innerText = 'Your BMI is: ' + bmi.toFixed(2) + ' You are underweight';
    }
    else if(bmi >= 18 && bmi <= 25)
    {
        document.getElementById('result').innerText = 'Your BMI is: ' + bmi.toFixed(2) + ' You are normal';
    }
    else if(bmi > 25 && bmi < 30)
    {
        document.getElementById('result').innerText = 'Your BMI is: ' + bmi.toFixed(2) + ' You are overweight';
    }
    else 
    {
        document.getElementById('result').innerText = 'Your BMI is: ' + bmi.toFixed(2) + ' You are obese';
    }
});