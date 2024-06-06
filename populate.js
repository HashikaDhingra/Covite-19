const totalCasesInIndia = document.querySelector("#total-cases-in-india");
const activeCasesInIndia = document.querySelector("#active-cases-in-india");
const vaccinatedCasesInIndia = document.querySelector("#vaccinated-cases-in-india");
const deathDueToCovidInIndia = document.querySelector("#deaths-due-to-covid-in-india");

const casesUrl = "https://disease.sh/v3/covid-19/gov/India";
const vaccinationUrl = "https://disease.sh/v3/covid-19/vaccine/coverage/countries/India?lastdays=1&fullData=false";


fetch(casesUrl, {
  headers: {
    "content-type": "application/json"
  }
})
  .then(res=>res.json())
  .then(data=>{
    totalCasesInIndia.innerText = data.total.cases;
    activeCasesInIndia.innerText = data.total.active;
    deathDueToCovidInIndia.innerText = data.total.deaths;
    totalCasesInIndia.classList.remove("smooth-populate");
    activeCasesInIndia.classList.remove("smooth-populate");
    deathDueToCovidInIndia.classList.remove("smooth-populate");
    })
  .catch(ex=>console.error(ex));

fetch(vaccinationUrl, {
  headers: {
    "content-type": "application/json"
  }
})
  .then(res=>res.json())
  .then(data=>{
    vaccinatedCasesInIndia.innerText = Object.values(data.timeline)[0];
    vaccinatedCasesInIndia.classList.remove("smooth-populate");
  })
  .catch(ex=>console.error(ex));
