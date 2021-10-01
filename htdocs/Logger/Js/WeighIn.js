var WeighInContent_Container = document.getElementById('WeighInContent_Container');
var WeighInButton = document.getElementById('WeighInButton');
var WI_DriverNameText = document.getElementById('WI_DriverNameText');
var WI_PlateNumberText = document.getElementById('WI_PlateNumberText');
var WI_WeightText = document.getElementById('WI_WeightText');
var WeighInUIDtext = document.getElementById('WeighInUIDtext');

WeighInButton.addEventListener('click', async()=>{

    var Errors = 0;
    if(WI_DriverNameText.value =="")
    {
        ErrorMessage(WI_DriverNameText);
        Errors++;
    }

    if(WI_PlateNumberText.value == "")
    {
        ErrorMessage(WI_PlateNumberText);
        Errors++;
    }

    if(WI_WeightText.value == "")
    {
        WI_WeightText.type = "text";
        ErrorMessage(WI_WeightText);
        Errors++;
    }

    if(Errors == 0)
    {
        
        if(await ShowPopUp("Are you sure you want to add the transaction?") == true){
            WeighInUIDtext.value = sessionStorage.getItem('UID');
            WeighInContent_Container.submit();
        }
        else
        {
            HidePopUp();
        }
       
    }
})


WI_DriverNameText.addEventListener('click',()=>
{
    if(WI_DriverNameText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WI_DriverNameText);
    }
})

WI_PlateNumberText.addEventListener('click',()=>
{
    if(WI_PlateNumberText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WI_PlateNumberText);
    }
})

WI_WeightText.addEventListener('click',()=>
{
    if(WI_WeightText.style.color == 'rgb(255, 56, 90)')
    {
        ClearInput(WI_WeightText);
        WI_WeightText.type = "number";
    }
})