var ClientNameText = document.getElementById('ClientNameText');
var CompanyNameText = document.getElementById('CompanyNameText');
var ClientAddressText = document.getElementById('ClientAddressText');
var ClientContactNumberText = document.getElementById('ClientContactNumberText');

var AddClientSubmit = document.getElementById('AddClientSubmit');
var AddClientForm = document.getElementById('AddClientForm');

var MissingError = "Field Cannot Be Empty";



AddClientSubmit.addEventListener('click',() =>{

    var Errors = 0;

    if(ClientNameText.value == "")
    {
        ErrorMessage(ClientNameText);
        Errors+=1;
    }
    if(CompanyNameText.value == "")
    {
        ErrorMessage(CompanyNameText);
        Errors+=1;
    }
    if(ClientAddressText.value == "")
    {
        ErrorMessage(ClientAddressText);
        Errors+=1;
    }
    if(ClientContactNumberText.value == "")
    {
        ClientContactNumberText.type = 'text';
        ErrorMessage(ClientContactNumberText);
        Errors+=1;
    }

    if(Errors == 0)
    {
        AddClientForm.submit();
    }
})

ClientNameText.addEventListener('click',()=>{
    
    ClearInput(ClientNameText);
})

CompanyNameText.addEventListener('click',()=>{
    
    ClearInput(CompanyNameText);
})

ClientAddressText.addEventListener('click',()=>{
    
    ClearInput(ClientAddressText);
})

ClientContactNumberText.addEventListener('click',()=>{
    
    ClientContactNumberText.type = 'number';
    ClearInput(ClientContactNumberText);
    

})
