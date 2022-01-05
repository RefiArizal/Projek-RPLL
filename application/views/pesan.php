<?php
$sukses = $this->session->flashdata('pesan');
if (isset($sukses)) {
  echo '<div class="alert alert-success alert-dismissible fade show"style="width:350px" role="alert">
  ' . $sukses . '
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
  <span>&times</span>
  </button>
</div>';
  $this->session->unset_userdata('pesan');
}
