const fieldsname = ['InternalClient', 'Client', 'Module', 'Language', 'URL', 'Width', 'Height', 'Browser', 'BrowserVersion', 'Java', 'Mobile', 'OS', 'OSVersion', 'Cookies'];
document.getElementById('btn-save').addEventListener('click', saveRecord)
document.getElementById('btn-search').addEventListener('click', fillTables);

document.getElementById('hash').addEventListener('change', fillInputs);
document.getElementById('filter').value = "*";

let allData = [];
let isCorrectTrack = false;

fillTables(filter, search);



function fillInputs() {
    const hash = document.getElementById('hash').value;
    const descrypted = hex_to_string(hash);
    const cleanedData = descrypted.replaceAll('undefined;', '').replaceAll(';;', '').replaceAll('null', '').replaceAll('NULL', '');
    document.getElementById('record').value = cleanedData;
    const myData = cleanedData.split(";");

    isCorrectTrack = (myData.length == fieldsname.length);

    let errorMsg = (myData.length == fieldsname.length) ? "alert-success" : "alert-danger";
    let message = (myData.length == fieldsname.length) ? "The data is correct" : "Incorrect data";



    if (myData.length == fieldsname.length) {

        for (let index = 0; index < myData.length; index++) {
            document.getElementById(fieldsname[index]).value = myData[index];
        }
    }

    document.getElementById('message').classList.remove(['alert-success', 'alert-danger', 'd-none'])
    document.getElementById('message').classList.add(errorMsg);
    document.getElementById('message').innerHTML = message;

    document.getElementById('btn-save').disabled = (myData.length != fieldsname.length);
    setTimeout(removeMessage, 3000);
}

function removeMessage() {
    if (!isCorrectTrack) document.getElementById('hash').value = "";
    document.getElementById('message').classList.add('d-none');
}



function fillTables() {
    let column = document.getElementById('filter').value;
    let search = document.getElementById('search').value;
    const url = "http://localhost:8080/cegos/api/getAll.php";
    fetch(url).then(response => response.json())

        .then(allData => allData.filter(function (item) {
            if (column == '*' | search == '') {
                return allData;
            }
            return item[column] == (search);
        }))

        .then((object) => {
            let tableData = "";
            console.log(object);
            object.map((values) => {
                tableData += `<tr><td>${values.InternalClient}</td>
        <td>${values.Client}</td>
        <td>${values.Module}</td>
        <td>${values.Language}</td>
        <td>${values.URL}</td>
        <td>${values.Width}</td>
        <td>${values.Height}</td>
        <td>${values.Browser}</td>
        <td>${values.BrowserVersion}</td>
        <td>${values.Java}</td>
        <td>${values.Mobile}</td>
        <td>${values.OS}</td>
        <td>${values.OSVersion}</td>
        <td>${values.Cookies}</td></tr>`;
            });
            document.getElementById("table-body").innerHTML = tableData;
        })

}




function saveRecord() {
    const hash = document.getElementById('hash').value;
    const descrypted = hex_to_string(hash);
    const cleanedData = descrypted.replaceAll('undefined;', '').replaceAll(';;', '').replaceAll('null', '').replaceAll('NULL', '');;
    document.getElementById('record').value = cleanedData;
    const records = cleanedData.split(";");
    let data = {};
    for (let index = 0; index < fieldsname.length; index++) {
        data[fieldsname[index]] = records[index];
    }

    fetch("http://localhost:8080/cegos/api/add.php", {
        method: "POST",
        headers: { 'Content-type': 'application/json' },
        body: JSON.stringify(data)
    }

    );

    for (let index = 0; index < fieldsname.length; index++) {
        document.getElementById(fieldsname[index]).value = "";
    }

    window.location.reload();

}

function hex_to_string(track) {
    var hex = track.toString();
    var str = '';
    for (var n = 0; n < hex.length; n += 2) {
        str += String.fromCharCode(parseInt(hex.substr(n, 2), 16));
    }
    return str;
}







