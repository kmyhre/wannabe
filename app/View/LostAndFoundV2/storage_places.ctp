<?=$this->Html->script('jquery/jquery.form.min.js')?>
<?=$this->Html->script('lostandfound/storagePlaces.js')?>
<?=$this->Html->css('lostandfound/lostandfound.css')?>
<?=$this->Html->css('fontawesome/font-awesome.min.css')?>


<div class="row">
    <div class="span-one-third">
        <a href="<?=$this->Wb->eventUrl("/LostAndFoundV2/lost")?>" class="btn large"><?=__("Go to Lost section")?></a>
    </div>
    <div class="span-one-third">
        <a href="<?=$this->Wb->eventUrl("/LostAndFoundV2/found")?>" class="btn large"><?=__("Go to Found section")?></a>
    </div>
    <div class="span-one-third">
        <a href="<?=$this->Wb->eventUrl("/LostAndFoundV2/resolved")?>" class="btn large"><?=__("Go to Resolved section")?></a>
    </div>
</div>
<hr />

<div class="row">
    <div class="span16">
        <form id="addStoragePlaceForm" method="post" action="addStoragePlace">
            <h3><?= __("Add new storage place")?></h3>
            <div class="form-inline">
                <div class="validate clearfix">
                    <?=$this->Form->input('LostAndFoundStoragePlace.name', array('div' => false, 'error' => false, 'label' => false, 'class' => 'input-medium'))?>
                    <button id="addStoragePlace" class="btn success"><?=__("Add")?></button>
                    <span class="help-block"></span>
                </div>
            </div>
        </form>
    </div>
</div>
<hr />
<div class="row">
    <div class="span16">
        <h3><?=__("Active storage places")?></h3>
        <div id="activeUpdate" class="updater"></div>
        <table id="activeStoragePlaces" class="zebra-striped">
            <thead>
                <tr>
                    <th>
                        <?=__("Description") ?>
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<hr />
<div class="row">
    <div class="span16">
        <h3><?=__("Inactive storage places")?></h3>
        <div id="inactiveUpdate" class="updater"></div>
        <table id="inactiveStoragePlaces" class="zebra-striped">
            <thead>
            <tr>
                <th>
                    <?=__("Description") ?>
                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>