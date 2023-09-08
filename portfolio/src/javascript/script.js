document.addEventListener('DOMContentLoaded', function() {
  var phoneNumberInput = document.getElementById('phoneNumberInput');

  phoneNumberInput.addEventListener('input', function() {
    var numericValue = phoneNumberInput.value.replace(/\D/g, '');

    if (numericValue.length > 10) {
      numericValue = numericValue.slice(0, 10);
    }

    phoneNumberInput.value = numericValue;
  });
});

