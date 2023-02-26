<div class="card">
    <div style="font-weight:bold; font-size:16px; background-color:#E74386; z-index: 0!important; text-transform:uppercase; color:#fff" class="card-header">
        <center>
            Address
        </center>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-2 form-group">
                <label class="label" for="PBI_PRESENT_ADD">Present Add :</label>
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_village_name">House No :</label>
                <input name="pre_village_name" type="text" id="pre_village_name" class="form-control" value="<?= $pre_village_name ?>" />
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_union_name">Flat/Floor:</label>
                <input name="pre_union_name" type="text" id="pre_union_name" class="form-control" value="<?= $pre_union_name ?>" />
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_road_no">Road No :</label>
                <input name="pre_road_no" type="text" id="pre_road_no" class="form-control" value="<?= $pre_road_no ?>" />
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_block_no">Block No :</label>
                <input name="pre_block_no" type="text" id="pre_block_no" class="form-control" value="<?= $pre_block_no ?>" />
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_police_station">Police Station :</label>
                <input name="pre_police_station" type="text" id="pre_police_station" class="form-control" value="<?= $pre_police_station ?>" />
            </div>
            <div class="col-md-2 form-group">
                <label class="label" for="pre_district">District :</label>
                <select name="pre_district" class="form-control">
                    <option value="<?= $pre_district ?>">
                        <?= $pre_district ?>
                    </option>
                    <? foreign_relation('district_list', 'district_name', 'district_name', $pre_district, ' 1 order by district_name'); ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 form-group">
                <label class="label" for="PBI_PERMANENT_ADD">Permanent Add :</label>
            </div>

            <div class="col-md-2 form-group">
                <label class="label" for="par_village_name">Village/Road :</label>
                <input name="par_village_name" type="text" id="par_village_name" class="form-control" value="<?= $par_village_name ?>" />
            </div>

            <div class="col-md-2 form-group">
                <label class="label" for="par_union_name">PO :</label>
                <input name="par_union_name" type="text" id="par_union_name" class="form-control" value="<?= $par_union_name ?>" />
            </div>

            <div class="col-md-2 form-group">
                <label class="label" for="par_union_name">PS :</label>
                <input name="par_union_name" type="text" id="par_union_name" class="form-control" value="<?= $par_union_name ?>" />
            </div>


            <div class="col-md-2 form-group">
                <label class="label" for="PBI_POB">District :</label>
                <select name="PBI_POB" class="form-control">
                    <option value="<?= $PBI_POB ?>">
                        <?= $PBI_POB ?>
                    </option>
                    <? foreign_relation('district_list', 'district_name', 'district_name', $PBI_POB, ' 1 order by district_name'); ?>
                </select>
            </div>
        </div>
    </div>
</div>