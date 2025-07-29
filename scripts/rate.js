async function getCryptoPrices() {
  // CoinGecko API endpoint for multiple coins
  const url = "https://api.coingecko.com/api/v3/simple/price";

  // Define search params
  const params = {
    ids: "bitcoin,ethereum,bitcoin-cash",
    vs_currencies: "usd",
  };

  try {
    // Make the API request
    const response = await fetch(`${url}?${new URLSearchParams(params)}`);

    // Check if the request was successful
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    // Parse JSON response
    const data = await response.json();
    return data;
  } catch (error) {
    console.error("An error occurred:", error);
    return null;
  }
}

// Display prices
async function displayPrices() {
  const prices = await getCryptoPrices();

  if (prices) {
    const btc = prices.bitcoin.usd;
    const eth = prices.ethereum.usd;
    const bch = prices["bitcoin-cash"].usd;

    const result = document.getElementById("prices");
    result.innerHTML = `
      Bitcoin = $${btc},
      Ethereum = $${eth},
      Bitcoin cash = $${bch}
    `;
  }
}
displayPrices();

// this function is all about getting the country name, their flag, and country rate from the data folder
async function displayRateData() {
  const res = await fetch("./data/rate-data.json");
  const rateData = await res.json();

  rateData.forEach((ele) => {
    const row = document.createElement("tr");

    // Create country and flag cell
    const data1 = document.createElement("td");
    const img = document.createElement("img");
    img.src = ele.img;
    img.alt = ele.country;
    img.classList.add("flag");

    const text = document.createTextNode(" " + ele.country);
    data1.appendChild(img);
    data1.appendChild(text);
    row.appendChild(data1);

    // Loop through pricePer
    ele.pricePer.forEach((rate) => {
      const btcRate = document.createElement("td");
      btcRate.textContent = rate.btc;
      row.appendChild(btcRate);

      const ethRate = document.createElement("td");
      ethRate.textContent = rate.eth;
      row.appendChild(ethRate);

      const bchRate = document.createElement("td");
      bchRate.textContent = rate.bch;
      row.appendChild(bchRate);
    });

    // Append row to table
    document.querySelector("table").appendChild(row);
  });
}

displayRateData();
