var CurrentUserText = document.querySelector('.CurrentUserText');
CurrentUserText.innerHTML = `Current User: <h1 id="userText">${window.sessionStorage.getItem('username')}</h1>`;
var body = document.getElementById('body');

var TransButton = document.getElementById('TransactionButton');
var LogsButton = document.getElementById('LogsButton');
var MaintenanceButton = document.getElementById('MaintenanceButton');

var TransOptionsContainer = document.getElementById('TransactionOptionsContainer');
var LogsOptionsContainer = document.getElementById('LogsOptionsContainer');
var MaintenanceOptionsContainer = document.getElementById('MaintenanceOptionsContainer');

var MaintenanceContainer = document.getElementById('maintenance_Container');
var Transaction_Container = document.getElementById('Transaction_Container');

var PopUpClose = document.getElementById('PopUpClose');
var PopUp = document.getElementById('PopUp');
var ContentDisable = document.getElementById('ContentDisable');

//Base Layout

function SideButtonClearStyle(){
    
    TransButton.setAttribute('class','SideBarButtons');
    LogsButton.setAttribute('class','SideBarButtons');
    MaintenanceButton.setAttribute('class','SideBarButtons');
    
}

function SubOptiosButtonClearStlye(){
    MaintenanceButtonClearStyle();
    TransactionButtonsClearStyle();
}

function ShowContent(Content){
    
    Content.classList.remove('ContentInvisible');
    
}

function SubOptionButtonSelect(Button){
    
    Button.setAttribute('class','SubOptionSelected');
}

function ContentClear(){
    MaintenanceContainer.classList.add('ContentInvisible');
    Transaction_Container.classList.add('ContentInvisible');
    MaintenanceClearContent();
    TransactionClearContent();
}




function SideButtonSelect(Button, Container){
    Button.setAttribute('class','ButtonSelected');
    Button.children[0].classList.remove('ContentInvisible');
    Button.children[1].classList.add('ContentInvisible');
    

    if(Container.classList.contains('ContentInvisible'))
    {
        Container.classList.remove('ContentInvisible');
        Button.children[0].classList.remove('ContentInvisible');
        Button.children[1].classList.add('ContentInvisible');
        
    }
    else
    {
        Container.classList.add('ContentInvisible');
        Button.children[0].classList.add('ContentInvisible');
        Button.children[1].classList.remove('ContentInvisible');
        Button.setAttribute('class','SideBarButtons');
    }
    
}


function ClearInput(Input)
{
    if(Input.style.color == 'rgb(255, 56, 90)')
    {
        Input.style.color = "#000";
        Input.value = "";
    }
    
}

function ErrorMessage(Input, Error = MissingError)
{
    Input.value = Error;
    Input.style.color = "#ff385a";
}


var WO_PopUp = document.getElementById('WO_PopUp');
var VerificationPopUpText = document.getElementById('VerificationPopUpText');
var VerificationPopUpButtonNo = document.getElementById('VerificationPopUpButtonNo');
var VerificationPopUpButtonYes = document.getElementById('VerificationPopUpButtonYes');



function ShowPopUp(Message,PopUpContainer = "Default")
{
    PopUp.classList.remove('ContentInvisible');
    ContentDisable.classList.remove('ContentInvisible');

    var PopUpPromise = new Promise((resolve,reject)=>{
        VerificationPopUpButtonYes.addEventListener('click',()=>{ 
            resolve(true);
        })
        VerificationPopUpButtonNo.addEventListener('click',()=>{
            resolve(false);
        })
    })
    
    
    if(PopUpContainer == "WeighOut")
    {
        WO_PopUp.classList.remove('ContentInvisible');
    }
    else
    {
        VerificationPopUpContainer.classList.remove('ContentInvisible');
        VerificationPopUpText.innerHTML = Message;
        return(PopUpPromise);

    }
    
}

function HidePopUp()
{
    PopUp.classList.add('ContentInvisible');
    ContentDisable.classList.add('ContentInvisible');

    WO_PopUp.classList.add('ContentInvisible');
    VerificationPopUpContainer.classList.add('ContentInvisible');
}




TransButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(TransButton,TransOptionsContainer);
    
})

LogsButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(LogsButton,LogsOptionsContainer);
    
})

MaintenanceButton.addEventListener('click',()=>{
    SideButtonClearStyle();
    SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    
})

var AddUserContainer = document.getElementById('AddUserContainer');
var AddClientContainer = document.getElementById('AddClientContainer');
var ClientListContainer = document.getElementById('ListClientContainer');

function SetContent()
{
    var storage = window.sessionStorage;
    var currentcontent = storage.getItem('CurrentContent')

    if(currentcontent == "AddUser")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(AddUserContainer);
        MaintenanceButtonSelect(AddUsersButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "AddClient")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(AddClientContainer);
        MaintenanceButtonSelect(AddClientButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "ClientList")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(ClientListContainer);
        MaintenanceButtonSelect(ClientListButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }
    else if(currentcontent == "PriceSched")
    {
        
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(PriceScheduleContainer);
        MaintenanceButtonSelect(PriceSchedButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }

    else if(currentcontent == "Location")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        ShowContent(MLocationContainer);
        MaintenanceButtonSelect(LocationSideButton);
        SideButtonSelect(MaintenanceButton,MaintenanceOptionsContainer);
    }

    else if(currentcontent == "WeighIn")
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ShowContent(WeighInContainer);
        TransactionButtonSelect(WeighInSideButton);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }

    else if(currentcontent == "WeighOut$List" || currentcontent == "WeighOut$Input" )
    {
        ContentClear();
        SubOptiosButtonClearStlye();
        ShowContent(WeighOutContainer);
        TransactionButtonSelect(WeighOutSideButton);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }

    else if(currentcontent == "Payment")
    {
        ContentClear();
        SubOptiosButtonClearStlye()
        TransactionButtonSelect(PaymentSideButton);
        ShowContent(PaymentContainer);
        SideButtonSelect(TransButton,TransOptionsContainer);
    }
    
}

SetContent();

PopUpClose.addEventListener("click", ()=>{
    HidePopUp();
})