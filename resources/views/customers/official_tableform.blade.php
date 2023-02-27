<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<img style="width: 30%;position: relative;bottom: 13px;" src="{{ public_path('/admin/img/logos/logo.png') }}" />
<div class="row" style="font-size: 15px;">
    <div class="col-md-6">
        <h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">Customer Document Details</h4>
        <table>
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Application Name</th>
                    <th>App Number</th>
                    <th>Phase</th>
                    <th>Block</th>
                    <th>Floor</th>
                    <th>Flat Type</th>
                    <th>Flat No</th>
                    <th>Facing</th>
                    <th>Saleable Area</th>
                    <th>Plinth Area</th>
                    <th>UDS Area</th>
                    <th>Comn Area</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data['document'] = App\Document::where('status', 'Active')->orderBy('document_id', 'desc')->get();
                $counter = 0;
                foreach ($data['document'] as $result) {
                    $phase = App\Phase::where('phase_id', $result['phase'])->first();
                    $block = App\Block::where('block_id', $result['block'])->first();
                    $floor = App\Floor::where('floor_id', $result['floor'])->first();
                    $flattype = App\Flattype::where('flattype_id', $result['flattype'])->first();
                    $flatnumber = App\Flatnumber::where('flatnumber_id', $result['flatnumber'])->first();
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
                        <td>
                            <?php
                            if ($phase->phase_name == "Phase 1") {
                                echo "1";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($block->block_name == "Block A") {
                                echo "A";
                            } else if ($block->block_name == "Block B") {
                                echo "B";
                            } else if ($block->block_name == "Block C") {
                                echo "C";
                            } else if ($block->block_name == "Block D") {
                                echo "D";
                            } else if ($block->block_name == "Block E") {
                                echo "E";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($floor->floor_name == "First Floor") {
                                echo "1st";
                            } else if ($floor->floor_name == "Second Floor") {
                                echo "2nd";
                            } else if ($floor->floor_name == "Third Floor") {
                                echo "3rd";
                            } else if ($floor->floor_name == "Fourth Floor") {
                                echo "4th";
                            } else if ($floor->floor_name == "Fifth Floor") {
                                echo "5th";
                            }
                            ?>
                        </td>
                        <td>{{$flattype->flattype}}</td>
                        <td>{{$flatnumber->flatnumber}}</td>
                        <td>{{$result->facing}}</td>
                        <td>{{$result->salable_area}}</td>
                        <td>{{$result->plinth_area}}</td>
                        <td>{{$result->uds_area}}</td>
                        <td>{{$result->comn_area}}</td>
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