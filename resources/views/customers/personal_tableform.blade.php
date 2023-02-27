<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<img style="width: 30%;position: relative;bottom: 13px;" src="{{ public_path('/admin/img/logos/logo.png') }}" />
<div class="row" style="font-size: 15px;">
    <div class="col-md-6">
        <h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">Customer Personal Details</h4>
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Application Name</th>
                    <th>Application Number</th>
                    <th>Application Date</th>
                    <th>Father/Spouse Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data['personal'] = App\Customer::where('status', 'Active')->orderBy('customer_id', 'desc')->get();
                $counter = 0;
                foreach ($data['personal'] as $result) {
                ?>
                    <tr>
                        <!-- <td>
                                <?php if (!empty($result->photo)) { ?>
                                    <img width="50" height="50" src="<?php echo  public_path('files/customers/' . $result->photo) ?>">
                                <?php } else { ?>
                                    <img width="50" height="50" src="<?php echo  public_path('files/customers/user.png') ?>">
                                <?php } ?>
                            </td> -->
                        <td><?php echo ++$counter; ?></td>
                        <td>{{$result->applicant_name}}</td>
                        <td>{{$result->application_number}}</td>
                        <td>{{$result->date_of_application}}</td>
                        <td>{{$result->fathers_name}}</td>
                        <td>{{$result->age}}</td>
                        <td>{{$result->gender}}</td>
                        <td>{{$result->phone_code}} {{$result->phone}}</td>
                        <td>{{$result->email}}</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 5px;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #686767;
        color: #fff;
    }

    td {
        overflow: hidden;
        text-overflow: ellipsis;
        word-wrap: break-word;
    }
</style>