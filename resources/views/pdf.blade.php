<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
                {{$report->UserId}}
        </td>
        <td>
                {{$report->Instruction}}
        </td>
        <td>
                {{$report->ServiceType}}
        </td>
        <td>
                {{$report->Image}}
        </td>
        <td>
            {{$report->ServiceComment}}
        </td>
        <td>
                {{$report->ServiceComment}}
        </td>
        <td>
                {{$report->AdditionalCharge}}
        </td>
        <td>
                {{$report->TotalServicePrice}}
        </td>
        <td>
                {{$report->DateRequested}}
        </td>
        <td>
                {{$report->DateUpdated}}
        </td>
        <td>
                {{$report->ServiceStatus}}
        </td>
    </tr>
    </table>
  </body>
</html>