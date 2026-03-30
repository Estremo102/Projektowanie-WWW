function kiedyWielkanoc (rok) {
/*A*/ let cyklKsiezyca = rok % 19;
/*B*/ let wiek = Math.floor(rok / 100);
/*C*/ let lataWieku = rok % 100; 
/*H*/ let epakta = (19*cyklKsiezyca+wiek-Math.floor(wiek/4)-(wiek+1-Math.floor((wiek+8)/25))/3+15) % 30;
/*L*/ let poprawkaTygodniowa = (32+2*(wiek % 4+Math.floor(lataWieku/4))-epakta-lataWieku % 4) % 7;
/*M*/ let poprawkaMiesieczna = Math.floor((cyklKsiezyca+11*epakta+22*poprawkaTygodniowa)/451);
/*N*/ let data = epakta+poprawkaTygodniowa-7*poprawkaMiesieczna+114;
/*ID*/let dzien = 1 + (data % 31);
/*IM*/let miesiac = 4;
if(Math.floor(data/31) == 3) {
// 	IF(N/31.EQ.3) IM = IM-1
    miesiac--;
}
    let span = '<span class="';
    if(miesiac == 3) {
         span += 'blue">';
    } else {
        span += 'red">';
    }

    if(dzien < 10) {
        span += ' ';
    } 

    return span + dzien + '</span>';
}

let lata1800 = document.querySelector("#lata1800-2009");
let lata2000 = document.querySelector("#lata2000-2209");

lata1800.innerHTML = '<hr> Rok  0  1  2  3  4  5  6  7  8  9<hr>';
lata2000.innerHTML = '<hr> Rok  0  1  2  3  4  5  6  7  8  9<hr>';
for(let i = 1800; i <= 2000; i += 10) {
lata1800.innerHTML += `${i}`;
lata2000.innerHTML += `${i + 200}`;
    for(let j = 0; j < 10; j++) {
        lata1800.innerHTML += ' ' + kiedyWielkanoc(i + j);
        lata2000.innerHTML += ' ' + kiedyWielkanoc(i + j + 200);
    }
lata1800.innerHTML += `
`;
lata2000.innerHTML += `
`;
}
lata1800.innerHTML += '<hr>';
lata2000.innerHTML += '<hr>';
