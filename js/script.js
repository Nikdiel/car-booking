let jsonData;

fetch("txt.json")
    .then(response => response.json())
    .then(data => {
        jsonData = data; 
    })
    .catch(error => console.error("Ошибка загрузки JSON:", error));

function book(a) {
    let b = jsonData[a]
    let c = prompt(`Вы уверены что хотите забронировать ${b.car}?\n 1.да 2.нет`)
    if(c.toLowerCase() == "да" || c == 1){
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