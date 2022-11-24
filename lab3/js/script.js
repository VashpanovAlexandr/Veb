let Count = 0;
let RealCount = new Array();

const btc = document.getElementById('create');
btc.addEventListener('click', tableCreate);
const bta = document.getElementById('add');
bta.addEventListener('click', addRow);
const btd = document.getElementById('delete');
btd.addEventListener('click', deleteRow);

bta.disabled = true;
btd.disabled = true;


function tableCreate() {
    const body = document.body;
    const tbl = document.getElementById('table');

    tbl.style.width = '100px';
    tbl.style.border = '1px solid black';
    if (Count == 0)
    {
        Count = 1;
        RealCount[Count] = 0
        for (let i = 0; i < 1; i++) {
            const tr = tbl.insertRow();
            for (let j = 0; j < 10; j++) {
                let td = tr.insertCell();
                td.innerHTML = 0;
                if (j == 0)
                    td.innerHTML = Count;
                td.style.border = '1px solid black';
            }
        }
    }
    else {
        alert( "не жмякай второй раз" );
    }
    body.appendChild(tbl);
    bta.disabled = false;
    btd.disabled = false;

}

function addRow() {
    const body = document.body;
    const tbl = document.getElementById('table');
    const tr = tbl.insertRow();

    Count++;
    for (let j = 0; j < 10; j++) {
        let td = tr.insertCell();
        
        td.innerHTML = 0;
        RealCount[Count] = 0
        if (j == 0)
            td.innerHTML = Count;
        td.style.border = '1px solid black';
    }
}

function deleteRow() {
    let number = document.getElementById('text').value;
    let td = document.getElementById('table');
    let find = 0;
    console.log(number)
    if (number > Count || isNaN(number))
        alert( "нет такой строчки" );
    else {
        let sum = 0;
        if(RealCount[number] == 0) {
            for (let i = 1; i < number; i++) {
                sum += RealCount[i];
            }
            RealCount[number]++;
            document.getElementById('table').deleteRow(number - sum - 1);    
        }
        else {
            alert( "нет такой строчки" );
        }
    }
    
}



