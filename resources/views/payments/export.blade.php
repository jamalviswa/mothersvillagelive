<table>
    <thead>
        <tr>
            <th width="40px" style="font-weight:bold;">S.No</th>
            <th width="125px" style="font-weight:bold;">Application Number</th>
            <th width="200px" style="font-weight:bold;">Applicant Name</th>
            <th width="100px" style="font-weight:bold;">Application Date</th>
            <th width="90px" style="font-weight:bold;">Gross Amount<br>(in Rupees)</th>
            <th width="150px" style="font-weight:bold;">Total Received Amount<br>(in Rupees)</th>
            <th width="115px" style="font-weight:bold;">Payment Schedule</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach($payments as $result)
        <tr>
            <td><?php echo ++$counter; ?></td>
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
                echo $sum;
                ?>
            </td>
            <td class="text-center">{{ $result->payment_schedule }}{{" %"}}</td>
        </tr>
        @endforeach
    </tbody>
</table>