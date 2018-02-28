<?php
$this->load->view('include/header_view');
if(isset($tela))$this->load->view($tela);
$this->load->view('include/footer_view');