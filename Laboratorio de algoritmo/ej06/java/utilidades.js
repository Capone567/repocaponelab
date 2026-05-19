let saldo = 1000;


while (document.getElementById("Salir").value !== "exit" ){
    switch (document.getElementsByName("botones")) {
        case "D":
            saldo = saldo + parseInt(prompt("cuanto desea depositar"));
        case "R":
            saldo = saldo - parseInt(prompt("cuanto retirar"));
        default:
         document.getElementById("plata").innerHTML = saldo;
        }
    
}

