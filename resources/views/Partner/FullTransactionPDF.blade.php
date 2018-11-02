    <!DOCTYPE html>
    <html>
    <head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }

    </style>
    </head>
    <body>
    <h1 align="center"><img src="{{asset('/images/REIN01.png')}}" alt="Logo" width="100px" height="45px"/></h1>
    <p align="center">{{$partner}}</p>
    <br>
    <?php
        echo "<strong>Date: </strong>";
        $mydate=getdate(date("U"));
        echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        date_default_timezone_set("Asia/Singapore");
        echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Time: </strong>" .date("h:i:sa");
    ?>
    
    <p>
        <strong>Report Generated:</strong> Transaction Logs 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <strong>Sort:</strong> All Transactions
    </p>

    <table class="table">
      <tr>
        <th>Transaction No.</th>
        <th>Partner</th>
        <th>Service Type</th>
        <th>Motorist</th>
        <th>Total Service</th>
        <th>Payment Type</th>
      </tr>

            @if(count($reports) >= 0)
             @foreach ($reports as $report)
             <tr>
               <td>{{$report->ID}}</td>
               <td>{{$report->partner}}</td>
               <td>{{$report->servicetype}}</td>
               <td>{{$report->motorist}}</td>
               <td>{{$report->totalservice}}</td>
               <td>{{$report->paymenttype}}</td>
             </tr>
             @endforeach
             @endif
    </table>
</body>
</html>