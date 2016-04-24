<?php
/**
 * Created by PhpStorm.
 * User: itcoder
 * Date: 24.04.16
 * Time: 23:49
 */
$I = new AcceptanceTester($scenario);
$I->wantTo('Show currency');
AboutPage::openBy($I);
$I->see('80.1161');