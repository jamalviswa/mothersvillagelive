@extends('layouts.admin')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Customers All Details
                </h3>
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
                            <input type="text" class="form-control" name="s" placeholder="Search" autocomplete="off" @if(isset($_REQUEST['s'])) value="{{ $_REQUEST['s'] }}" @else value="" @endif />
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary m-btn m-btn--air m-btn--custom" type="submit" name="search"><i class="fa fa-search"></i></button>
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a class="btn btn-danger m-btn m-btn--air m-btn--custom" href="{{route('customers.personal_index')}}"><i class="fa fa-times"></i></a>
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
                        <?php if ($results->count() > '0') { ?>
                            <div class="download_pdf">
                                <a rel="tooltip" style="background: #0054ac;" class="btn btn-secondary m-btn m-btn--air m-btn--custom" title="Download" href="{{ route('customers.export') }}" target="_blank" download>
                                    Export<i style="color: white;font-size: 18px !important;" class="fa fa-download"></i>
                                </a>
                            </div>
                            {!! $results->appends(\Request::except('page'))->render() !!}
                            <div class="table-responsive">
                                <table class="table m-table m-table--head-bg-brand">
                                    <thead>
                                        <tr>
                                            <th class="kj_th" rowspan="2">#</th>
                                            <th class="kj_th" rowspan="2">Application Number</th>
                                            <th class="kj_th" rowspan="2">Application Date</th>
                                            <th class="kj_th" rowspan="2">Applicant Name</th>
                                            <th class="kj_th" rowspan="2">Address</th>
                                            <th class="kj_th" rowspan="2">Mail ID</th>
                                            <th class="kj_th" rowspan="2">Contact Number</th>
                                            <th class="kj_th" rowspan="2">Phase</th>
                                            <th class="kj_th" rowspan="2">Block</th>
                                            <th class="kj_th" rowspan="2">Floor</th>
                                            <th class="kj_th" rowspan="2">Flat Type</th>
                                            <th class="kj_th" rowspan="2">Flat Number</th>
                                            <th class="kj_th" rowspan="2">Facing</th>
                                            <th class="kj_th" rowspan="2">Salable Area</th>
                                            <th class="kj_th" rowspan="2">UDS Area</th>
                                            <th class="kj_th" rowspan="2">Gross Amount<br>(in Rupees)</th>
                                            <th class="kj_th" rowspan="2">Bank/Own</th>
                                            <th class="kj_th" rowspan="2">Bank Name</th>
                                            <th colspan="5" class="text-center" style="background-color: #f4972f;">On Booking</th>
                                            <th colspan="5" class="text-center" style="background-color: #4ab0cf;">Payment for Agreements</th>
                                            <th colspan="5" class="text-center" style="background-color: #329f5b;">Completion of stilt + First Floor</th>
                                            <th colspan="5" class="text-center" style="background-color: #61317a;">Completion of Second Floor</th>
                                            <th colspan="5" class="text-center" style="background-color: #b8ce3c;">Completion of Third Floor</th>
                                            <th colspan="5" class="text-center">Completion of Fourth Floor</th>
                                            <th colspan="5" class="text-center" style="background-color: #f4972f;">Completion of Fifth Floor</th>
                                            <th colspan="5" class="text-center" style="background-color: #61317a;">Handovering</th>
                                            <th class="kj_th" rowspan="2">Total Amount<br>(in Rupees)</th>
                                            <th class="kj_th" rowspan="2">Total Received Amount<br>(in Rupees)</th>
                                            <th class="kj_th" rowspan="2">Total Balance Amount<br>(in Rupees)</th>
                                        </tr>
                                        <tr>


                                            <!-- OnBooking Stage Start -->
                                            <th style="background-color: #f4972f;">Payment Schedule</th>
                                            <th style="background-color: #f4972f;">Payment Date</th>
                                            <th style="background-color: #f4972f;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #f4972f;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #f4972f;">Balance Amount<br>(in Rupees)</th>

                                            <!-- OnBooking Stage End -->

                                            <!-- Payments Stage Start -->
                                            <th style="background-color: #4ab0cf;">Payment Schedule</th>
                                            <th style="background-color: #4ab0cf;">Payment Date</th>
                                            <th style="background-color: #4ab0cf;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #4ab0cf;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #4ab0cf;">Balance Amount<br>(in Rupees)</th>

                                            <!-- Payments Stage End -->

                                            <!-- First Payments Stage Start -->
                                            <th style="background-color: #329f5b;">Payment Schedule</th>
                                            <th style="background-color: #329f5b;">Payment Date</th>
                                            <th style="background-color: #329f5b;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #329f5b;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #329f5b;">Balance Amount<br>(in Rupees)</th>

                                            <!-- First Payments Stage End -->

                                            <!-- Second Payments Stage Start -->
                                            <th style="background-color: #61317a;">Payment Schedule</th>
                                            <th style="background-color: #61317a;">Payment Date</th>
                                            <th style="background-color: #61317a;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #61317a;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #61317a;">Balance Amount<br>(in Rupees)</th>

                                            <!-- Second Payments Stage End -->

                                            <!-- Third Payments Stage Start -->
                                            <th style="background-color: #b8ce3c;">Payment Schedule</th>
                                            <th style="background-color: #b8ce3c;">Payment Date</th>
                                            <th style="background-color: #b8ce3c;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #b8ce3c;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #b8ce3c;">Balance Amount<br>(in Rupees)</th>

                                            <!-- Third Payments Stage End -->

                                            <!-- Fourth Payments Stage Start -->
                                            <th>Payment Schedule</th>
                                            <th>Payment Date</th>
                                            <th>Percentage Amount<br>(in Rupees)</th>
                                            <th>Received Amount<br>(in Rupees)</th>
                                            <th>Balance Amount<br>(in Rupees)</th>

                                            <!-- Fourth Payments Stage End -->

                                            <!-- Fifth Payments Stage Start -->
                                            <th style="background-color: #f4972f;">Payment Schedule</th>
                                            <th style="background-color: #f4972f;">Payment Date</th>
                                            <th style="background-color: #f4972f;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #f4972f;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #f4972f;">Balance Amount<br>(in Rupees)</th>

                                            <!-- Fifth Payments Stage End -->

                                            <!-- Handover Stage Start -->
                                            <th style="background-color: #61317a;">Payment Schedule</th>
                                            <th style="background-color: #61317a;">Payment Date</th>
                                            <th style="background-color: #61317a;">Percentage Amount<br>(in Rupees)</th>
                                            <th style="background-color: #61317a;">Received Amount<br>(in Rupees)</th>
                                            <th style="background-color: #61317a;">Balance Amount<br>(in Rupees)</th>

                                            <!-- Handover Stage Start -->

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = ($results->currentpage() - 1) * $results->perpage() + 1;
                                        foreach ($results as $result) {
                                            $document = App\Document::where('customer_id', $result['customer_id'])->first();
                                            $cost = App\Cost::where('customer_id', $result['customer_id'])->first();
                                            $phase = App\Phase::where('phase_id', $document['phase'])->first();
                                            $block = App\Block::where('block_id', $document['block'])->first();
                                            $floor = App\Floor::where('floor_id', $document['floor'])->first();
                                            $flattype = App\Flattype::where('flattype_id', $document['flattype'])->first();
                                            $flatnumber = App\Flatnumber::where('flatnumber_id', $document['flatnumber'])->first();
                                            $payments = App\Payment::where('customer_id', $result['customer_id'])->where('status', '<>', 'Trash')->orderBy('payment_id', 'asc')->get();
                                            $paymentss = App\Payment::where('customer_id', $result['customer_id'])->where('status', '<>', 'Trash')->orderBy('payment_id', 'asc')->where('addmore', '=', '0')->get();
                                        ?>
                                            <tr>
                                                <td width="5%">{{ $i }}</td>
                                                <td>{{ $result->application_number }}</td>
                                                <td>{{ $result->date_of_application }}</td>
                                                <td>{{ $result->applicant_name }}</td>
                                                <td>{{ $result->permanent_address }}</td>
                                                <td>{{ $result->email }}</td>
                                                <td>{{ $result->phone_code }} {{ $result->phone }}</td>
                                                <td><?php echo substr($phase->phase_name, 6); ?></td>
                                                <td><?php echo substr($block->block_name, 6); ?></td>
                                                <td><?php echo substr($floor->floor_name, 0, -6); ?></td>
                                                <td>{{ $flattype->flattype }}</td>
                                                <td>{{ $flatnumber->flatnumber }}</td>
                                                <td>{{ $document->facing }}</td>
                                                <td class="text-center">{{ $document->salable_area }}</td>
                                                <td class="text-center">{{ $document->uds_area }}</td>
                                                <td>{{ $cost->gross_amount }}</td>
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) { ?>
                                                        {{$paymen->transaction_type}}
                                                    <?php } ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) { ?>
                                                        {{$paymen->bank_type}}
                                                    <?php } ?>
                                                </td>

                                                <!-- OnBooking Stage Start -->
                                                <td class="text-center" style="background-color: #f2f3f8;">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            15%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            20%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->onbook10per != 0)) {
                                                    ?>
                                                            {{$payment->onbook_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->onbook15per != 0)) { ?>
                                                            {{$payment->onbook_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->onbook20per != 0)) { ?>
                                                            {{$payment->onbook_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->onbook10per != 0)) {
                                                    ?>
                                                            {{$payment->onbook10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->onbook15per != 0)) { ?>
                                                            {{$payment->onbook15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->onbook20per != 0)) { ?>
                                                            {{$payment->onbook20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->onbook10per != 0)) {
                                                            if ($payment->onbook_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->onbook15per != 0)) {
                                                            if ($payment->onbook_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->onbook20per != 0)) {
                                                            if ($payment->onbook_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->onbook10per != 0)) {
                                                            if ($payment->onbook_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->onbook15per != 0)) {
                                                            if ($payment->onbook_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->onbook20per != 0)) {
                                                            if ($payment->onbook_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->onbook_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!-- OnBooking Stage End -->

                                                <!-- Payments Stage Start -->
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            40%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            40%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            40%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->payments10per != 0)) {
                                                    ?>
                                                            {{$payment->payments_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->payments15per != 0)) { ?>
                                                            {{$payment->payments_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->payments20per != 0)) { ?>
                                                            {{$payment->payments_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->payments10per != 0)) {
                                                    ?>
                                                            {{$payment->payments10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->payments15per != 0)) { ?>
                                                            {{$payment->payments15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->payments20per != 0)) { ?>
                                                            {{$payment->payments20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->payments10per != 0)) {
                                                            if ($payment->payments_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->payments15per != 0)) {
                                                            if ($payment->payments_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->payments20per != 0)) {
                                                            if ($payment->payments_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->payments10per != 0)) {
                                                            if ($payment->payments_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->payments15per != 0)) {
                                                            if ($payment->payments_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->payments20per != 0)) {
                                                            if ($payment->payments_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->payments_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!-- Payments Stage End -->

                                                <!-- First Payments Stage Start -->
                                                <td class="text-center" style="background-color: #f2f3f8;">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            10%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->first10per != 0)) {
                                                    ?>
                                                            {{$payment->first_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->first15per != 0)) { ?>
                                                            {{$payment->first_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->first20per != 0)) { ?>
                                                            {{$payment->first_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->first10per != 0)) {
                                                    ?>
                                                            {{$payment->first10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->first15per != 0)) { ?>
                                                            {{$payment->first15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->first20per != 0)) { ?>
                                                            {{$payment->first20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->first10per != 0)) {
                                                            if ($payment->first_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->first15per != 0)) {
                                                            if ($payment->first_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->first20per != 0)) {
                                                            if ($payment->first_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_received20per;
                                                            }
                                                        ?>
                                                            {{$payment->first_received20per}}<br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->first10per != 0)) {
                                                            if ($payment->first_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->first15per != 0)) {
                                                            if ($payment->first_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->first20per != 0)) {
                                                            if ($payment->first_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->first_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!-- First Payments Stage End -->

                                                <!-- Second Payments Stage Start -->
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            10%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->second10per != 0)) {
                                                    ?>
                                                            {{$payment->second_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->second15per != 0)) { ?>
                                                            {{$payment->second_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->second20per != 0)) { ?>
                                                            {{$payment->second_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->second10per != 0)) {
                                                    ?>
                                                            {{$payment->second10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->second15per != 0)) { ?>
                                                            {{$payment->second15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->second20per != 0)) { ?>
                                                            {{$payment->second20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->second10per != 0)) {
                                                            if ($payment->second_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->second15per != 0)) {
                                                            if ($payment->second_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->second20per != 0)) {
                                                            if ($payment->second_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->second10per != 0)) {
                                                            if ($payment->second_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->second15per != 0)) {
                                                            if ($payment->second_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->second20per != 0)) {
                                                            if ($payment->second_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->second_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!--Second Payments Stage End -->

                                                <!-- Third Payments Stage Start -->
                                                <td class="text-center" style="background-color: #f2f3f8;">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            5%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->third10per != 0)) {
                                                    ?>
                                                            {{$payment->third_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->third15per != 0)) { ?>
                                                            {{$payment->third_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->third20per != 0)) { ?>
                                                            {{$payment->third_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->third10per != 0)) {
                                                    ?>
                                                            {{$payment->third10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->third15per != 0)) { ?>
                                                            {{$payment->third15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->third20per != 0)) { ?>
                                                            {{$payment->third20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->third10per != 0)) {
                                                            if ($payment->third_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->third15per != 0)) {
                                                            if ($payment->third_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->third20per != 0)) {
                                                            if ($payment->third_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->third10per != 0)) {
                                                            if ($payment->third_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->third15per != 0)) {
                                                            if ($payment->third_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->third20per != 0)) {
                                                            if ($payment->third_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->third_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!-- Third Payments Stage End -->

                                                <!-- Fourth Payments Stage Start -->
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            10%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            5%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            5%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fourth10per != 0)) {
                                                    ?>
                                                            {{$payment->fourth_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fourth15per != 0)) { ?>
                                                            {{$payment->fourth_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fourth20per != 0)) { ?>
                                                            {{$payment->fourth_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fourth10per != 0)) {
                                                    ?>
                                                            {{$payment->fourth10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fourth15per != 0)) { ?>
                                                            {{$payment->fourth15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fourth20per != 0)) { ?>
                                                            {{$payment->fourth20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fourth10per != 0)) {
                                                            if ($payment->fourth_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fourth15per != 0)) {
                                                            if ($payment->fourth_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fourth20per != 0)) {
                                                            if ($payment->fourth_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fourth10per != 0)) {
                                                            if ($payment->fourth_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fourth15per != 0)) {
                                                            if ($payment->fourth_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fourth20per != 0)) {
                                                            if ($payment->fourth_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fourth_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!--Fourth Payments Stage End -->

                                                <!-- Fifth Payments Stage Start -->
                                                <td class="text-center" style="background-color: #f2f3f8;">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            5%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            5%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            5%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fifth10per != 0)) {
                                                    ?>
                                                            {{$payment->fifth_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fifth15per != 0)) { ?>
                                                            {{$payment->fifth_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fifth20per != 0)) { ?>
                                                            {{$payment->fifth_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fifth10per != 0)) {
                                                    ?>
                                                            {{$payment->fifth10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fifth15per != 0)) { ?>
                                                            {{$payment->fifth15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fifth20per != 0)) { ?>
                                                            {{$payment->fifth20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fifth10per != 0)) {
                                                            if ($payment->fifth_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fifth15per != 0)) {
                                                            if ($payment->fifth_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fifth20per != 0)) {
                                                            if ($payment->fifth_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td style="background-color: #f2f3f8;">
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->fifth10per != 0)) {
                                                            if ($payment->fifth_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->fifth15per != 0)) {
                                                            if ($payment->fifth_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->fifth20per != 0)) {
                                                            if ($payment->fifth_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->fifth_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>

                                                <!-- Fifth Payments Stage End -->

                                                <!-- Handover Stage Start -->
                                                <td class="text-center">
                                                    <?php foreach ($paymentss as $paymen) {
                                                        if ($paymen->payment_schedule == 10) {
                                                    ?>
                                                            5%<br>
                                                        <?php } else if ($paymen->payment_schedule == 15) { ?>
                                                            5%<br>
                                                        <?php } else if ($paymen->payment_schedule == 20) { ?>
                                                            5%<br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->handover10per != 0)) {
                                                    ?>
                                                            {{$payment->handover_paymentdate10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->handover15per != 0)) { ?>
                                                            {{$payment->handover_paymentdate15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->handover20per != 0)) { ?>
                                                            {{$payment->handover_paymentdate20per}}<br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->handover10per != 0)) {
                                                    ?>
                                                            {{$payment->handover10per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->handover15per != 0)) { ?>
                                                            {{$payment->handover15per}}<br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->handover20per != 0)) { ?>
                                                            {{$payment->handover20per}}<br><br>
                                                    <?php }
                                                    }  ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->handover10per != 0)) {
                                                            if ($payment->handover_received10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_received10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->handover15per != 0)) {
                                                            if ($payment->handover_received15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_received15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->handover20per != 0)) {
                                                            if ($payment->handover_received20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_received20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php  }
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php foreach ($payments as $payment) {
                                                        if (($payment->payment_schedule == 10) && ($payment->handover10per != 0)) {
                                                            if ($payment->handover_balance10per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_balance10per;
                                                            }
                                                    ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 15) && ($payment->handover15per != 0)) {
                                                            if ($payment->handover_balance15per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_balance15per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                        <?php } else if (($payment->payment_schedule == 20) && ($payment->handover20per != 0)) {
                                                            if ($payment->handover_balance20per == 0) {
                                                                echo "-";
                                                            } else {
                                                                echo $payment->handover_balance20per;
                                                            }
                                                        ?>
                                                            <br><br>
                                                    <?php }
                                                    } ?>
                                                </td>
                                                <td style="text-align:center;">{{ $cost->gross_amount }}</td>
                                                <td style="text-align:center;">
                                                    <?php
                                                    $sum = 0;
                                                    foreach ($payments as $detail) {
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
                                                    if ($sum == 0) {
                                                        echo "-";
                                                    } else {
                                                        echo $sum;
                                                    }
                                                    ?>
                                                </td>
                                                <td style="text-align:center;">
                                                    <?php
                                                    $sum = 0;
                                                    foreach ($payments as $detail) {
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
                                                    $total_amount = $cost->gross_amount;
                                                    $received_amount = $sum;
                                                    $balance_amount = $total_amount - $received_amount;
                                                    if ($balance_amount == 0) {
                                                        echo "-";
                                                    } else {
                                                        echo $balance_amount;
                                                    }
                                                    ?>
                                                </td>

                                                <!--Handover Stage End -->

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

    .kj_th {
        background-color: #0054ac !important;
    }
</style>
@endsection