var AddUsersButton = document.getElementById('AddUsersButton');
var AddClientButton = document.getElementById('AddClientButton');
var ClientListButton = document.getElementById('ClientListButton');
var PriceSchedButton = document.getElementById('PriceSchedButton');
var LocationSideButton = document.getElementById('LocationSideButton');

var AddUserContainer = document.getElementById('AddUserContainer');
var AddClientContainer = document.getElementById('AddClientContainer');
var ClientListContainer = document.getElementById('ListClientContainer');
var PriceScheduleContainer = document.getElementById('PriceScheduleContainer');
var MLocationContainer = document.getElementById('MLocationContainer');
var AddClientActiveForm = document.getElementById('AddClientActiveForm');



function MaintenanceButtonClearStyle(){
    AddUsersButton.setAttribute('class','SubOptionButtons');
    AddClientButton.setAttribute('class','SubOptionButtons');
    ClientListButton.setAttribute('class','SubOptionButtons');
    PriceSchedButton.setAttribute('class','SubOptionButtons');
    LocationSideButton.setAttribute('class','SubOptionButtons');
}

function MaintenanceButtonSelect(Button){

    SideButtonClearStyle();
    MaintenanceButton.setAttribute('class','ButtonSelected');
    MaintenanceButton.children[0].classList.remove('ContentInvisible');
    MaintenanceButton.children[1].classList.add('ContentInvisible');
    MaintenanceContainer.classList.remove('ContentInvisible');

    SubOptionButtonSelect(Button);
}

function SetCurrentContent(Content)
{
   
    window.sessionStorage.setItem('CurrentContent',Content);
}

function MaintenanceClearContent(){
    AddUserContainer.classList.add('ContentInvisible');
    AddClientContainer.classList.add('ContentInvisible');
    ClientListContainer.classList.add('ContentInvisible');
    PriceScheduleContainer.classList.add('ContentInvisible');
    MLocationContainer.classList.add('ContentInvisible');
}




AddUsersButton.addEventListener('click',()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    ShowContent(AddUserContainer);
    MaintenanceButtonSelect(AddUsersButton);
    SetCurrentContent("AddUser");
})

AddClientButton.addEventListener('click',()=>{

    ContentClear();
    SubOptiosButtonClearStlye()
    ShowContent(AddClientContainer);
    MaintenanceButtonSelect(AddClientButton);
    SetCurrentContent("AddClient");
})

ClientListButton.addEventListener('click', ()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    ShowContent(ClientListContainer);
    MaintenanceButtonSelect(ClientListButton);
    SetCurrentContent("ClientList");
})

PriceSchedButton.addEventListener('click',()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    ShowContent(PriceScheduleContainer);
    MaintenanceButtonSelect(PriceSchedButton);
    SetCurrentContent("PriceSched");
})

LocationSideButton.addEventListener('click',()=>{
    ContentClear();
    SubOptiosButtonClearStlye()
    ShowContent(MLocationContainer);
    MaintenanceButtonSelect(LocationSideButton);
    SetCurrentContent("Location");
})



