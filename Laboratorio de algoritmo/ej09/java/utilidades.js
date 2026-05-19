let saldo = 1000;
let sacar;
let exit = false;

while (exit = true) {
    menu = parseInt(prompt("1.Retirar 2.Depositar 3.Salir"));

    switch (menu) {
        case 1: 
        {
            sacar = parseInt(prompt("cuanto desea retirar"));
            if (saldo < sacar) 
             {
                alert("Fondos insuficientes");
                break;
             }
            else
             {
                saldo = saldo - sacar;
                break;
             }
            
        }
        case 2: 
        {
            saldo = saldo + parseInt(prompt("cuanto desea depositar"));
    
            break;
        }
        case 3:
        {
                exit = true;
                alert("operacion terminada");
                
        }
    } 

alert("Tenes  " + saldo);


}


