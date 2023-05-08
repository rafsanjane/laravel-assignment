const weightInput = document.getElementById('weightInput');
const heightInput = document.getElementById('heightInput');
const calculateBtn = document.getElementById('calculateBtn');
const result = document.querySelector('.result');

calculateBtn.addEventListener('click', () => {
    const weight = Number(weightInput.value);
    const height = Number(heightInput.value);

    if (weight && height) {
        const bmi = weight / (height * height);
        result.textContent = `Your BMI is ${bmi.toFixed(2)}`;
    } else {
        result.textContent = 'Please enter both weight and height';
    }
});
