const country = document.querySelector("#country")
const state = document.querySelector("#state")
const city = document.querySelector("#city")
fetch("https://countriesnow.space/api/v0.1/countries")
.then(data=>data.json())
.then(data=>{
    data["data"].forEach(element => {
        const option = document.createElement("option")
        option.value = element["country"];
        option.textContent = element["country"]
        country.append(option)
    });
})

function fetchStates(country){
    fetch("https://countriesnow.space/api/v0.1/countries/states",{
        method:"POST",
        headers:{"Content-Type":"application/json"},
        body:JSON.stringify({country})
    })
    .then(data=>data.json())
    .then(data=>{
        // console.log(data["data"])
        data["data"]["states"].forEach(element=>{
            const option = document.createElement("option")
            option.value = element["name"]
            option.textContent = element["name"]
            state.append(option)
        })
        // console.log(data)
    })
}
// fetchStates("India")

function fetchCity(country,state){
    fetch("https://countriesnow.space/api/v0.1/countries/state/cities",{
        method:"POST",
        headers:{"Content-Type":"application/json"},
        body:JSON.stringify({country,state})
    })
    .then(data=>data.json())
    .then(data=>{
        data["data"].forEach(element=>{
            const option = document.createElement("option")
            option.value = data[element]
            option.textContent = element
            city.append(option)
        })
    })
}
fetchCity("India","Delhi")



country.addEventListener("change",()=>{
    if(country.value != ""){
        state.innerHTML = ""
        state.disabled = false;
        fetchStates(country.value);
    }
})
state.addEventListener("change",()=>{
    city.innerHTML = ""
    city.disabled = false
    fetchCity(country.value,state.value)
})

const now = new Date();

const formattedDate = now.getFullYear() + "-" + (now.getMonth() + 1) + "-" + now.getDate() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
document.querySelector("#created_at").value = formattedDate;