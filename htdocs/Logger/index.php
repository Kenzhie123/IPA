<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Style/WeighIn.css"/>
    <link rel="stylesheet" href="Style/WeighOut.css"/>
    <link rel="stylesheet" href="Style/Payment.css"/>

    <link rel="stylesheet" href="Style/MainStyle.css?v=1"/>
    <link rel="stylesheet" href="Style/AddUser.css?v=1"/>
    <link rel="stylesheet" href="Style/AddClient.css?v=1"/>
    <link rel="stylesheet" href="Style/PriceSchedule.css"/>
    <link rel="stylesheet" href="Style/Location.css"/>

    <title>Document</title>
</head>
<body id ="body">

    <div class="SideBar">
        <div id="upSideBar">
            <div></div>
            <h1 class="CurrentUserText"></h1>
            <div></div>
        </div>
       
        <div id="sideButtonContainer">
            <div class="SideBarSelections">
                
                <button class="ButtonSelected" id="TransactionButton">Input Transaction 
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                            <path d="M24 24H0V0h24v24z" 
                            fill="none" opacity="1"/> <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>
                
               
                <div>
                    <ul class="SidebarOptionsContainer  ContentInvisible" id="TransactionOptionsContainer">
                        <li>
                            <div class="SubOptionButtons" id="WeighInSideButton">
                                Weigh In
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="WeighOutSideButton">
                                Weigh Out
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="PaymentSideButton">
                                Payment
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 

            </div>
            
            <div class="SideBarSelections">
                <button class="SideBarButtons"  id="LogsButton">Reports 
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                        <path d="M24 24H0V0h24v24z" fill="none" opacity="1"/> 
                        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>

                <div>
                    <ul class="SidebarOptionsContainer ContentInvisible" id="LogsOptionsContainer" >
                        <li>
                            <div class="SubOptionButtons">
                                Today's Report
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons">
                                Past Reports
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons">
                                Create Report
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 

                
            </div>

            <div class="SideBarSelections" >
                <button class="SideBarButtons " id="MaintenanceButton">Maintenance
                    <svg 
                        class="ContentInvisible"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20" width="20px" 
                        fill="white" text-align="center" >
                            <path d="M24 24H0V0h24v24z" 
                            fill="none" opacity="1"/> <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        height="20px" viewBox="0 0 20 20"
                        width="20px" fill="white">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/>
                    </svg>
                </button>

                <div>
                    <ul class="SidebarOptionsContainer  ContentInvisible" id="MaintenanceOptionsContainer" >
                        <li>
                            <div class="SubOptionButtons" id="AddUsersButton">
                                Add User
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="AddClientButton">
                                Add Client
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="ClientListButton">
                                List Clients
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="PriceSchedButton">
                                Schedule Price
                            </div>
                        </li>
                        <li>
                            <div class="SubOptionButtons" id="LocationSideButton">
                                Location List
                            </div>
                        </li>
                    </ul>
                        
                    
                </div> 
            </div>
            
       
            
        </div>
       
    </div>
    

    <!--Input Transaction-->

    <div id="Transaction_Container" class="" >
        <div id="TransactionContent_Container">
            <div class="topContent"></div>

            <div id="WeighInContainer" class="ContentInvisible">
                
                <form id="WeighInContent_Container" method="post" action="WeighIn.php">
                    <div id="WeighInContentLeft">
                        <h1 class="InputTypeText">Client Name</h1>
                        <select id="WI_ClientNameCbox" name="WI_ClientNameText" class="CboxStyle"></select>
                        <h1 class="InputTypeText">Location From</h1>
                        <select id="WI_LocationFromCBox" name="WI_LocationFromText" class="CboxStyle"></select>
                        <h1 class="InputTypeText">Driver Name</h1>
                        <input type="text" name="WI_DriverNameText" id="WI_DriverNameText" class="InputText2">
                    </div>
                    <hr>

                    <div id="WeighInContentRight">
                        <h1 class="InputTypeText">Transaction Type</h1>
                        <select id="WI_TransacTypeCbox" name="WI_TransacTypeName" class="CboxStyle">
                            <option value="Deliver">Deliver</option>
                            <option value="Hakot">Hakot</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Rider_Transfer">Rider Transfer</option>
                            <option value="Sale">Sale</option>
                        </select>
                        <h1 class="InputTypeText">Location To</h1>
                        <select id="WI_LocationToCBox" name="WI_LocationToText" class="CboxStyle"></select>
                        <h1 class="InputTypeText">Plate Number</h1>
                        <input type="text" name="WI_PlateNumberText" id="WI_PlateNumberText"  class="InputText2">
                    </div>

                    <div id="WeighInContentBottom" >
                        <div>
                            <input type="hidden" name="WeighInUIDtext" id="WeighInUIDtext">
                        </div>
                        <h1 class="InputTypeText TextCenter" id="WeightStyle">Weight (IN)</h1>
                        <span id="WeighInWeightTextContainer">

                            <input type="number" name="WI_WeightText" id="WI_WeightText">
                            KG
                        </span>


                        <div id="WeighInButtonContainer" class="ContentCenter"><button id="WeighInButton" type="button">Add Transaction</button></div>
                    </div>
                    

                </form>

        

            </div>  

            <div id="WeighOutContainer" class="ContentInvisible">

                <div id="WO_InputContainer" class="ContentInvisible">
                    <div id="WeighOutContent_Container">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        height="24px" viewBox="0 0 24 24"
                         width="24px" fill="#000000"
                         id="WO_BackArrow">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                        </svg>
                        <div></div>
                        <div></div>
                        <div id="WeighOutContentLeft">
                            <h1 class="InputTypeText">Client Name:</h1>
                            <h1 class="OutputText" id="WO_ClientNameText"></h1>
                            <h1 class="InputTypeText">Location From:</h1>
                            <h1 class="OutputText" id="WO_LocationFromText" ></h1>
                            <h1 class="InputTypeText">Driver:</h1>
                            <h1 class="OutputText" id="WO_DriverNameText"></h1>
                            <h1 class="InputTypeText">Weigh In Date:</h1>
                            <h1 class="OutputText" id="WO_WeighInDateText"></h1>
                            <h1 class="InputTypeText">Weight (IN)</h1>
                            <h1 class="OutputText" id="WO_WeightInText"></h1>
                        </div>
                        <hr>
                        <div id="WeighOutContentRight">
                            <h1 class="InputTypeText">Transaction Num:</h1>
                            <h1 class="OutputText" id="WO_TransacNumberText"></h1>
                            <h1 class="InputTypeText">Location To:</h1>
                            <div class="WO_EditContainer">
                                <select id="WO_LocationToCBox" class="CboxStyle  ContentInvisible"></select>
                                <h1 class="OutputText" id="WO_LocationToText"></h1>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                 viewBox="0 0 24 24" width="24px" fill="#000000"
                                 id="WO_LocationToEditButton">
                                 <path d="M0 0h24v24H0V0z" fill="none"/>
                                 <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66
                                  3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02
                                   0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3
                                    17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" 
                                height="24px" viewBox="0 0 24 24"
                                 width="24px" fill="#000000"
                                 id="WO_LocationToEditSave"  class="ContentInvisible" >
                                 <path d="M0 0h24v24H0V0z" fill="none"/>
                                 <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                                </svg>
                            </div>
                            <h1 class="InputTypeText">Plate Number:</h1>
                            <h1 class="OutputText" id="WO_PlateNumberText"></h1>
                            <h1 class="InputTypeText">Transaction Type:</h1>
                            <h1 class="OutputText" id="WO_TransacTypeText"></h1>
                            <h1 class="InputTypeText">Price Per KG:</h1>

                            <div class="WO_EditContainer">
                                <h1 class="OutputText" id="WO_PricePerKGText"></h1>
                                <input type="text" id="WO_PricePerKGInputText" class="ContentInvisible TextCenter InputText">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                 viewBox="0 0 24 24" width="24px" fill="#000000"
                                 id="WO_PricePerKGEditButton">
                                 <path d="M0 0h24v24H0V0z" fill="none"/>
                                 <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66
                                  3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02
                                   0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3
                                    17.25V21h3.75L17.81 9.94l-3.75-3.75z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" 
                                height="24px" viewBox="0 0 24 24"
                                 width="24px" fill="#000000"
                                 id="WO_PricePerKGEditSave"  class="ContentInvisible" >
                                 <path d="M0 0h24v24H0V0z" fill="none"/>
                                 <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                                </svg>
                            </div>

                            
                        </div>
    
                        <form id="WeighOutForm" method="post" action="WeighOut.php">
                            <div>
                                <input type="hidden" name="WO_TransactionNumberInput" id="WO_TransactionNumberInput">
                                <input type="hidden" name="WeighOutUIDtext" id="WeighOutUIDtext">
                                <input type="hidden" name="WO_PricePerKGInputText" id="WO_PricePerKGInputTextF" value="none">
                                <input type="hidden" name="WO_LocationToCBox" id="WO_LocationToTextF" value="none">
                                <input type="hidden" name="WO_Remarks" id="WO_Remarks" value="none">
                                <input type="hidden" name="WO_PriceUpdateUID" id="WO_PriceUpdateUID" value="none">
                                <input type="hidden" name="WO_PopUpCancel" id="WO_PopUpCancel">
                                
                            </div>
                            <h1 class="InputTypeText TextCenter" id="WeightStyle">Weight (OUT)</h1>
                            <span id="WeighOutWeightTextContainer">
    
                                <input type="number" name="WO_WeightText" id="WO_WeightText">
                                KG
                                
                            </span>
                            
                            <div id="WeighOutButtonContainer" class="ContentCenter">
                                <button id="WeighOutCancelButton" class="WeighOutButtonStyle" type="button">Cancel</button>
                                <button id="WeighOutButton" class="WeighOutButtonStyle" type="button">Update</button>
                            </div>
                        </form>

                    </div>
                    <div id="WO_RemarksInputContainer">
                        <h1 id="WO_RemarksHeader">Remarks</h1>
                        <textarea form="WeighOutForm" type="text" name="WO_RemarksText" id="WO_RemarksText"></textarea>
                    </div>
                </div>

                

                <div id="WO_ListContentContainer">
                    <div id="WO_ListContainer" >

                        <div id="WO_SearchContainer">
                            <h1 class="InputTypeText2">Search</h1>
                            <h1 class="InputTypeText2">Filter</h1>
                        
                            <div></div>
                            <input type="text" class="InputText" id="WO_Search">
                            
                            <select class="CboxStyle" id="WO_Filter" >
                                <option value="Client Name">Client Name</option>
                                <option value="Transaction Number">Transaction Number</option>
                                <option value="Transaction Type">Transaction Type</option>
                                <option value="Weigh In Date">Weigh In Date</option>
                                <option value="Weight(IN)">Weight(IN)</option>
                            </select>

                        </div>

                        <div id="WO_List">

                            <div id="WO_HeaderListContainer">
                                <table id="WO_HeaderTable">
                                    <tr class="ListHeader">
                                        <th>Client Name</th>
                                        <th>Transaction Number</th>
                                        <th>Transaction Type</th>
                                        <th>Weigh In Date</th>
                                        <th>Weight (IN)</th>
                                    </tr>

                                </table>
                            </div>

                            <div id="WO_TableContainer">
                                    <table id="WO_Table">
                                        <tr class="ListHeader2">
                                            <th >Client Name</th>
                                            <th>Transaction Number</th>
                                            <th>Transaction Type</th>
                                            <th>Weigh In Date</th>
                                            <th>Weight (IN)</th>
                                        </tr>
                                        
                                    </table>
                            </div>

                        </div>

                        
                    </div>
              
                </div>
            </div>

            <div id="PaymentContainer" class="ContentInvisible">
                <div id="P_ContentContainer">
                    <div id="P_ContentContainerLeft">
                        <div id="P_ContentLeft">
                            
                            <div class="DualButtonContainer" id="P_CurrentClientContainer">
                                <span id="P_CurrentClientHeader">Client Selected:</span>
                                <span id="P_CurrentClient">ABAR RICE MILL</span>
                            </div>
                            
                            <div id="P_SelectDateRangeContainer">
                                <h1 class="InputTypeText">Select Date From</h1>
                                <input type="date">
                                <h1 class="InputTypeText">Select Date To</h1>
                                <input type="date">
                                <button id="P_SelectDateButton" class="P_Button">Select</button>
                                
                                <button class="P_Button" id="P_ClearSelectionButton">Clear Selection</button>
                                <button class="P_Button" id="P_SelectAllButton">Select All</button>
                                
                            </div>

                            <div></div>

                            <button class="P_Button">Pay</button>
                            
                            
                        </div>
                    </div>

                    <div id="P_ContentContainerRight"> 
                        <div id="P_ContentRightA" class="ContentInvisible">
    
                            <div id="P_ContainerRightTableA">
                                <div id="P_TableHeaderContainerA">
                                    <table id="P_TableHeaderA">
                                        <tr class="ListHeader">
                                            <th>Client Name</th>
                                            <th>Total Unpaid Transactions</th>
                                            <th>Total Price</th>
                                        </tr>
                                        
                                    </table>
                                </div>
                               
                                <div id="P_TableContainerA">
                                    <table id="P_TableA" >
                                        <tr class="ListHeader2">
                                            <th>Client Name</th>
                                            <th>Total Unpaid Transactions</th>
                                            <th>Total Price</th>
                                        </tr>
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>


                        <div id="P_ContentRightB">
                            <div id="P_ContainerRightTableB">
                                <div id="P_TableHeaderContainerB">
                                    <table id="P_TableHeaderB">
                                        <tr class="ListHeader">
                                            <th></th>
                                            <th>Transaction Number</th>
                                            <th>Weigh Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Total Price</th>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td class="P_TableData">ABC 452</td>
                                            <td class="P_TableData">October 01, 2021 - 03:47 PM</td>
                                            <td class="P_TableData">19877.000 KG</td>
                                            <td class="P_TableData">₱100,000</td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                               
                                <div id="P_TableContainerB">
                                    <table id="P_TableB" >
                                        <tr class="ListHeader2">
                                            <th></th>
                                            <th>Transaction Number</th>
                                            <th>Weigh Out Date</th>
                                            <th>Net Weight</th>
                                            <th>Total Price</th>
                                        </tr>

                                        <tr class="RowStyle">
                                            <td><input type="checkbox"></td>
                                            <td class="P_TableData">ABC 452</td>
                                            <td class="P_TableData">October 01, 2021 - 03:47 PM</td>
                                            <td class="P_TableData">19877.000 KG</td>
                                            <td class="P_TableData">₱100,000</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Maintenance-->
    <div id="maintenance_Container" class="ContentInvisible">
        <div id="Maintenance_Container">
            <div class="topContent"></div>
           
            <div id="AddUserContainer" class="ContentInvisible">
                <form id="addUserForm" method="POST" action="AddUser.php" autocomplete="off"> 
                    <div id="personalInformationInputContainer">
                        <div id="nameInput">
                            <h1 class="InputTypeText">First Name</h1>
                            <input type="text" name="FnameText" class="InputText" id="FnameText">
                            <h1 class="InputTypeText">Middle Name</h1>
                            <input type="text" name="MnameText" class="InputText" id="MnameText">
                            <h1 class="InputTypeText">Last Name</h1>
                            <input type="text" name="LnameText" class="InputText" id="LnameText">
                            <h1 class="InputTypeText">Address</h1>
                            <input type="text" name="AddressText" class="InputText" id="AddressText">
                        </div>
    
                        <hr>
    
                        <div id="personalInformationInput2">
    
                            <h1 class="InputTypeText">Civil Status</h1>
                            <input type="text" name="CivilStatusText" class="InputText" id="CivilStatusText">
                            <h1 class="InputTypeText">Birth Date</h1>
                            <div id="birthDateInput">
                                
                                <select name="BdateMonth" id="BdateMonth" class="CboxStyle">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
    
                                <select name="BdateDay" id="BdateDay" class="CboxStyle">
                                    
                                </select>
    
                                <select name="BdateYear" id="BdateYear" class="CboxStyle">
                                    
                                </select>
                            </div>
                            
                            <h1 class="InputTypeText">Mobile Num</h1>
                            <input type="number" name="ContactText" class="InputText" id="ContactText">
    
                            <h1 class="InputTypeText">Gender</h1>
                            <div id="genderRadio" class="doubleColoumnContainer">
                                
                                <div class="doubleColoumnContainer">
                                    <input type="radio" name="Gender" value="Male"  class="RadioMiddle" checked>
                                    <label >Male</label>
                                </div>
                                
                                <div  class="doubleColoumnContainer">
                                    <input type="radio" name="Gender" value="Female" class="RadioMiddle">
                                    <label  >Female</label>
                                </div>
                                
                               
                            </div>
                        </div>
                    
                       
    
                    </div>
    
                    <div class="hr"></div>
                    
                    <div id="accountInformationInputContainer" >
                        <div id="accountCredentialsInput">
                            <h1 class="InputTypeText" >User Name</h1>
                            <input type="text" name="UserNameText" class="InputText" id="UserNameText">
                            <h1 class="InputTypeText">Password</h1>
                            <input type="password" name="PasswordText" class="InputText" id="PasswordText">
                            <h1 class="InputTypeText">Repeat Pass</h1>
                            <input type="password" name="RepeatPasswordText" class="InputText" id="RepeatPasswordText">
                            <h1 class="InputTypeText">Authority</h1>
                            <select id="authorityCbox" class="CboxStyle" name="Authority">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <hr>
                        <div id="accountCredentialsInput2">
                            <h1 class="InputTypeText">Email Address</h1>
                            <input type="text" name="EmailText" class="InputText" id="EmailText">
                            <h1 class="InputTypeText">User Level</h1>
                            <input type="text" name="UserLevelText" class="InputText" id="UserLevelText">
                            <h1 class="InputTypeText">Designation</h1>
                            <input type="text" name="DesignationText" class="InputText" id="DesignationText">
                        </div>
    
                    </div>
                    <input type="hidden" name="AddUserActive" value="Active">
                    <input type="hidden" name="AddedDate" id="AddedDateText">
                    <input type="hidden" name="AddedBy" id="AddedByText">
                    <button id="addAccountSubmit" type="button">Add User</button>
    
                </form>
            </div>
    
            <div id="AddClientContainer" class="ContentInvisible">
                <form id="AddClientForm" method="post" action="ClientAdd.php" autocomplete="off">
                    <h1 class="InputTypeText">Client Name</h1>
                    <input type="text" class="InputText" id="ClientNameText" name="ClientName" >
                    <h1 class="InputTypeText" >Company Name</h1>
                    <input type="text" class="InputText" id="CompanyNameText" name="CompanyName" >
                    <h1 class="InputTypeText">Address</h1>
                    <input type="text" class="InputText" id="ClientAddressText" name="ClientAddress" >
                    <h1 class="InputTypeText">Contact Number</h1>
                    <input type="number" class="InputText" id="ClientContactNumberText" name="ClientContactNumber">
                    <input type="hidden" name="AddClientActive" value="Active">
                    <button type=button id="AddClientSubmit">Add Client</button>
                    
                </form>
                
                
                
            </div>
    
            <div id="ListClientContainer"  class="ContentInvisible">
                <div id="ClientList">
    
                    <div id="ClientListContainer2">
                        <table id="ClientListTable2" scroll="0">
                            <tr>
                                <th class="ClientTableHeader" unselectable="on">Client Name</td>
                                <th class="ClientTableHeader" unselectable="on">Company</td>
                                <th class="ClientTableHeader" unselectable="on">Mobile Number</td>
                                <th class="ClientTableHeader" unselectable="on">Address</td>
                            </tr>
                        </table>
                    </div>
        
                    <div id="ClientListContainer">
                        <table id="ClientListTable">
                            <tr>
                                <th class="ClientTableHeader">Client Name</td>
                                <th class="ClientTableHeader">Company</td>
                                <th class="ClientTableHeader">Mobile Number</td>
                            </tr>
                        </table>
        
                    </div>
                </div>
            </div>
    
            <div id="PriceScheduleContainer" class="ContentInvisible">
                <form id="PriceScheduleLayout" method="post" action="PriceSchedule.php" autocomplete="off">
                    <div id="PriceScheduleLeftContainer">
                        <div id="PriceScheduleLeftInContainer">
                            <div></div>
                            <div id="PriceScheduleForm">
                                <div id="PriceScheduleTextInputContainer">
                                    <h1 class="InputTypeText">Price/KG</h1>
                                    <input type="text" name="PricePerKgText" class="InputText PStextadjustments" id="PricePerKgText">
                                    <h1 class="InputTypeText">Start Date</h1>
                                    <input type="date" name="PriceStartText" class="InputText PStextadjustments" id="PriceStartText">
                                </div>
                                
                                <input type="hidden" name="PriceScheduleActive" value="Active">
                                <input type="hidden" name="PriceScheduleSelected" id="PriceScheduleSelected" >
                            </div>
                            
                            
                            <div id="PriceScheduleSelectionOptionsContainer">
                                
                                <h1 class="PriceSchedButtonStyle" id="PriceScheduleApplyToAllButton">Apply To All</h1>
                                <h1 class="PriceSchedButtonStyle" id="PriceScheduleClearButton">Clear Selection</h1>
                            </div>
                        </div>                    
                        <div></div>
                        <h1 class="PriceSchedButtonStyle" id="PriceSchedButtonStyle">Update Prices</h1>
             
    
                    </div>
    
                    <div id="PriceScheduleList" >
                        
                        <div id="PriceSchedContainer2">
                            <table id="PriceSchedTable2" scroll="0">
                                <tr>
                                    <th></th>
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">Price/KG</th>
                                    <th class="ClientTableHeader">Start Date</th>
                                    
                                </tr>
                            </table>
        
                        </div>
    
                        <div id="PriceSchedContainer">
                            <table id="PriceSchedTable">
                                <tr>
                                    <th><input type="checkbox"  name="" value="Checked"></th>
                                    <th class="ClientTableHeader">Client Name</th>
                                    <th class="ClientTableHeader">Company</th>
                                    <th class="ClientTableHeader">PHP/KG</th>
                                    <th class="ClientTableHeader">Start Date</th>
                                    
                                </tr>
                            </table>
            
                        </div>
                    </div>
                    
    
                </form>
    
            </div>
            
            <div id="MLocationContainer" class="ContentInvisible">
                <div id="MLocationContentContainer">
                    <form id="MLocationInputContainer" method="post" action="Location.php" autocomplete="off">
                        <input type="text" id="LocationInputText" name="LocationInputText">
                        <button type="button" id="AddLocationButton">Add Location</button>
                    </form>

                    <div id="MLocationListContainer">
                        <h1 id="AddLocationLocationHeader">Locations</h1>
                        <table id="MlocationList">
                            
                        </table>
                    </div>

                </div>
                
            </div>
    
        </div>
    </div>

    <div id="ContentDisable" class="ContentInvisible"></div>

    <div id="PopUp" class="ContentInvisible">
        <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 0 24 24"
            width="24px" fill="#000000"
            id="PopUpClose">
            <path d="M0 0h24v24H0V0z" fill="none"/>
            <path d="M19 6.41L17.59 5 12 10.59 
            6.41 5 5 6.41 10.59 12 5 17.59
            6.41 19 12 13.41 17.59 19 19
                17.59 13.41 12 19 6.41z"/>
        </svg>
        <div id="WO_PopUp" class="ContentInvisible"> 
            <form id="WO_PopUpContainer" method="post" action="WO_Verification.php" autocomplete="off" >
                
                <input type="hidden" name="WO_PopUpLocationToText" id="WO_PopUpLocationToText">
                <input type="hidden" name="WO_PopUpPricePerKG" id="WO_PopUpPricePerKG">
                <input type="hidden" name="WO_PopUpWeight" id="WO_PopUpWeight">
                <input type="hidden" name="WO_PopUpRemarks" id="WO_PopUpRemarks">
                <input type="hidden" name="WO_PopUpCurUID" id="WO_PopUpCurUID">
                
            
                <p class="PopUpMessage">Secondary Account Needed</p>
                <div id="WO_PopUpInputContainer">
                    <h1 class="PopText" >User Name</h1>
                    <h1 class="PopText" >Password</h1>
                    
                    <input type="text" class ="WO_PopUpInputText" id="WO_PopUpUserName" name="WO_PopUpUserName" >
                    <input type="password" class ="WO_PopUpInputText"  id="WO_PopUpPassword" name="WO_PopUpPassword">
                </div>
                <h1 id="WO_PopUpError" class="TextInvisible">User Credentials Incorrect</h1>
                <button type="button" id="WO_PopUpContinueButton" class="P_Button">Continue</button>
            </form>
        </div>
        

        <div id="VerificationPopUpContainer" class="ContentInvisible">
            <div id="VerificationPopUpContentContainer">
                
                <div>
                <p id="VerificationPopUpText"></p>
                </div>
                <div class="DualButtonContainer">
                    <button type="button" id="VerificationPopUpButtonNo" class="PopUpButtonStyle">No</button>
                    <button type="button" id="VerificationPopUpButtonYes" class="PopUpButtonStyle">Yes</button>
                </div>
            </div>
        </div> 
        
    </div>
    
    


</body>

<!--CLIENT SETTINGS-->

<?php 
    $ActiveAddClient = "False";
    
    $value;
    $ClientIDArray = array();
    $ClientArray = array();
    $CompanyArray = array();
    $NumberArray = array();
    $AddressArray = array();
    $PriceArray = array();
    $StartDateArray = array();

    include("Scripts/DBHandler.php");
    $sql = "SELECT FORMAT(Price_Start_Date, 'MMMM dd, yyyy') as Price_Start_Date_Formatted, * FROM dbo.Client_Information";
    

    $query = sqlsrv_query($Con, $sql);
    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($ClientArray,$row["ClientName"]);
        array_push($CompanyArray,$row["Company"]);
        array_push($ClientIDArray,$row["ClientID"]);

        if($row["ContactNumber"] == null)
        {
            array_push($NumberArray,"Not Set");
        }
        else
        {
            array_push($NumberArray,$row["ContactNumber"]);
        }

        if($row["Address"] == null)
        {
            array_push($AddressArray,"Not Set");
        }
        else
        {
            array_push($AddressArray,$row["Address"]);
        }

        if($row["Price_Per_Kg"]== null)
        {
            array_push($PriceArray,"Not Set");
        }
        else
        {
            array_push($PriceArray,$row["Price_Per_Kg"]);
        }

        if($row["Price_Start_Date_Formatted"]== null)
        {
            array_push($StartDateArray,"Not Set");
        }
        else
        {
            array_push($StartDateArray,$row["Price_Start_Date_Formatted"]);
        }
        
        
    }

?>

<script>

    var ClientTable = document.getElementById('ClientListTable');
    var ClientTable2 = document.getElementById('ClientListTable2');

    class ClientInformation{
        constructor(ClientName, Company, ContactNumber, Address)
        {
            this.ClientName = ClientName;
            this.Company = Company;
            this.ContactNumber = ContactNumber;
            this.Address = Address;
        }

    }

    var ClientInfoArray = [];
    var ClientArray = JSON.parse('<?php echo json_encode($ClientArray);?>');
    var CompanyArray = JSON.parse('<?php echo json_encode($CompanyArray);?>');
    var NumberArray = JSON.parse('<?php echo json_encode($NumberArray);?>');
    var AddressArray = JSON.parse('<?php echo json_encode($AddressArray);?>');

    var LongestClientName = "";
    var LongestCompany = "";
    var LongestMobile = "";
    var LongestAddress= "";


    ClientArray.forEach((item,index) => {
        var Client = new ClientInformation(item,CompanyArray[index], NumberArray[index],AddressArray[index]);
        
        if(index % 2 == 0)
        {
            ClientTable.innerHTML +=  `<tr class="RowStyle">
                        <td class="ClientTableData">${Client.ClientName}</td>
                        <td class="ClientTableData">${Client.Company}</td>
                        <td class="ClientTableData">${Client.ContactNumber}</td>
                        <td class="ClientTableData">${Client.Address}</td>
                    </tr>`

        }
        else
        {ClientTable.innerHTML +=  `<tr class="RowStyle2">
                        <td class="ClientTableData">${Client.ClientName}</td>
                        <td class="ClientTableData">${Client.Company}</td>
                        <td class="ClientTableData">${Client.ContactNumber}</td>
                        <td class="ClientTableData">${Client.Address}</td>
                    </tr>`

        }
       
        if(Client.ClientName.length > LongestClientName.length)
        {
            LongestClientName = Client.ClientName;
        }

        if(Client.Company.length > LongestCompany.length)
        {
            LongestCompany = Client.Company;
        }

        if(Client.Number != undefined)
        {
            if(Client.Number.length > LongestMobile.length)
            {
                LongestMobile = Client.Number;
            }
        }

        if(Client.Address    != undefined)
        {
            if(Client.Address.length > LongestAddress.length)
            {
                LongestAddress = Client.Address;
            }
        }

    })

    var client = new ClientInformation(LongestClientName,LongestCompany,LongestMobile,LongestAddress);
    ClientTable2.innerHTML +=  `<tr>
                        <td class="ClientTableData">${client.ClientName}</td>
                        <td class="ClientTableData">${client.Company}</td>
                        <td class="ClientTableData">${client.Number}</td>
                        <td class="ClientTableData">${client.Address}</td>
                    </tr>`;

</script>

<!--PRICE SCHEDULE SETTINGS--> 

<script>

    var PriceSchedtable = document.getElementById('PriceSchedTable');
    var PriceSchedtable2 = document.getElementById('PriceSchedTable2');

    class PriceSchedInformation{
        constructor(ClientID,ClientName, Company, Price, PriceDate)
        {
            this.ClientID = ClientID;
            this.ClientName = ClientName;
            this.Company = Company;
            this.Price = Price;
            this.PriceDate = PriceDate;
        }

    }

    var ClientInfoArray = [];
    var ClientIDArray = JSON.parse('<?php echo json_encode($ClientIDArray);?>');
    var ClientArray = JSON.parse('<?php echo json_encode($ClientArray);?>');
    var CompanyArray = JSON.parse('<?php echo json_encode($CompanyArray);?>');
    var PriceArray = JSON.parse('<?php echo json_encode($PriceArray);?>');
    var StartDateArray = JSON.parse('<?php echo json_encode($StartDateArray);?>');

    var LongestClientName = "";
    var LongestCompany = "";
    var LongestPrice = "";
    var LongestPriceDate= "";
    var CBArray =[];

    ClientArray.forEach((item,index) => {
        var PriceSched = new PriceSchedInformation(ClientIDArray[index],item,CompanyArray[index], PriceArray[index],StartDateArray[index]);
        
        if(index % 2 == 0)
        {
            PriceSchedtable.innerHTML +=  `<tr class="RowStyle">
                        <td><input type="checkbox" name="PSCB${PriceSched.ClientID}" value="Checked" id="PSCB${PriceSched.ClientID}"></td>
                        <td class="ClientTableData">${PriceSched.ClientName}</td>
                        <td class="ClientTableData">${PriceSched.Company}</td>
                        <td class="ClientTableData">${PriceSched.Price}</td>
                        <td class="ClientTableData">${PriceSched.PriceDate}</td>
                    </tr>`

        }
        else
        {
            PriceSchedtable.innerHTML +=  `<tr class="RowStyle2">
                        <td><input type="checkbox" name="PSCB${PriceSched.ClientID}" value="Checked" id="PSCB${PriceSched.ClientID}"></td>
                        <td class="ClientTableData">${PriceSched.ClientName}</td>
                        <td class="ClientTableData">${PriceSched.Company}</td>
                        <td class="ClientTableData">${PriceSched.Price}</td>
                        <td class="ClientTableData">${PriceSched.PriceDate}</td>
                    </tr>`;

        }

        CBArray.push(`PSCB${PriceSched.ClientID}`);
       
        if(PriceSched.ClientName.length > LongestClientName.length)
        {
            LongestClientName = PriceSched.ClientName;
        }

        if(PriceSched.Company.length > LongestCompany.length)
        {
            LongestCompany = PriceSched.Company;
        }

        if(PriceSched.Price != null)
        {
            if(PriceSched.Price.length > LongestPrice.length)
            {
                LongestPrice = PriceSched.Price;
            }
        }

        if(PriceSched.PriceDate  != null)
        {
            if(PriceSched.PriceDate.length > LongestPriceDate.length)
            {
                LongestPriceDate = PriceSched.PriceDate;
            }
        }

    })

    var price = new PriceSchedInformation(-1,LongestClientName,LongestCompany,LongestPrice,LongestPriceDate);
    PriceSchedtable2.innerHTML +=  `<tr>
                        <td><input type="checkbox" name="-1"></td>
                        <td class="ClientTableData2">${price.ClientName}</td>
                        <td class="ClientTableData2">${price.Company}</td>
                        <td class="ClientTableData2">${price.Price}</td>
                        <td class="ClientTableData2">${price.PriceDate}</td>
                    </tr>`;


    var PriceScheduleApplyToAllButton = document.getElementById('PriceScheduleApplyToAllButton')
    var PriceScheduleClearButton = document.getElementById('PriceScheduleClearButton')
    var PriceSchedUpdate = document.getElementById('PriceSchedButtonStyle');
    var PriceScheduleSelected = document.getElementById('PriceScheduleSelected');
    var PriceScheduleLayout = document.getElementById('PriceScheduleLayout');

    var PriceStartText = document.getElementById('PriceStartText');
    var PricePerKgText = document.getElementById('PricePerKgText');
    var PriceSchedUpdate = document.getElementById('PriceSchedButtonStyle');

    var date = new Date();
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var year = date.getFullYear();
    
    PriceStartText.value = `${year}-0${month}-${day}`;

    var MissingError = "Field Cannot Be Empty";

    PriceScheduleApplyToAllButton.addEventListener('click', ()=>{
        CBArray.forEach((item,index)=>{
            var cb = document.getElementById(item)
            cb.checked = true;
        })
    })

    PriceScheduleClearButton.addEventListener('click', ()=>{
        CBArray.forEach((item,index)=>{
            var cb = document.getElementById(item)
            cb.checked = false;
        })
    })

    PriceSchedUpdate.addEventListener('click', ()=>{
        PriceScheduleSelected.value=CBArray;
        var selected = 0;
        CBArray.forEach((item,index)=>{
            var cb = document.getElementById(item)
            if(cb.checked == true)
            {
                selected++;
            }
        })

        if(selected > 0)
        {
            
            if(PricePerKgText.value == "")
            {
                PricePerKgText.style.color = "#ff385a";
                PricePerKgText.value= MissingError;
            }
            else
            {
                PriceScheduleLayout.submit();
            }
            
            
            
        }
        else
        {
            alert("Please Select a Client to Update");
        }
        
    })

</script>

<!--LOCATION SETTINGS-->

<?php
    $LocationList = array();

    $sql = "SELECT * FROM dbo.Location_Information";
    $query = sqlsrv_query($Con,$sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($LocationList,$row["Location"]);
    }
?> 
<script>

    var MlocationList = document.getElementById('MlocationList');
    var AddLocationButton = document.getElementById('AddLocationButton');
    var MLocationInputContainer = document.getElementById('MLocationInputContainer');
    var LocationList = <?php echo json_encode($LocationList)?>;
   

    LocationList.forEach((item,index)=>{
        if(index%2 == 0)
        {
            MlocationList.innerHTML +=  
            `<tr class="RowStyle">
                <td class="ClientTableData">${item}</td>
            <tr>`
        }
        else
        {
            MlocationList.innerHTML +=  
            `<tr class="RowStyle2">
                <td class="ClientTableData">${item}</td>
            <tr>`
        }
    })

    AddLocationButton.addEventListener('click', ()=>{
        if(LocationInputText.value =="")
        {
            LocationInputText.value = "Field Cannot Be Empty";
            LocationInputText.style.color = "#ff385a";
        }
        else
        {
            MLocationInputContainer.submit();
        }
    })

    LocationInputText.addEventListener('click', ()=>{
    if(LocationInputText.style.color == 'rgb(255, 56, 90)')
            {
                LocationInputText.value="";
                LocationInputText.style.color = "#000";
            }
    })


</script>


<!--WEIGH IN SETTINGS-->

<script>
    var WI_ClientNameCbox = document.getElementById('WI_ClientNameCbox');
    var WI_LocationFromCBox = document.getElementById('WI_LocationFromCBox');
    var WI_LocationToCBox = document.getElementById('WI_LocationToCBox');
    var WO_LocationToCBox = document.getElementById('WO_LocationToCBox');

    var ClientArray = JSON.parse('<?php echo json_encode($ClientArray);?>');
    var LocationList = <?php echo json_encode($LocationList)?>;

    ClientArray.forEach((item,index)=>{
        var i = document.createElement('option');
        i.value = item;
        i.innerHTML = item;
        WI_ClientNameCbox.appendChild(i);
    })

    LocationList.forEach((item,index)=>{
        var i = document.createElement('option');
        var i2 = document.createElement('option');
        var i3 = document.createElement('option');

        i.value = item;
        i.innerHTML = item;

        i2.value = item;
        i2.innerHTML = item;
        
        i3.value = item;
        i3.innerHTML = item;

        WI_LocationFromCBox.appendChild(i);
        WI_LocationToCBox.appendChild(i2);
        WO_LocationToCBox.appendChild(i3);
    })


</script>

<!--WEIGH OUT SETTINGS-->


<?php
    
    $WO_ClientNameList = array();
    $WO_TransactionNumList = array();
    $WO_LocationFromList = array();
    $WO_LocationToList = array();
    $WO_DriverNameList = array();
    $WO_PlateNumberList = array();
    $WO_WeighInDateList = array();
    $WO_TransacTypeList = array();
    $WO_WeighINList = array();
    $WO_PricePerKGList = array();

    $sql = "SELECT FORMAT(Weigh_In_Date, 'MMMM dd, yyyy - hh:mm tt') as WeighInDate_Formatted,* FROM dbo.Transaction_Information WHERE Status = 'IN' ";

    $query = sqlsrv_query($Con,$sql);

    while($row = sqlsrv_fetch_array($query,SQLSRV_FETCH_BOTH))
    {
        array_push($WO_ClientNameList,$row["ClientName"]);
        array_push($WO_TransactionNumList,$row["TransactionNumber"]);
        array_push($WO_LocationFromList,$row["LocationFrom"]);
        array_push($WO_LocationToList,$row["LocationTo"]);
        array_push($WO_DriverNameList,$row["Driver"]);
        array_push($WO_PlateNumberList,$row["PlateNumber"]);
        array_push($WO_WeighInDateList,$row["WeighInDate_Formatted"]);
        array_push($WO_TransacTypeList,$row["TransactionType"]);
        array_push($WO_WeighINList,$row["WeighIn"]);
        array_push($WO_PricePerKGList,$row["Price_Per_Kg"]);
    }

    
?>
<script>
    var WO_Table = document.getElementById('WO_Table');
    var WO_HeaderTable = document.getElementById('WO_HeaderTable');
    class WeighOutInformation{
        constructor(ClientName,TransactionNumber, LocationFrom,LocationTo,DriverName,PlateNumber,WeighInDate,TransactionType,WeightIn,PricePerKg){
            this.ClientName = ClientName;
            this.TransactionNumber = TransactionNumber;
            this.LocationFrom = LocationFrom;
            this.LocationTo = LocationTo;
            this.DriverName = DriverName;
            this.PlateNumber = PlateNumber;
            this.WeighInDate = WeighInDate;
            this.TransactionType = TransactionType;
            this.WeightIn = WeightIn;
            this.PricePerKg = PricePerKg;
        }
    }

    
    var WO_ClientNameList = <?php echo json_encode($WO_ClientNameList);?>;
    var WO_TransactionNumList = <?php echo json_encode($WO_TransactionNumList);?>;
    var WO_LocationFromList =<?php echo json_encode($WO_LocationFromList);?>;
    var WO_LocationToList = <?php echo json_encode($WO_LocationToList);?>;
    var WO_DriverNameList = <?php echo json_encode($WO_DriverNameList);?>;
    var WO_PlateNumberList = <?php echo json_encode($WO_PlateNumberList);?>;
    var WO_WeighInDateList = <?php echo json_encode($WO_WeighInDateList);?>;
    var WO_TransacTypeList = <?php echo json_encode($WO_TransacTypeList);?>;
    var WO_WeighINList = <?php echo json_encode($WO_WeighINList);?>;
    var WO_PricePerKGList = <?php echo json_encode($WO_PricePerKGList);?>;
    var WO_InformationList =
     new WeighOutInformation(WO_ClientNameList,
     WO_TransactionNumList,
     WO_LocationFromList,
     WO_LocationToList,
     WO_DriverNameList,
     WO_PlateNumberList,
     WO_WeighInDateList,
     WO_TransacTypeList,
     WO_WeighINList,
     WO_PricePerKGList);
    
    var WO_LongestClientName = "";
    var WO_LongestTransactionNumber = "";
    var WO_LongestTransType = "";
    var WO_LongestWeighInDate = "";
    var WO_LongestWeight = "";

    var IndexList = [];
    var WO_TableRows = [];
    function WO_SetListValues()
    {
        WO_TableRows = [];
        WO_ClientNameList.forEach((item,index)=>{

            var WO = new WeighOutInformation(
                WO_ClientNameList[index],
                WO_TransactionNumList[index],
                WO_LocationFromList[index],
                WO_LocationToList[index],
                WO_DriverNameList[index],
                WO_PlateNumberList[index],
                WO_WeighInDateList[index],
                WO_TransacTypeList[index],
                WO_WeighINList[index],
                WO_PricePerKGList[index]);
            
            var T = WO.TransactionNumber.split('-');

            if(index % 2 == 0)
            {
                
                
                WO_Table.innerHTML += ` <tr class="RowStyle" id="WOL_${T[0]}_${T[1]}">
                                    <td class="WO_TableData">${WO.ClientName}</td>
                                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                                    <td class="WO_TableData">${WO.TransactionType}</td>
                                    <td class="WO_TableData">${WO.WeighInDate}</td>
                                    <td class="WO_TableData">${WO.WeightIn} KG</td>
                                </tr>`;
               
               

            }
            else
            {
                WO_Table.innerHTML += `<tr class="RowStyle2" id="WOL_${T[0]}_${T[1]}">
                                    <td class="WO_TableData">${WO.ClientName}</td>
                                    <td class="WO_TableData">${WO.TransactionNumber}</td>
                                    <td class="WO_TableData">${WO.TransactionType}</td>
                                    <td class="WO_TableData">${WO.WeighInDate}</td>
                                    <td class="WO_TableData">${WO.WeightIn} KG</td>
                                </tr>`;
              
                
            }
            
            if(WO.ClientName.length > WO_LongestClientName.length)
            {
                WO_LongestClientName = WO.ClientName;
            }

            if(WO.TransactionNumber.length > WO_LongestTransactionNumber.length)
            {
                WO_LongestTransactionNumber = WO.TransactionNumber;
            }

            if(WO.TransactionType.length > WO_LongestTransType.length)
            {
                WO_LongestTransType = WO.TransactionType;
            }

            if(WO.WeighInDate.length > WO_LongestWeighInDate.length)
            {
                WO_LongestWeighInDate = WO.WeighInDate;
            }

            if(WO.WeightIn.length > WO_LongestWeight.length)
            {
                WO_LongestWeight = WO.WeightIn;
            }

            
            WO_TableRows.push(`WOL_${T[0]}_${T[1]}&${WO.TransactionNumber}`);
            IndexList.push(index);
        })


        WO_HeaderTable.innerHTML += `<tr class="RowStyle2">
                                    <td class="WO_TableData">${WO_LongestClientName}</td>
                                    <td class="WO_TableData">${WO_LongestTransactionNumber}</td>
                                    <td class="WO_TableData">${WO_LongestTransType}</td>
                                    <td class="WO_TableData">${WO_LongestWeighInDate}</td>
                                    <td class="WO_TableData">${WO_LongestWeight} KG</td>
                                </tr>`;
              


        WO_TableRows.forEach((item,index)=>{
            var data = item.split('&');
            var item2 = document.getElementById(data[0]);
            
            item2.addEventListener('click',()=>{
                window.sessionStorage.setItem('WOL_CurrentTransactionNumber', data[1]);
                SetCurrentContent('WeighOut$Input');
                WO_ShowCurrentTransaction();
            })    
        })

       

    }

    WO_SetListValues();
    
</script>

<!--PAYMENT SETTINGS-->

<?php
    $P_TransactionNumberList = array();
    $P_PlateNumberList = array();
    $P_ClientNameList = array();
    $P_DriverList = array();
    $P_TransactionTypeList = array();
    $P_LocationFromList = array();
    $P_LocationToList = array();
    $P_WeighInDateList = array();
    $P_WeighOutDateList = array();
    $P_NetWeightList = array();
    $P_PricePerKgList = array();
    $P_TotalPriceList = array();
    $P_RemarksList = array();

    $sql = "SELECT FORMAT(Weigh_In_Date, 'MMMM dd, yyyy - hh:mm tt') as WeighInDate_Formatted, 
    FORMAT(Weigh_Out_Date, 'MMMM dd, yyyy - hh:mm tt') as WeighOutDate_Formatted, * FROM dbo.Transaction_Information WHERE Status = 'OUT'";

    $query = sqlsrv_query($Con, $sql);

    while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_BOTH))
    {
        array_push($P_TransactionNumberList,$row["TransactionNumber"]);
        array_push($P_PlateNumberList,$row["PlateNumber"]);
        array_push($P_ClientNameList,$row["ClientName"]);
        array_push($P_DriverList,$row["Driver"]);
        array_push($P_TransactionTypeList,$row["TransactionType"]);
        array_push($P_LocationFromList,$row["LocationFrom"]);
        array_push($P_LocationToList,$row["LocationTo"]);
        array_push($P_WeighInDateList,$row["WeighInDate_Formatted"]);
        array_push($P_WeighOutDateList,$row["WeighOutDate_Formatted"]);
        array_push($P_NetWeightList,$row["NetWeight"]);
        array_push($P_PricePerKgList,$row["Price_Per_Kg"]);
        array_push($P_TotalPriceList,$row["Total_Price"]);
        array_push($P_RemarksList,$row["Remarks"]);
    }

?>


<script>

    function FormatNumber(number)
    {
        var formatted = "";
        var numtostring = number.toString();
        Array.from(numtostring).reverse().forEach((item,index)=>{
            if((index +1)%3 == 0)
            {
                
                if(index == (numtostring.length-1))
                {
                    formatted = item + formatted;
                }
                else
                {
                    formatted = ','+ item + formatted;
                }
            }
            else
            {
                formatted = item + formatted;
            }
            
        })

        return formatted;
    }

    var P_TableHeaderA = document.getElementById("P_TableHeaderA");
    var P_TableA = document.getElementById('P_TableA');
    
    var P_TransactionNumberList = <?php echo json_encode($P_TransactionNumberList);?>;
    var P_PlateNumberList = <?php echo json_encode($P_PlateNumberList);?>;
    var P_ClientNameList = <?php echo json_encode($P_ClientNameList);?>;
    var P_DriverList = <?php echo json_encode($P_DriverList);?>;
    var P_TransactionTypeList = <?php echo json_encode($P_TransactionTypeList);?>;
    var P_LocationFromList = <?php echo json_encode($P_LocationFromList);?>;
    var P_LocationToList = <?php echo json_encode($P_LocationToList);?>;
    var P_WeighInDateList = <?php echo json_encode($P_WeighInDateList);?>;
    var P_WeighOutDateList = <?php echo json_encode($P_WeighOutDateList);?>;
    var P_NetWeightList = <?php echo json_encode($P_NetWeightList);?>;
    var P_PricePerKgList = <?php echo json_encode($P_PricePerKgList);?>;
    var P_TotalPriceList = <?php echo json_encode($P_TotalPriceList);?>;
    var P_RemarksList = <?php echo json_encode($P_RemarksList);?>;

    class P_TransactionInformation{
        constructor(TransactionNumber,PlateNumber,ClientName,Driver,TransactionType,LocationFrom,LocationTo,WeighInDate,WeighOutDate,NetWeight, PricePerKg,TotalPrice,Remarks){
            this.TransactionNumber = TransactionNumber;
            this.PlateNumber = PlateNumber;
            this.ClientName = ClientName;
            this.Driver = Driver;
            this.TransactionType = TransactionType;
            this.LocationFrom = LocationFrom;
            this.LocationTo = LocationTo;
            this.WeighInDate = WeighInDate;
            this.WeighOutDate = WeighOutDate;
            this.NetWeight = NetWeight;
            this.PricePerKg = PricePerKg;
            this.TotalPrice = TotalPrice;
            this.Remarks = Remarks;
        }
    }

    var P_TransactionInfo = new P_TransactionInformation();
    P_TransactionInfo.TransactionNumber = P_TransactionNumberList;
    P_TransactionInfo.PlateNumber = P_PlateNumberList;
    P_TransactionInfo.ClientName =P_ClientNameList;
    P_TransactionInfo.Driver = P_DriverList;
    P_TransactionInfo.TransactionType = P_TransactionTypeList;
    P_TransactionInfo.LocationFrom = P_LocationFromList;
    P_TransactionInfo.LocationTo = P_LocationToList;
    P_TransactionInfo.WeighInDate = P_WeighInDateList;
    P_TransactionInfo.WeighOutDate = P_WeighOutDateList;
    P_TransactionInfo.NetWeight = P_NetWeightList;
    P_TransactionInfo.PricePerKg = P_PricePerKgList;
    P_TransactionInfo.TotalPrice = P_TotalPriceList;
    P_TransactionInfo.Remarks = P_RemarksList;

    var P_LongestClientName = "";
    var P_LongestTotalUT = "";
    var P_LongestTotalPrice = 0;
    var P_UniqueClientList = {};
    var P_UClientList = [];
    var P_UniqueTransactionList = {};


    P_ClientNameList.forEach((item,index) => {
        if(P_UniqueClientList[item] == null)
        {
            var l = [item];
            P_UniqueClientList[item] = parseFloat(P_TotalPriceList[index])
            P_UniqueTransactionList[item] = l;

            if(P_TotalPriceList[index].length > P_LongestTotalPrice.length)
            {
                P_LongestTotalPrice = P_TotalPriceList[index];
            }
            if(item.length > P_LongestClientName.length)
            {
                P_LongestClientName = item;
            }
            
        }
        else
        {
            P_UniqueClientList[item] += parseFloat(P_TotalPriceList[index])
            P_UniqueTransactionList[item].push(item);
        }
    })
    

    for(const[key,value] of Object.entries(P_UniqueClientList))
    {

        var P_ID = `P_${key.replace(/ /g, '_')}`;
        P_TableA.innerHTML += `
                <tr class="RowStyle" id="${P_ID}" >
                    <td class="P_TableData">${key}</td>
                    <td class="P_TableData">${P_UniqueTransactionList[key].length}</td>
                    <td class="P_TableData">₱${FormatNumber(value)}</td>
                </tr>`;

    
        P_UClientList.push(key);

        if(value > P_LongestTotalPrice)
        {
            P_LongestTotalPrice = value;
        }

        if(P_UniqueTransactionList[key].length >P_LongestTotalUT.length )
        {
            P_LongestTotalUT = P_UniqueTransactionList[key].length;
        }
    }

    P_TableHeaderA.innerHTML += `
                <tr class="RowStyle" >
                    <td class="P_TableData">${P_LongestClientName}</td>
                    <td class="P_TableData">${P_LongestTotalUT}</td>
                    <td class="P_TableData">₱${FormatNumber(P_LongestTotalPrice)}</td>
                </tr>`

    P_UClientList.forEach((item,index)=>{
        
        var P_ID = `P_${item.replace(/ /g, '_')}`;
        var id = document.getElementById(P_ID);
        id.addEventListener('click', ()=>{
            window.sessionStorage.setItem("P_CurrentClient", item);
        })
    })

    
</script>


<script src="Js/Transactions.js"></script>
<script src="Js/WeighIn.js"></script>
<script src="Js/WeighOut.js"></script>
<script src="Js/Payment.js"></script>

<script src="Js/AddUser.js?version=1"></script>
<script src="Js/Maintenance.js?v=1"></script>
<script src="Js/AddClient.js?version=1"></script>
<script src="Js/PriceSched.js?version=1"></script>

<script src="Js/index.js?version=1"></script>

    

</html>