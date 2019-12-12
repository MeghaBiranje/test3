function  loadCountry()
{
    var obj = new XMLHttpRequest();
    var country = document.getElementById("country");
    obj.open("GET", "../controller/CountryController.php", true);
    obj.send();

    obj.onreadystatechange = function() {
        if(obj.readyState == 4 && obj.status == 200) {
             country.innerHTML = obj.responseText;
      
        }
    }   
}

function loadState()
{
    var obj = new XMLHttpRequest();
    var country = document.getElementById("country").value;
    var state = document.getElementById("state");
    
    obj.open("GET", "../controller/StateController.php?country_id="+country, true);
    obj.send();

    obj.onreadystatechange = function() {
        if(obj.readyState == 4 && obj.status == 200) {
             state.innerHTML = obj.responseText;
           
        }
    }      
}

function loadCity()
{
    var obj = new XMLHttpRequest();
    var state = document.getElementById("state").value;
    var city = document.getElementById("city");
    
    obj.open("GET", "../controller/CityController.php?state_id="+state, true);
    obj.send();

    obj.onreadystatechange = function() {
        if(obj.readyState == 4 && obj.status == 200) {
             city.innerHTML = obj.responseText;
           
        }
    }      
}