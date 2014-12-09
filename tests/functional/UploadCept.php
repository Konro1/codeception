<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Upload photo');

$I->amOnPage('/');
$I->see('complete');

//all of this doesnt work
$I->fillField('textarea[name^="captions"]', 'test');
$I->fillField('textarea[name="captions[]"]', 'test');
$I->fillField('//textarea[@name="captions[]"]', 'test');
$I->fillField('.caption', 'test');
$I->fillField(array('name' => "captions[]"), 'asdasd');
$I->attachFile('assets[]', 'photo.jpg');

$I->see('Uploaded');