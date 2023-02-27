@extends('layouts.admin')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Payment Details List
                </h3>
            </div>
            <div>
                <a href="{{route('payments.add')}}" rel="tooltip" title="" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" data-original-title="Add Payment Details">
                    <i class="la la-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section__content    ">
                    <form method="GET" class="search-form form-inline " action="#">
                        <div class="form-group">
                            <select class="form-control" name="application_number">
                                @php
                                $customers = App\Customer::where('status','Active')->orderby('application_number','asc')->get();
                                @endphp
                                <option value="">Select Application Number</option>
                                @foreach($customers as $customer)
                                <option @if(isset($_REQUEST['application_number']) && $_REQUEST['application_number']==$customer['application_number']) selected @endif value="{{ $customer['application_number'] }}">{{ $customer['application_number'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">    
                            <select class="form-control" name="applicant_name">
                                @php
                                $customers = App\Customer::where('status','Active')->orderby('applicant_name','asc')->get();
                                @endphp
                                <option value="">Select Applicant Name</option>
                                @foreach($customers as $customer)
                                <option @if(isset($_REQUEST['applicant_name']) && $_REQUEST['applicant_name']==$customer['applicant_name']) selected @endif value="{{ $customer['applicant_name'] }}">{{ $customer['applicant_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="bank_type">
                            <option value="">--Select--</option>
                                                    <option value="SBI">SBI</option>
                                                    <option value="HDFC">HDFC</option>
                                                    <option value="IOB">IOB</option>
                                                    <option value="LIC">LIC</option>
                                                    <option value="CANARA">CANARA</option>
                                                    <option value="OTHERS">OTHERS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary m-btn m-btn--air m-btn--custom" type="submit" name="search"><i class="fa fa-search"></i></button>
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a class="btn btn-danger m-btn m-btn--air m-btn--custom" href="{{route('payments.index')}}"><i class="fa fa-times"></i></a>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-portlet">
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <div class="m-section__content">
                        <?php if ($results->count() > '0') {
                        ?>
                        <div class="download_pdf">
                                <a rel="tooltip" style="background: #0054ac;" class="btn btn-secondary m-btn m-btn--air m-btn--custom" title="Download" href="{{route('payments.export_payment')}}" target="_blank" download>
                                    Export<i style="color: white;font-size: 18px !important;" class="fa fa-download"></i>
                                </a>
                            </div>
                            {!! $results->appends(\Request::except('page'))->render() !!}
                            <div class="table-responsive">
                                <table class="table m-table m-table--head-bg-brand">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th>Profile</th>
                                            <th>Application Number</th>
                                            <th>Applicant Name</th>
                                            <th>Application Date</th>
                                            <th>Gross Amount<br>(in Rupees)</th>
                                            <th>Total Received Amount<br>(in Rupees)</th>
                                            <th>Payment Schedule</th>
                                            <?php
                                            if($sessionadmin->adminname == "Admin"){
                                            ?>
                                            <th>Added By</th>
                                            <?php } ?>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $i = ($results->currentpage() - 1) * $results->perpage() + 1;
                                        foreach ($results as $result) {
                                            $customer = App\Customer::where('customer_id', $result['customer_id'])->first();
                                        ?>
                                        
                                            <tr>
                                                <td width="5%">{{ $i }}</td>
                                                <td class="text-center">
                                                    @if(!empty($customer['photo']))
                                                    <a href="{{URL::to('/files/customers/'.$customer['photo'].'')}}" target="_blank"><img src="{{URL::to('/files/customers/'.$customer['photo'].'')}}" width="50" height="50" style="border-radius: 50%;object-fit: cover;" />
                                                    </a>
                                                    @else
                                                    <a href="{{URL::to('/files/customers/user.png')}}" target="_blank"><img src="{{URL::to('/files/customers/user.png')}}" width="50" height="50" style="border-radius:50%;object-fit:cover;" />
                                                    </a>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $result->application_number }}</td>
                                                <td>{{ $result->applicant_name }}</td>
                                                <td>{{ $result->date_of_application }}</td>
                                                <td>{{ $result->gross_amount }}</td>
                                                <td class="text-center">
                                                <?php
                                $details = App\Payment::where('customer_id', '=', $result->customer_id)->where('status', 'Active')->get();
                                $sum = 0;
                                foreach ($details as $detail) {
                                    if ($detail->onbook_received10per != 0) {
                                        $sum += $detail->onbook_received10per;
                                    } else if ($detail->payments_received10per != 0) {
                                        $sum += $detail->payments_received10per;
                                    } else if ($detail->first_received10per != 0) {
                                        $sum += $detail->first_received10per;
                                    } else if ($detail->second_received10per != 0) {
                                        $sum += $detail->second_received10per;
                                    } else if ($detail->third_received10per != 0) {
                                        $sum += $detail->third_received10per;
                                    } else if ($detail->fourth_received10per != 0) {
                                        $sum += $detail->fourth_received10per;
                                    } else if ($detail->fifth_received10per != 0) {
                                        $sum += $detail->fifth_received10per;
                                    } else if ($detail->handover_received10per != 0) {
                                        $sum += $detail->handover_received10per;
                                    } else if ($detail->onbook_received15per != 0) {
                                        $sum += $detail->onbook_received15per;
                                    } else if ($detail->payments_received15per != 0) {
                                        $sum += $detail->payments_received15per;
                                    } else if ($detail->first_received15per != 0) {
                                        $sum += $detail->first_received15per;
                                    } else if ($detail->second_received15per != 0) {
                                        $sum += $detail->second_received15per;
                                    } else if ($detail->third_received15per != 0) {
                                        $sum += $detail->third_received15per;
                                    } else if ($detail->fourth_received15per != 0) {
                                        $sum += $detail->fourth_received15per;
                                    } else if ($detail->fifth_received15per != 0) {
                                        $sum += $detail->fifth_received15per;
                                    } else if ($detail->handover_received15per != 0) {
                                        $sum += $detail->handover_received15per;
                                    } else if ($detail->onbook_received20per != 0) {
                                        $sum += $detail->onbook_received20per;
                                    } else if ($detail->payments_received20per != 0) {
                                        $sum += $detail->payments_received20per;
                                    } else if ($detail->first_received20per != 0) {
                                        $sum += $detail->first_received20per;
                                    } else if ($detail->second_received20per != 0) {
                                        $sum += $detail->second_received20per;
                                    } else if ($detail->third_received20per != 0) {
                                        $sum += $detail->third_received20per;
                                    } else if ($detail->fourth_received20per != 0) {
                                        $sum += $detail->fourth_received20per;
                                    } else if ($detail->fifth_received20per != 0) {
                                        $sum += $detail->fifth_received20per;
                                    } else if ($detail->handover_received20per != 0) {
                                        $sum += $detail->handover_received20per;
                                    }
                                }
                               echo  $sum;
                                ?>
                                                </td>
                                                <td class="text-center">{{ $result->payment_schedule }}{{" %"}}</td>
                                                <?php
                                            if($sessionadmin->adminname == "Admin"){        
                                            ?>
                                                <td>{{ $result->addedby }}</td>
                                                <?php } ?>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        
                                                        <?php
                                                        if ($result->addmore == 1) {
                                                            $add = "hide";
                                                        } else {
                                                            $add = "";
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($result->payment_schedule == 10) {
                                                            if (($result->onbook_balance10per == 0) &&
                                                                ($result->payments_balance10per == 0) &&
                                                                ($result->first_balance10per == 0) &&
                                                                ($result->second_balance10per == 0) &&
                                                                ($result->third_balance10per == 0) &&
                                                                ($result->fourth_balance10per == 0) &&
                                                                ($result->fifth_balance10per == 0) &&
                                                                ($result->handover_balance10per == 0)
                                                            ) {
                                                                $pay = "hide";
                                                            } else {
                                                                $pay = "";
                                                            }
                                                        } else if ($result->payment_schedule == 15) {
                                                            if (($result->onbook_balance15per == 0) &&
                                                                ($result->payments_balance15per == 0) &&
                                                                ($result->first_balance15per == 0) &&
                                                                ($result->second_balance15per == 0) &&
                                                                ($result->third_balance15per == 0) &&
                                                                ($result->fourth_balance15per == 0) &&
                                                                ($result->fifth_balance15per == 0) &&
                                                                ($result->handover_balance15per == 0)
                                                            ) {
                                                                $pay = "hide";
                                                            } else {
                                                                $pay = "";
                                                            }
                                                        } else if ($result->payment_schedule == 20) {
                                                            if (($result->onbook_balance20per == 0) &&
                                                                ($result->payments_balance20per == 0) &&
                                                                ($result->first_balance20per == 0) &&
                                                                ($result->second_balance20per == 0) &&
                                                                ($result->third_balance20per == 0) &&
                                                                ($result->fourth_balance20per == 0) &&
                                                                ($result->fifth_balance20per == 0) &&
                                                                ($result->handover_balance20per == 0)
                                                            ) {
                                                                $pay = "hide";
                                                            } else {
                                                                $pay = "";
                                                            }
                                                        }
                                                        ?>
                                                        <a rel="tooltip" class="btn btn-secondary m-btn m-btn--air m-btn--custom <?php echo $add ?> <?php echo $pay ?>" title="Add more" href="{{ route("payments.edit", $result->payment_id) }}">
                                                            <i class="fa fa-plus-square"></i>
                                                        </a>
                                                        <a rel="tooltip" class="btn btn-secondary m-btn m-btn--air m-btn--custom" title="View" href="{{ route("payments.view", $result->customer_id) }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        @if($sessionadmin->adminname == "Admin")
                                                        <a rel="tooltip" class="delete btn btn-secondary m-btn m-btn--air m-btn--custom" title="Delete" data-value="{{$result['cost_id']}}" href="{{ route('payments.delete',$result['cost_id']) }}">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            {!! $results->appends(\Request::except('page'))->render() !!}
                            <!--@include('pagination.default', ['paginator' => $results])-->
                        <?php } else { ?>
                            <div class="text-center">
                                <img src="{{ asset('admin/img/no-record.png') }}">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    .download_pdf {
        margin-bottom: 14px;
        text-align: right;
    }

    .btn.btn-secondary.m-btn.m-btn--air.m-btn--custom {
        padding: 17px;
        /* background: #0054ac; */
        color: white;
        border-radius: 0px;
    }
</style>
@endsection