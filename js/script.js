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
        alert(`Вы забронировали ${b.car} за ${b.price}`);
    }
}