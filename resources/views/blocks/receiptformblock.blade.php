<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">MOTHER'S VILLAGE - PHASE1 - BLOCK A</h4>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '<=', 110)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 110)->where('flatnumber', '<=', 120)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 200)->where('flatnumber', '<=', 210)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 210)->where('flatnumber', '<=', 220)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 300)->where('flatnumber', '<=', 310)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 310)->where('flatnumber', '<=', 320)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 400)->where('flatnumber', '<=', 410)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 410)->where('flatnumber', '<=', 420)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 500)->where('flatnumber', '<=', 510)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '16')->where('flatnumber', '>', 510)->where('flatnumber', '<=', 520)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">MOTHER'S VILLAGE - PHASE1 - BLOCK B</h4>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '<', 110)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>=', 110)->where('flatnumber', '<=', 118)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>', 200)->where('flatnumber', '<=', 209)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>=', 210)->where('flatnumber', '<=', 218)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>', 300)->where('flatnumber', '<=', 309)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>=', 310)->where('flatnumber', '<=', 318)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>', 400)->where('flatnumber', '<=', 409)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>=', 410)->where('flatnumber', '<=', 418)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>', 500)->where('flatnumber', '<=', 509)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '17')->where('flatnumber', '>=', 510)->where('flatnumber', '<=', 518)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-box" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">MOTHER'S VILLAGE - PHASE1 - BLOCK C</h4>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '<', 109)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>=', 109)->where('flatnumber', '<=', 115)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>', 200)->where('flatnumber', '<=', 208)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>=', 209)->where('flatnumber', '<=', 216)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>', 300)->where('flatnumber', '<=', 308)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>=', 309)->where('flatnumber', '<=', 316)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>', 400)->where('flatnumber', '<=', 408)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>=', 409)->where('flatnumber', '<=', 416)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>', 500)->where('flatnumber', '<=', 508)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '18')->where('flatnumber', '>=', 509)->where('flatnumber', '<=', 516)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">MOTHER'S VILLAGE - PHASE1 - BLOCK D</h4>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '<', 109)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>=', 109)->where('flatnumber', '<=', 115)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>', 200)->where('flatnumber', '<=', 208)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>=', 209)->where('flatnumber', '<=', 216)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>', 300)->where('flatnumber', '<=', 308)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>=', 309)->where('flatnumber', '<=', 316)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>', 400)->where('flatnumber', '<=', 408)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>=', 409)->where('flatnumber', '<=', 416)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>', 500)->where('flatnumber', '<=', 508)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '19')->where('flatnumber', '>=', 509)->where('flatnumber', '<=', 516)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<h4 style="color: #e51a4b;font-size: 18px !important;font-weight: bolder;">MOTHER'S VILLAGE - PHASE1 - BLOCK E</h4>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '<', 109)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:4pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>=', 109)->where('flatnumber', '<=', 115)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>', 200)->where('flatnumber', '<=', 208)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:4pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>=', 209)->where('flatnumber', '<=', 216)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>', 300)->where('flatnumber', '<=', 308)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:4pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>=', 309)->where('flatnumber', '<=', 316)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>', 400)->where('flatnumber', '<=', 408)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:4pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>=', 409)->where('flatnumber', '<=', 416)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:-2pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>', 500)->where('flatnumber', '<=', 508)->orderBy('flatnumber', 'asc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>
<ul style="position:relative;left:4pc;">
    <?php
    $flats = App\Flatnumber::where('status', 'Active')->where('block', '20')->where('flatnumber', '>=', 509)->where('flatnumber', '<=', 516)->orderBy('flatnumber', 'desc')->get();
    foreach ($flats as $flat) {
        $flattype = App\Flattype::where('status', 'Active')->where('flattype_id', $flat['flattype'])->first();
        $document = App\Document::where('status', 'Active')->where('flatnumber', $flat['flatnumber_id'])->first();
    ?>
        <li style="display: inline-block; list-style-type: none;">
            <div class="j-boxes" id="lab-<?php echo $flattype->flattype ?>">
                <?php if (!empty($document)) {              
                    ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ."\n". substr($document->applicant_name,0,10); ?>">
                <?php  } else {  ?>
                    <input type="button" class="j-numb" value="<?php echo $flat->flatnumber ?>">
                <?php
                } ?>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<style>
    .j-typebox .j-type {
        font-size: 20px;
        font-weight: 600;
        color: black;
        border-radius: 20px;
        height: 60px;
        width: 100px;
        background-color: #21ffff;
    }

    .j-type {
        padding-top: 2pc;
        padding-left: 0.5pc;
    }

    .j-box .j-numb {
        font-size: 15px;
        font-weight: 400;
        color: black;
        border-radius: 20px;
        height: 67px;
        width: 74px;
    }

    .j-boxes .j-numb {
        font-size: 15px;
        font-weight: 400;
        color: black;
        border-radius: 20px;
        height: 67px;
        width: 86px;
    }

    #lab-1#BHK .j-numb {
        background-color: #ffff45;
    }

    #lab-2#BHK .j-numb {
        background-color: #c7f8ca;
    }

    #lab-2#BHK#P .j-numb {
        background-color: #7ea1fa;
    }

    #lab-3#BHK .j-numb {
        background-color: #ffa9ff;
    }
    #lab-2#BHK#SP .j-numb {
        background-color: #a7905a;
    }
    #lab-3#BHK#P .j-numb {
        background-color: #21ffff;
    }
</style>