

            
        
        function checkName () {
            var nameBox = document.getElementById("name");
            var name = nameBox.value;
            if (name.length <4){
                //name is too short
                nameBox.style.borderColor = "red";
                
            }else{
                //name is long
                nameBox.style.borderColor = "green";
            }

        }

function checkNum(){
    var number = document.getElementById("message");
    var numVal = number.value;
    if (numVal.length>10 && numVal.length < 30){
        number.style.borderColor = "green";
        
    }else{
        number.style.borderColor = "red";
    }
}

        
function checkID(){
    var id = document.getElementById("ids");
    var idValue = id.value;
    if (idValue == 'NB001'){
        id.style.borderColor = "green";
    }else if (idValue =='NB002'){
        id.style.borderColor = "green";
    }else if (idValue == 'SB001'){
        id.style.borderColor = "green";
    }else if (idValue =='SB002'){
        id.style.borderColor = "green";
    }else if (idValue == 'AB001'){
        id.style.borderColor = "green";
    }else if (idValue == 'AB002'){
        id.style.borderColor = "green";
    }
    else{
        id.style.borderColor = "red";
    }
}

        function updateStatus() {
            var productStatus = document.getElementsByClassName("product");
            var spouseNameLabel = document.getElementById("spouseLabel");
            var spouseNameBox = document.getElementById("spousename");
            if (productStatus.checked){
                //if user selects"married", display the textbox for spouse name
                spouseNameLabel.className = "visible"
                spouseNameBox.className = "textbox visible"
            }else{
                //if user does not select "married", hide the textbox for spouse name.
                spouseNameLabel.className = "hidden"
                spouseNameBox.className = "textbox hidden"
            }

        }

        
        
        
        
