let jsonData;

fetch("txt.json")
    .then(response => response.json())
    .then(data => {
        jsonData = data; 
    })
    .catch(error => console.error("Ошибка загрузки JSON:", error));

function book(a) {
    let b = jsonData[a]
    let c = confirm(`Вы уверены что хотите забронировать ${b.car}?`)
    if(c){
        let day = prompt("На какое количество дней?");
        let book = {
            car: b.car,
            price: b.price,
            day: day,
            action: "book"
        };
        fetch("index.php",{
            method: "POST",
            headers: { "Content-Type": "application/json"},
            body: JSON.stringify(book)
        })
        .then(response => response.json())
        .then(data => alert(data.massage))
        .catch(error => console.log("Ошибка"));
    }
}