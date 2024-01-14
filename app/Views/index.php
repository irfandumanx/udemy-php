<?php $this->extend('layouts/base') ?>
<?php $this->section('style') ?>
<?php $this->endSection() ?>
<?php $this->section('script') ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<?php
if(session()->has('userData'))
    echo $this->include('pages/dashboard');
else
    echo $this->include('pages/loginregister');
?>

<?php $this->endSection() ?>
