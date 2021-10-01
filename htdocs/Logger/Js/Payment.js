var P_TableB = document.getElementById('P_TableB');
var P_TableHeaderB = document.getElementById('P_TableHeaderB');

function P_ShowClientTransaction()
{
    var P_IndexList = [];
    var CC = window.sessionStorage.getItem("P_CurrentClient");

    var T = 
    P_TransactionInfo.ClientName.forEach((item,index) => {
        if(item == CC)
        {   
            P_IndexList.push(index);
        }
    })


    var LongestTransactionNumber = "";
    var LongestWODate = "";
    var LongestNetWeight = "";
    var LongestTotalPrice = "";

    P_IndexList.forEach((item,index) => {

        var TNumber = P_TransactionInfo.TransactionNumber[item];
        var T = TNumber.split('-');

        P_TableB.innerHTML += `
        <tr class="RowStyle">
            <td><input type="checkbox" id="P_${T[0]}_${T[1]}"></td>
            <td class="P_TableData">${TNumber}</td>
            <td class="P_TableData">${P_TransactionInfo.WeighOutDate[item]}</td>
            <td class="P_TableData">${P_TransactionInfo.NetWeight[item]}</td>
            <td class="P_TableData">₱${FormatNumber(P_TransactionInfo.TotalPrice[item])}</td>
        </tr>`;

        if(TNumber.length > LongestTransactionNumber.length)
        {
            LongestTransactionNumber = TNumber;
        }

        if(P_TransactionInfo.WeighOutDate[item].length > LongestWODate.length)
        {
            LongestWODate = P_TransactionInfo.WeighOutDate[item];
        }

        if(P_TransactionInfo.NetWeight[item].length> LongestNetWeight.length)
        {
            LongestNetWeight = P_TransactionInfo.NetWeight[item];
        }

        if(FormatNumber(P_TransactionInfo.TotalPrice[item]).length > LongestTotalPrice.length)
        {
            LongestTotalPrice = FormatNumber(P_TransactionInfo.TotalPrice[item]);
        }

        P_TableHeaderB.innerHTML+=` 
        <tr class="RowStyle">
            <td><input type="checkbox"></td>
            <td class="P_TableData">${LongestTransactionNumber}</td>
            <td class="P_TableData">${LongestWODate}</td>
            <td class="P_TableData">${LongestNetWeight}</td>
            <td class="P_TableData">₱${LongestTotalPrice}</td>
        </tr>`;
    })
}

P_ShowClientTransaction();