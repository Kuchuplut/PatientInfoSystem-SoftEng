function addTestToTable(){
    var table = document.getElementById("testTable");
    var tableDiagnosis = document.getElementById("medical");
    var chargeType = $("#test-list").val();
    var chargeQuantity = $("#test_desc").val();
    var removeBtn = document.createElement('button');
   
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2); 
    cell1.innerHTML = chargeType;
    cell2.innerHTML = chargeQuantity;
    cell3.innerHTML = '<input id="Button" type="button" value="Remove" class = "waves-effect waves-light btn red" onclick="deleteRow(this)" />';
    var x = document.getElementById("test-list");
        x.remove(x.selectedIndex);

    var row2 = tableDiagnosis.insertRow(0);
    var cell1a = row2.insertCell(0);
    var cell2a = row2.insertCell(1);
    var cell3a = row2.insertCell(2); 
    cell1a.innerHTML = chargeType;
    cell2a.innerHTML = chargeQuantity;
    cell3a.innerHTML = ' ';
}

function deleteRow(row){
    var i=row.parentNode.parentNode.rowIndex;
    var packageText = document.getElementById("testTable").rows[i].cells[0].innerHTML;
    document.getElementById('testTable').deleteRow(i);
    
    var y = document.getElementById("test-list");
    var option = document.createElement("option");
    option.text = packageText;

    y.add(option);
}
