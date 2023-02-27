<table>
    <thead>
        <tr>
            <th width="40px" style="font-weight:bold;">S.No</th>
            <th width="125px" style="font-weight:bold;">Application Number</th>
            <th width="200px" style="font-weight:bold;">Applicant Name</th>
            <th width="100px" style="font-weight:bold;">Rate per SQFT</th>
            <th width="80px" style="font-weight:bold;">Salable Area</th>
            <th width="80px" style="font-weight:bold;">UDS Area</th>
            <th width="140px" style="font-weight:bold;">Guideline Value</th>
            <th width="140px" style="font-weight:bold;">Land Cost<br>(in Rupees)</th>
            <th width="140px" style="font-weight:bold;">Construction Cost<br>(in Rupees)</th>
            <th width="100px" style="font-weight:bold;">Gross Amount<br>(in Rupees)</th>
            <th width="120px" style="font-weight:bold;">Total Amount<br>(in Rupees)</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach($costs as $cost)
        <tr>
            <td><?php echo ++$counter; ?></td>
            <td>{{ $cost->application_number }}</td>
            <td>{{ $cost->applicant_name }}</td>
            <td>{{ $cost->rate_sqft }}</td>
            <td>{{ $cost->sal_area }}</td>
            <td>{{ $cost->uds_area }}</td>
            <td>{{ $cost->guideline_value }}</td>
            <td>{{ $cost->land_cost }}</td>
            <td>{{ $cost->construction_cost }}</td>
            <td>{{ $cost->gross_amount }}</td>
            <td>{{ $cost->total_amount }}</td>
        </tr>
        @endforeach
    </tbody>
</table>