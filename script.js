document.addEventListener("DOMContentLoaded", function () {
  const fromCurrencySelect = document.getElementById("fromCurrency");
  const toCurrencySelect = document.getElementById("toCurrency");
  const amountInput = document.getElementById("amount");
  const convertedAmountInput = document.getElementById("convertedAmount");
  const convertBtn = document.getElementById("convertBtn");

  // Populate currency dropdowns
  fetchCurrencies();

  // Add click event to the convert button
  convertBtn.addEventListener("click", convertCurrency);

  async function fetchCurrencies() {
      try {
          const response = await fetch("https://v6.exchangerate-api.com/v6/e4645403ed5472b6cf8b99d3/latest/USD");
          const data = await response.json();

          if (data && data.conversion_rates) {
              // Populate 'From' currency dropdown
              populateCurrencyDropdown(fromCurrencySelect, data.conversion_rates);

              // Populate 'To' currency dropdown
              populateCurrencyDropdown(toCurrencySelect, data.conversion_rates);
          }
      } catch (error) {
          console.error("Error fetching currencies:", error);
      }
  }

  function populateCurrencyDropdown(selectElement, conversionRates) {
      for (const currency in conversionRates) {
          const option = document.createElement("option");
          option.value = currency;
          option.text = currency;
          selectElement.add(option);
      }
  }

  async function convertCurrency() {
      const fromCurrency = fromCurrencySelect.value;
      const toCurrency = toCurrencySelect.value;
      const amount = amountInput.value;

      if (!fromCurrency || !toCurrency || !amount) {
          alert("Please select currencies and enter an amount.");
          return;
      }

      try {
          const response = await fetch(`https://v6.exchangerate-api.com/v6/e4645403ed5472b6cf8b99d3/latest/${fromCurrency}`);
          const data = await response.json();

          if (data && data.conversion_rates) {
              const exchangeRate = data.conversion_rates[toCurrency];
              const convertedAmount = (amount * exchangeRate).toFixed(2);
              convertedAmountInput.value = convertedAmount;
          }
      } catch (error) {
          console.error("Error converting currency:", error);
      }
  }
});
